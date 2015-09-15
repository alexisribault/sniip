
## Laravel 5.1 - Sniip test

This is an application developed using Laravel 5.1 PHP framework.

## Install

Please follow the steps to install laravel.

* git clone https://github.com/alexisribault/sniip
* cd /your/webroot/path/sniip
* Update the packages composer update (assuming composer is installed to /usr/local/bin)
* Change database credentials in app/config/database.php (I am using MySQL for database, if you are using any other database, please update corresponding configuration key in this file)
* Run the command to install migration php artisan migrate:install
* Create all the required tables: php artisan migrate
* (optional) Use this command to populate your database with some sample tasks php artisan db:seed

That's it! You are now ready to use the application.

Browse the application: http://localhost/sniip/public

## .env example file
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=qjSYrMd0xzGWH9UBdas0KPSNxbWzUjx1

DB_HOST=localhost
DB_DATABASE=sniip
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

```

##Version 1.0

The following features are included in this version:

* Display list of messages
* Add a new message
* Delete a message
