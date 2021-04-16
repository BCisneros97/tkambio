## Configuración

- Ejecutar: composer install
- Crear el archivo .env, copiar el contenido de .env.example y cambiar los parámetros de conexión con la base de datos.
- Ejecutar: php artisan key:generate
- Ejecutar: php artisan jwt:secret
- Ejecutar: php artisan migrate:fresh --seed
- Iniciar el servidor con: php artisan serve

## Usuarios

- Administrador: admin@tkambio.com - 123456
- Operador: juan@tkambio.com - 123456
