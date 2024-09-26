 # Blog
##  Laravel API Blog 

 This project is a simple blog API built with Laravel. It provides endpoints to create, read, update, and delete blog posts. The application is designed with RESTful principles and includes features like authentication, pagination, and filtering. 
 

## Installation

Install the dependencies and devDependencies and start the server.

```sh
 git clone https://github.com/amalmm/blog.git
 cd blog
 copy .\.env.example .env
 composer install
```

## Configure your .env file
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password
```

## Final steps
```sh
php artisan migrate
php artisan key:generate
http://localhost:8000
```

## Features
```sh
1. blog (store/update/destroy/show/index)

```

## Endpoints
```sh
* blog
    1 ) Store -> /api/blog/store 
    2 ) Update -> /api/blog/update/{id}
    3 ) destroy -> /api/blog/destroy/{id} 
    4 ) Show -> /api/blog/show/{id}
    5 ) All -> /api/blog
```
