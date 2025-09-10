<?php

namespace App\Contracts\Repositories;


interface AuthorRepositoryInterface extends RepositoryInterface
{
    public function findByName(string $name);
}
