# Symfony Example App

This is a Symfony example application, only for educational purposes.

## Installation
You need to install PHP Composer, Docker and docker-compose then:
```sh
cd myapp/
docker-compose up -d
composer install
```
At the end of instllation Composer asks for parameters, you can enter them like below:
```yml
parameters:
    database_host: db
    database_port: null
    database_name: myapp
    database_user: root
    database_password: root
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: ThisTokenIsNotSoSecretChangeIt
```

Now you have to create a database and schema:
```sh
docker-compose run web php /var/www/app/console doctrine:database:create
docker-compose run web php /var/www/app/console doctrine:schema:create
```

## Troubleshooting
If you are getting a permission error in cache directory you can safely remove all of its content and set correct permissions:
```sh
sudo rm -rf app/cache/*
sudo rm -rf app/logs/*
sudo chmod -Rf 0777 app/cache
sudo chmod -Rf 0777 app/logs
```
