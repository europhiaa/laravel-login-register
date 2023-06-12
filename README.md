## Template
https://github.com/ColorlibHQ/AdminLTE/releases/tag/v3.1.0

- cp .env.example .env
- php artisan optimize:clear
- php artisan key:generate (generate app key)

## Langkah
- php artisan migrate
- php artisan make:seeder UserData
- php artisan db:seed --class=UserData
- php artisan make:middleware CekUserLogin

### update kernel.php di bagian protected $routeMiddleware
'cekUserLogin' => \App\Http\Middleware\CekUserLogin::class,

- php artisan make:controller LoginController
- php artisan make:controller BerandaController
- php artisan make:controller KasirController
