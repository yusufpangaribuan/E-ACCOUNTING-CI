# E-ACCOUNTING-CI

* CodeIgniter 3.1.11 is the current version of the framework.
* EasyUi 1.9.5
* [phpdotnev 0.1.1](https://github.com/agungjk/phpdotenv-for-codeigniter)

## Requirements

* PHP 5.6+.
* Postgresql

## Run 
- php -S 127.0.0.1:{port}

## Configuration

Create .env according your environment by copy file .env.example for database configuration and the other configuration. Example : .env.development, .env.testing, .env.production
| Key | Type | Default | Required | Description |	
|---|---|---|---|---|
|POSTGRES_HOST|String||true||
|POSTGRES_PORT|Integer||true||
|POSTGRES_USER|String||true||
|POSTGRES_PASSWORD|String||true||
|POSTGRES_DATABASE|String||true||
