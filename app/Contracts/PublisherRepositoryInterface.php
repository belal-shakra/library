<?php

namespace App\Contracts;

interface PublisherRepositoryInterface extends RepositoryInterface
{
    public function findByName(string $book_name);
}
