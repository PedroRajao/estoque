## USAGE

### Application
To resolve project's dependencies :<br>
`composer install`

Make a copy of <i>.env.example</i> and name it <i>.env</i> and set the configurations as shown below:

``` 
DB_HOST = localhost
DB_DATABASE = estoque_laravel
DB_USERNAME = { YOUR DB USERNAME }
DB_PASSWORD = { YOUR DB PASSWORD }
```

Generate project's key <br>
```php artisan key:generate```

Start server <br>
```php artisan serve```

### Database

Run the following SQL statement in your local MySQL: <br>
`Create schema estoque_laravel;`

Execute the following command to run the migrations <b>OR</b> use SQL in the _dump for database creation<br>
`php artisan migrate`

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
