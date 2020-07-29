# Backend of POS-System

## System Requirements
- PHP >= 7.2.5
- MySQL
- Composer Installed

## Setup Installation
```bash
    # must be in project api directory
    > composer install

    # copy .env.example and paste in the same directory as .env
    > cp .env.example .env

    # generate key for the application
    > php artisan key:generate

    # in .env file, replace all the required variables with a valid value.
    # assuming the required fields has been filled up in env file. you may now run migration
    > php artisan migrate

    # we use passport for api authentication, inorder to run the api without an error
    # we need to create the encryption keys
    > php artisan passport:install

    # we use swagger for testing the api endpoints
    # run and generate swagger
    > php artisan l5-swagger:generate
    # you may now access the swagger via {APP_URL}/api/documentation 
```
