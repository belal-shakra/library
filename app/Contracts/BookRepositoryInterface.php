<?php

namespace App\Contracts;

interface BookRepositoryInterface extends RepositoryInterface
{
    public function findByName(string $book_name);
}
