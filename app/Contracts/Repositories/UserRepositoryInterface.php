<?php

namespace App\Contracts\Repositories;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function findByEmail(string $email);
}
