# About Laravel  
<img width="447" alt="Screenshot 2024-06-13 at 3 49 57 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/360cd6aa-e7af-4040-a233-d59887e70f94">  

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.  

# Secure Login System
Building a Secure Laravel API with JWT Authentication
Using Laravel 11 to build a system for secure user register and login with  Rest APIs using JWT authentication as a security measure   
  
# Commands for creating the projects after installing laravel and composer on the system
For laravel installation follow the steps at : https://laravel.com/docs/11.x   
// The commands are for macbook users :

create new project : ~
composer create-project laravel/laravel example-app //( example-app name of project )  
open the project directory ~  
cd example-app  //(your project name )  
to get routes/api.php run : ~  
php artisan install:api  

To connect the project to database go to .env file  ( uncomment the section )  
<img width="275" alt="Screenshot 2024-06-13 at 3 40 28 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/5a78fffe-16e6-40f6-9117-bcb64a07d1b2">  
mysql //( i am using phpmyadmin on localhost so "mysql" as connection here  )  
jwtAPI  //( datadase name )  
  
then Run ~  
php artisan migrate   

Commands to install JWT in laravel project   

Command #1 (Install JWT)  
✔️ composer require php-open-source-saver/jwt-auth  

Command #2 (Publish JWT Config File)  
✔️ php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"  

Command #3 Running the below commands will add the JWT_SECRET in your .env file as follows.  
✔️ php artisan jwt:secret  
<img width="702" alt="Screenshot 2024-06-13 at 3 42 59 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/a953ed74-22a4-4ebc-bd56-3ce07c758d68">

Update Auth File  in config folder 
Make the following changes to the file:  
<img width="508" alt="Screenshot 2024-06-13 at 3 46 03 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/11adfc5e-7588-4785-b403-c47cce6e8ccd">  
<img width="427" alt="Screenshot 2024-06-13 at 3 45 45 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/2bbeaaa3-1517-4634-9933-935ab6c48c32">  

then ~  
php artisan serve // to run the project     
<img width="447" alt="Screenshot 2024-06-13 at 3 47 33 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/e6b938d7-aa42-462b-bb4a-98afde53b948">  
Use the above as starting of url the to your page  
