Actividad 3: Ajustes globales en configuración del proyecto
1.	Configuración inicial del proyecto
El proyecto de Laravel esta correctamente instalado.
Cambio de idioma
En app.php cambie el idioma a español
'locale' => env('APP_LOCALE', 'es'),
'fallback_locale' => env('APP_FALLBACK_LOCALE', 'es'),
 'faker_locale' => env('APP_FAKER_LOCALE', 'es_MX')
También instale los paquetes de traducción con:
composer require --dev laravel-lang/lang
Soft-wrap
Luego le agregue el nuevo idioma
Php artistan Lang:add es

Zona horaria
Configure la zona horaria a America/Merida en
 config/app.php:
'timezone' => 'America/Merida',
 Foto de perfil
Modifique el archivo comentado de jetstream en la línea 63 descomente y actualice en el navegador.
En el archivo .env en la línea 37 en vez de local se le pone public.
 
Conexión con MySQL
Configure la base de datos en .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=appointment_db_8sc
DB_USERNAME=laravel8sc
DB_PASSWORD=123
•	Se creó la base de datos en MySQL con:
CREATE DATABASE appointment_db_8sc DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
•	Se creó el usuario:
CREATE USER 'laravel8sc'@'localhost' IDENTIFIED BY '123';
GRANT ALL PRIVILEGES ON appointment_db_8sc.* TO 'laravel8sc'@'localhost';
FLUSH PRIVILEGES;
Se ejecutaron las migraciones con:
php artisan migrate
Se verificó la existencia de las tablas (users, sessions, etc.) y el acceso correcto.
Verificación del funcionamiento
Utilize DBeaver para confirmar que las tablas fueron creadas y que se puede acceder con el usuario configurado.
 

 Commit
Mensaje del commit:
configure MySQL connection, timezone, language and profile photo
Enlace al commit: https://github.com/Melisa-Vazquez/market-app-8sc.git
