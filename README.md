# Hubspot API


## The Project
The HubSpot API for the project of HLB Van Daal

## Prerequistites
1. Laravel Homestead or an own development environment (like XAMPP/WAMP) which meets the following requirements:
	* PHP >= 7.1.3
	* OpenSSL PHP Extension
	* PDO PHP Extension
	* Mbstring PHP Extension
	* Tokenizer PHP Extension
	* XML PHP Extension
	* Ctype PHP Extension
	* JSON PHP Extension
2. Composer installed
3. Git installed

## Install
Make sure you have:
 * Composer installed. If you are not sure run `$ composer -V` in your terminal/commandline.
 * Git installed. If you are not sure run `$ git --version` in your terminal/commandline.

### Clone
Execute the following commands and make sure that you clone the project in your project folder of your development environment (www for WAMP, htdocs for XAMP). 
>Note that some commands may differ depending on your OS. For Mac users, use `cp` instead of `copy`.  

```
$ git clone https://github.com/Baspa/hubspot-api.git
$ cd hubspot-api
$ composer install
$ copy .env.example .env
$ php artisan key:generate
```

### Local server
In your CLI direct to your project folder and execute the following commands:
```
$ php artisan serve
```
Laravel development server starts at: http://127.0.0.1:8000
```

## Build with
* [Laravel](https://laravel.com/) - The PHP backend framework used
* [Laravel-hubspot](https://github.com/rossjcooper/laravel-hubspot) - The HubSpot package for Laravel
## Authors

### Developers
* Bas van Dinther

