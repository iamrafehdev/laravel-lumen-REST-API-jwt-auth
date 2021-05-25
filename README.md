# Laravel RESTFul API with JSON Web Token (JWT)

# Installation
1. Clone this repo
```
https://github.com/iamrafehdev/laravel-lumen-REST-API-jwt-auth.git
```

2. Install composer packages
```
cd laravel-lumen-rest-api-jwt-auth
$ composer install
```

3. Create and setup .env file
```
make a copy of .env.example and rename to .env
$ php artisan key:generate
put database credentials in .env file
$ php artisan jwt:secret
```

4. Migrate and insert records
```
$ php artisan migrate
$ php artisan tinker
$ factory(App\User::class, 10)->create()
$ factory(App\Post::class, 50)->create()
```
