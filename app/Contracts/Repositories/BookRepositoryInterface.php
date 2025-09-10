<?php

namespace App\Contracts\Repositories;

interface BookRepositoryInterface extends RepositoryInterface
{
    public function findByName(string $book_name);
}
