<?php

namespace App\Repositories;

use App\Contracts\Repositories\AuthorRepositoryInterface;
use App\Models\Author;

class AuthorRepository extends Repository implements AuthorRepositoryInterface
{
    public function __construct(Author $model)
    {
        parent::__construct($model);
    }

    public function findByName(string $name){
        $this->model->firstWhere('name', '=', $name);
    }

}
