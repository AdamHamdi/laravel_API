
HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan make:model Topicality -m
Model created successfully.
Created Migration: 2020_10_06_175728_create_topicalities_table

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan make:Seeder TopicalityTableSeeder
Seeder created successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan make:Factory TopicalityFactory --mode=Topicality


  The "--mode" option does not exist.



HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan make:Factory TopicalityFactory --model=Topicality
Factory created successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan migrate --seed
Migrating: 2020_10_06_175728_create_topicalities_table
Migrated:  2020_10_06_175728_create_topicalities_table (0.46 seconds)
Seeding: TopicalityTableSeeder

   Symfony\Component\Debug\Exception\FatalThrowableError  : Class 'Topicality' n
ot found

  at C:\xampp\htdocs\LaravelRestApi\vendor\laravel\framework\src\Illuminate\Data
base\Eloquent\FactoryBuilder.php:241
    237|         if ($this->amount < 1) {
    238|             return (new $this->class)->newCollection();
    239|         }
    240|
  > 241|         $instances = (new $this->class)->newCollection(array_map(functi
on () use ($attributes) {
    242|             return $this->makeInstance($attributes);
    243|         }, range(1, $this->amount)));
    244|
    245|         $this->callAfterMaking($instances);

  Exception trace:

  1   Illuminate\Database\Eloquent\FactoryBuilder::make([])
      C:\xampp\htdocs\LaravelRestApi\vendor\laravel\framework\src\Illuminate\Dat
abase\Eloquent\FactoryBuilder.php:178

  2   Illuminate\Database\Eloquent\FactoryBuilder::create()
      C:\xampp\htdocs\LaravelRestApi\database\seeds\TopicalityTableSeeder.php:15

  Please use the argument -v to see more details.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan migrate --seed
Nothing to migrate.
Seeding: TopicalityTableSeeder
Seeded:  TopicalityTableSeeder (0.99 seconds)
Database seeding completed successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan make:controller TopicalityController --api --model=Topicality
Controller created successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan route:list
+--------+-----------+-----------------------------+--------------------+-------
--------------------------------------------+------------+
| Domain | Method    | URI                         | Name               | Action
                                            | Middleware |
+--------+-----------+-----------------------------+--------------------+-------
--------------------------------------------+------------+
|        | GET|HEAD  | /                           |                    | Closur
e                                           | web        |
|        | GET|HEAD  | api/posts                   |                    | App\Ht
tp\Controllers\Api\PostController@index     | api        |
|        | GET|HEAD  | api/topicality              | topicality.index   | App\Ht
tp\Controllers\TopicalityController@index   | api        |
|        | POST      | api/topicality              | topicality.store   | App\Ht
tp\Controllers\TopicalityController@store   | api        |
|        | GET|HEAD  | api/topicality/{topicality} | topicality.show    | App\Ht
tp\Controllers\TopicalityController@show    | api        |
|        | PUT|PATCH | api/topicality/{topicality} | topicality.update  | App\Ht
tp\Controllers\TopicalityController@update  | api        |
|        | DELETE    | api/topicality/{topicality} | topicality.destroy | App\Ht
tp\Controllers\TopicalityController@destroy | api        |
+--------+-----------+-----------------------------+--------------------+-------
--------------------------------------------+------------+

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ t^C

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan make:Seeder UserTableSeeder
Seeder created successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan db:seed
Seeding: UserTableSeeder
Seeded:  UserTableSeeder (0.24 seconds)
Database seeding completed successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan migrate
Migrating: 2020_10_06_220016_add_api_token_to_users_tables
Migrated:  2020_10_06_220016_add_api_token_to_users_tables (0.61 seconds)

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan db:seed
Seeding: UserTableSeeder
Seeded:  UserTableSeeder (0.24 seconds)
Database seeding completed successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$ php artisan db:seed
Seeding: UserTableSeeder
Seeded:  UserTableSeeder (0.24 seconds)
Database seeding completed successfully.

HP@DESKTOP-0V9J87H MINGW64 /c/xampp/htdocs/LaravelRestApi (master)
$
