LoremDataServiceProvider
=======================

LoremDataServiceProvider is a service provider that bring [RedBeanPHP][1] PHP ORM in 
[Silex][2] framework.

## Dependencies

This service provider relies upon the [RedBeanPHP][1] project.

## Installation

Put this requirement inside your composer.json file :

```yaml
{
    "require": {
        "papepapes/lorem-data-service-provider": "*"
    }
}
```
Then install your libs with composer:
```bash
$ php composer install
```

## Options

The options you can pass to the provider are the follows:
 
* `rb.database.dsn` : The DSN of your connection.
* `rb.database.username` : The username you use to connect to your database server.
* `rb.database.password` : The password you use to connect to your database server.


## Usage

To connect to a sqlite database:
```php
<?php 
$app->register(new Papepapes\RedBeanServiceProvider(), array(
	'rb.database.dsn'=>'sqlite:/tmp/dbfile.txt', 
	'rb.database.user' => 'your_username',
	'rb.database.password' => 'your_password'
	));
```
To connect to a MySQL server:
```php
<?php 
$app->register(new Papepapes\RedBeanServiceProvider(), array(
	'rb.database.dsn'=>'mysql:host=localhost;dbname=your_database', 
	'rb.database.user' => 'your_username',
	'rb.database.password' => 'your_password'
));
```
To connect to a PostgreSQL server:
```php
<?php 
$app->register(new Papepapes\RedBeanServiceProvider(), array(
	'rb.database.dsn'=>'pgsql:host=localhost;dbname=your_database', 
	'rb.database.user' => 'your_username',
	'rb.database.password' => 'your_password'
));
```


[1]: http://www.redbeanphp.com
[2]: http://silex.sensiolabs.org
