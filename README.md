# laravel-simple-repository


Simple repository library on Laravel.

## Instllation

### Composer install (WIP) 

```
composer require yukiyaxxxx/laravel-simple-repository
```

### Example repository
```
php artisan vendor:publish 
Yukiyaxxxx\LaravelSimpleRepository\Providers\RepositoryServiceProvider
```

### Create repository

```
class ExampleRepository extends BaseRepository implements RepositoryInterface
{
    public function model()
    {
        return new ExampleModel(); // <--- Setting your model instance.
    }


    public function getByEmail($email) // <--- Create method.
    {
        $query = $this->newQuery();
        return $query->where('email', '=', $email)->get();
    }

```

Use.
```
$exampleRepository = new ExampleRepository();

$models =  $exampleRepository->getByEmail($email);
```


