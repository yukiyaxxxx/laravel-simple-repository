<?php

namespace Yukiyaxxxx\LaravelSimpleRepository\Eloquent;

abstract class BaseRepository
{
    abstract public function model();

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

    public static function all($columns = ['*'])
    {
        $query = static::query();
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

    public static function destroy($ids){
        return static::destroy($ids);
    }

    public function delete($model)
    {
        return $model->delete();
    }

    public function forceDelete($model)
    {
        return $model->forceDelete();
    }

}

