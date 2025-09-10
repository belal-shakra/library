<?php

namespace App\Repositories;

use App\Contracts\Repositories\BookRepositoryInterface;
use App\Models\book;

class BookRepository extends Repository implements BookRepositoryInterface
{
    public function __construct(Book $model)
    {
        parent::__construct($model);
    }

    public function findByName(string $book_name){
        $this->model->firstWhere('name', '=', $book_name);
    }

}
