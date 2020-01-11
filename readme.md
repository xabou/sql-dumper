# Abandoned

All good things come to an end. 
Thanks everyone for using this package :) 

# Laravel SQL Dumper
Display SQL queries executed for current page.

## Installation

#### 1. Require via composer
Add the `xabou/sql-dumper` Composer dependency to your project.
```
composer require xabou/sql-dumper
```

#### 2. Register Service Provider
Open `config/app.php` and append `providers` array with:

```
Xabou\SqlDumper\SqlDumperServicePRovider::class
```

## Configuration

Publish Dumper's configuration file to enable\disable it .

```
php artisan vendor:publish --tag=sql-dumper-config
```

A config file with name `sql-dumper.php` will be created.

```php
return [

    /*
   |--------------------------------------------------------------------------
   | Feature Flag
   |--------------------------------------------------------------------------
   |
   | Here you can enable\disable dumper.
   |
   */

    'enabled' => true,
];
```
## Usage

Enable dumper through config file and see every SQL query executed for current page.

**Note:** Dumper will only render queries in any non production environment.

## License

This package is released under the MIT License.
