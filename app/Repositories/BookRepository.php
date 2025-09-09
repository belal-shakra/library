<?php

namespace App\Repositories;

use App\Models\book;

class BookRepository extends Repository
{
    public function __construct(Book $model)
    {
        parent::__construct($model);
    }


}
