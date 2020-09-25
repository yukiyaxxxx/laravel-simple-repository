<?php

namespace Yukiyaxxxx\LaravelSimpleRepository\Eloquent;

use Yukiyaxxxx\LaravelSimpleRepository\Contracts\RepositoryInterface;

class ExampleRepository extends BaseRepository implements RepositoryInterface
{
    public function model()
    {
        return new ExampleModel();
    }

    public function getByEmail($email)
    {
        $query = $this->newQuery();
        return $query->where('email', '=', $email)->get();
    }

    public function findByEmail($email)
    {
        $query = $this->newQuery();
        return $query->where('email', '=', $email)->first();
    }

}

