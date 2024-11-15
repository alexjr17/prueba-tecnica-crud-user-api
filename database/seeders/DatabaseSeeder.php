<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'nombres' => 'test',
            'apellidos' => 'test',
            'numero_telefono' => 3016913855,
            'email' => 'test@example.com',
            'password' => Hash::make('12345678')
        ]);
        // User::factory(15)->create();
    }
}
