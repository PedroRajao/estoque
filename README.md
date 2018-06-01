## USAGE

To resolve project's dependencies :<br>
`composer install`

Copy the <i>.env.example</i> to <i>.env</i> and set the configurations as shown below:

``` 
DB_HOST=localhost
DB_DATABASE=estoque_laravel
DB_USERNAME=root
DB_PASSWORD=xxx 
```

Run the following SQL statement in your local MySQL: <br>
`Create schema estoque_laravel;`

Execute the following command to run the migrations <b>OR</b> use SQL in the _dump for database creation<br>
`php artisan migrate`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
