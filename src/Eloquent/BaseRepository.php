<?php

namespace Yukiyaxxxx\LaravelSimpleRepository\Eloquent;

use Yukiyaxxxx\LaravelSimpleRepository\Contracts\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    abstract protected function model();

    protected function newQuery()
    {
        return $this->model()->newQuery();
    }

    protected static function query()
    {
        return (new static)->newQuery();
    }

    public function find($id, $columns = ['*'])
    {
        $query = $this->newQuery();
        return $query->find($id, $columns);
    }


    public function findMany($ids, $columns = ['*'])
    {
        $query = $this->newQuery();
        return $query->findMany($ids, $columns);
    }


    public function findOrFail($id, $columns = ['*'])
    {
        $query = $this->newQuery();
        return $query->findOrFail($id, $columns);
    }


    public function findOrNew($id, $columns = ['*'])
    {
        $query = $this->newQuery();
        return $query->findOrNew($id, $columns);

    }

    public function firstOrNew(array $attributes, array $values = [])
    {
        $query = $this->newQuery();
        return $query->firstOrNew($attributes, $values);
    }


    public function firstOrCreate(array $attributes, array $values = [])
    {
        $query = $this->newQuery();
        return $query->firstOrCreate($attributes, $values);

    }


    public function updateOrCreate(array $attributes, array $values = [])
    {
        $query = $this->newQuery();
        return $query->updateOrCreate($attributes, $values);
    }

    public function firstOrFail($columns = ['*'])
    {
        $query = $this->newQuery();
        return $query->firstOrFail($columns);
    }

    public function firstOr($columns = ['*'], $callback = null)
    {
        $query = $this->newQuery();
        return $query->firstOr($columns, $callback);
    }

    public function all($columns = ['*'])
    {
        $query = $this->newQuery();
        return $query->get($columns);
    }

    public function update($model, array $attributes = [], array $options = [])
    {
        return $model->update($attributes, $options);
    }

    public function save($model, array $options = [])
    {
        return $model->save($options);
    }

    public function saveOrFail($model, array $options = [])
    {
        return $model->saveOrFail($options);
    }

    public function destroy($ids){
        $class = get_class($this->model());

        return $class::destroy($ids);
    }

    public function delete($model)
    {
        return $model->delete();
    }

    public function forceDelete($model)
    {
        return $model->forceDelete();
    }

    public function create(array $attributes = [])
    {
        return $this->newQuery()->create($attributes);
    }

    public function forceCreate(array $attributes)
    {
        return $this->newQuery()->forceCreate($attributes);
    }

    /**
     * Get new eloquent instance.
     *
     * @return mixed
     */
    public function new()
    {
        $class = get_class($this->model());

        return new $class();
    }

}

