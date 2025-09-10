<?php

namespace App\Contracts\Repositories;

interface RoleRepositoryInterface extends RepositoryInterface
{
    public function findByRole(string $role);
}
