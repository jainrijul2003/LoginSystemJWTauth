---

# Secure Login System

Building a Secure Laravel API with JWT Authentication

Using Laravel 11 to build a system for secure user registration and login with REST APIs using JWT authentication as a security measure.

## About Laravel

<img width="447" alt="Screenshot 2024-06-13 at 3 49 57 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/360cd6aa-e7af-4040-a233-d59887e70f94">

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
- [Simple, fast routing engine](https://laravel.com/docs/routing)
- [Powerful dependency injection container](https://laravel.com/docs/container)
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent)
- Database agnostic [schema migrations](https://laravel.com/docs/migrations)
- [Robust background job processing](https://laravel.com/docs/queues)
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting)

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Commands for Creating the Project

Follow these commands after installing Laravel and Composer on your system. The commands are for macOS users:

### Laravel Installation

For Laravel installation, follow the steps at: [Laravel Installation Guide](https://laravel.com/docs/11.x)

### Project Setup

1. Create a new project:
   ```bash
   composer create-project laravel/laravel example-app
   ```
   *(Replace `example-app` with your project name)*

2. Open the project directory:
   ```bash
   cd example-app
   ```

3. To get `routes/api.php`, run:
   ```bash
   php artisan install:api
   ```

### Database Connection

To connect the project to a database, update the `.env` file (uncomment the section):

<img width="275" alt="Screenshot 2024-06-13 at 3 40 28 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/5a78fffe-16e6-40f6-9117-bcb64a07d1b2">

Configure as follows:
- `DB_CONNECTION=mysql`
- `DB_DATABASE=jwtAPI` *(Replace with your database name)*

### Run Migrations

Run the following command to migrate the database:
```bash
php artisan migrate
```

### Install JWT in Laravel Project

1. **Install JWT:**
   ```bash
   composer require php-open-source-saver/jwt-auth
   ```

2. **Publish JWT Config File:**
   ```bash
   php artisan vendor:publish --provider="PHPOpenSourceSaver\JWTAuth\Providers\LaravelServiceProvider"
   ```

3. **Generate JWT Secret:**
   ```bash
   php artisan jwt:secret
   ```

<img width="702" alt="Screenshot 2024-06-13 at 3 42 59 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/a953ed74-22a4-4ebc-bd56-3ce07c758d68">

### Update Auth File

Update the `auth.php` file in the `config` folder. Make the following changes:

<img width="508" alt="Screenshot 2024-06-13 at 3 46 03 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/11adfc5e-7588-4785-b403-c47cce6e8ccd">
  
<img width="427" alt="Screenshot 2024-06-13 at 3 45 45 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/2bbeaaa3-1517-4634-9933-935ab6c48c32">

### Run the Project

To run the project, use the following command:
```bash
php artisan serve
```

<img width="447" alt="Screenshot 2024-06-13 at 3 47 33 PM" src="https://github.com/jainrijul2003/secure-login-system/assets/100368294/e6b938d7-aa42-462b-bb4a-98afde53b948">

Use the URL provided by the `php artisan serve` command to access your project.

## Authors

- **Rijul Jain**

This README provides a detailed overview of setting up and running a secure login system using Laravel and JWT authentication. It guides users through the necessary steps, commands, and configurations required to get the project up and running.
