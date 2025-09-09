<?php

namespace App\Repositories;

use App\Models\Author;

class AuthorRepository extends Repository
{
    public function __construct(Author $model)
    {
        parent::__construct($model);
    }


}
