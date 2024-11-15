
##Administración de Usuarios
Esta es una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar registros de usuarios, desarrollada con Laravel y Tailwind CSS.

## Características
Registro y autenticación de usuarios
Creación, lectura, actualización y eliminación de registros de usuarios
Campos de usuario: Nombre, Apellido, Correo, Número de teléfono, Contraseña
Uso de JSON Web Tokens (JWT) para la autenticación
Requisitos
PHP 8.0 o superior
Composer
Base de datos (MySQL, PostgreSQL, etc.)
Instalación
Clona el repositorio:

## Clone
```
git clone https://github.com/tu-usuario/administracion-usuarios.git
```
## Instala las dependencias de Composer:

```
composer install
Copia el archivo .env.example a .env y configura las variables de entorno, incluyendo la conexión a la base de datos.
Genera la clave de la aplicación:
php artisan key:generate
```

Copy

## Ejecuta las migraciones y seeders para crear la base de datos:
```
php artisan migrate
```
## Inicia el servidor de desarrollo:

```
php artisan serve
Uso
Accede a la aplicación en http://localhost:8000.
Inicia sesión con las credenciales de prueba:
Correo: test@example.com
Contraseña: 12345678
```

## Despliegue
El proyecto está desplegado en https://administracion-usuarios.domcloud.dev/.

## Tecnologías utilizadas
Laravel
Tailwind CSS
JSON Web Tokens (JWT)

## Contribuciones
Si encuentras algún problema o tienes sugerencias de mejora, no dudes en abrir un issue o enviar un pull request.
