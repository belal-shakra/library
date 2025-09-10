<?php

namespace App\Contracts;

interface AuthorRepositoryInterface extends RepositoryInterface
{
    public function findByName(string $name);
}
