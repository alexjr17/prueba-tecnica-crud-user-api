
##Administración de Usuarios
Esta es una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar registros de usuarios, desarrollada con Laravel y Tailwind CSS.

## Tecnologías utilizadas
Laravel
Tailwind CSS
JSON Web Tokens (JWT)

## Características
Registro y autenticación de usuarios
Creación, lectura, actualización y eliminación de registros de usuarios
Campos de usuario: Nombre, Apellido, Correo, Número de teléfono, Contraseña
Uso de JSON Web Tokens (JWT) para la autenticación
Requisitos
PHP 8.0 o superior
Composer
Base de datos (MySQL)
Instalación


## Clona el repositorio
```
git clone https://github.com/alexjr17/prueba-tecnica-crud-user-api.git
```

## Instala las dependencias de Composer:
```
composer install
php artisan key:generate
```

## Ejecuta las migraciones y seeders para crear la base de datos:
```
php artisan migrate
```

## Inicia el servidor de desarrollo:
```
php artisan serve
```
## Uso
Accede a la aplicación en http://localhost:8000.
Inicia sesión con las credenciales de prueba:
Correo: test@example.com
Contraseña: 12345678


## Despliegue
El proyecto front.end está desplegado en prueba-tecnica-front-crud-user-production.up.railway.app.
El proyecto back-end está desplegado en prueba-tecnica-crud-user-api-production.up.railway.app.
Correo: test@example.com
Contraseña: 12345678

## Contribuciones
Si encuentras algún problema o tienes sugerencias de mejora, no dudes en abrir un issue o enviar un pull request.
