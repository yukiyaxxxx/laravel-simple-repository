# laravel-simple-repository


Simple repository library on Laravel.

## Instllation

### Composer install 

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

# API

Extends eloquent methods.

* find($id, $columns = ['*'])
* findMany($ids, $columns = ['*'])
* findOrFail($id, $columns = ['*'])
* findOrNew($id, $columns = ['*'])
* firstOrNew(array $attributes, array $values = [])
* firstOrCreate(array $attributes, array $values = [])
* updateOrCreate(array $attributes, array $values = [])
* firstOrFail($columns = ['*'])
* firstOr($columns = ['*'], $callback = null)
* all($columns = ['*'])
* update($model, array $attributes = [], array $options = [])
* save($model, array $options = [])
* saveOrFail($model, array $options = [])
* destroy($ids){
* delete($model)
* forceDelete($model)



