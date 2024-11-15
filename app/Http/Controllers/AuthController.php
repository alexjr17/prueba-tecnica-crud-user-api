<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate(User::$rules);

        DB::beginTransaction();

        try {
            $user = User::create([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'numero_telefono' => $request->numero_telefono,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            auth()->login($user);
            $user_logged = auth()->user();

            $token = JWTAuth::claims([
                "user_id" => $user->id,
                "rol_id" => null,
                "club_id" => null
            ])->fromUser($user_logged);

            DB::commit();
            return response()->json(['token' => $token, 'user' => $user_logged], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['errors' => $th->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|string'
            ]);

            // Intentar autenticar al usuario
            if (!$token = auth()->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                return response()->json([
                    'message' => 'Credenciales incorrectas',

                ], 401);
            }

            $user = auth()->user();

            // Generar nuevo token con claims
            $token = JWTAuth::claims([
                "user_id" => $user->id
            ])->fromUser($user);

            return response()->json([
                'token' => $token,
                'user' => $user
            ], 200);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Error de validación',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error en el servidor',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function logout()
    {
        try {
            auth()->logout();
            return response()->json(['message' => 'Sesión cerrada correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al cerrar sesión'], 500);
        }
    }

    public function me()
    {
        try {
            return response()->json(auth()->user());
        } catch (\Exception $e) {
            return response()->json(['message' => 'No autorizado'], 401);
        }
    }
    public function refresh()
    {
        try {
            return response()->json([
                'token' => auth()->refresh(),
                'user' => auth()->user()
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al refrescar el token'], 401);
        }
    }
}
