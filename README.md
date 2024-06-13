# Secure Login System
Using Laravel 11 to build a system for secure user register and login with  Rest APIs using JWT authentication as a security measure 
# About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
# Commands for creating the projects after installing laravel and composer on the system

// The commands are for macbook users :

create new project : ~
composer create-project laravel/laravel example-app //( example-app name of project )
open the project directory ~
cd example-app  //(your project name )
to get routes/api.php run : ~
php artisan install:api

connect the project to database 
in .env file  ( uncomment the section )

DB_CONNECTION=mysql //( i am using phpmyadmin on localhost so "mysql" as host here  )
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jwtAPI  //( datadase name )
DB_USERNAME=root    
DB_PASSWORD=


then Run ~
php artisan migrate 

Commands to install JWT in laravel project 

Command #1 (Install JWT)
✔️ composer require php-open-source-saver/jwt-auth

Command #2 (Publish JWT Config File)
✔️ php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"

Command #3 (Generate JWT Secret Key)
✔️ php artisan jwt:secret

then ~
php artisan serve // to run the project 

