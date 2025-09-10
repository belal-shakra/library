<?php

namespace App\Contracts;

interface RoleRepositoryInterface extends RepositoryInterface
{
    public function findByRole(string $role);
}
