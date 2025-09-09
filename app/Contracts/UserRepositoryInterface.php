<?php

namespace App\Contracts;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function findByEmail(string $email);
}
