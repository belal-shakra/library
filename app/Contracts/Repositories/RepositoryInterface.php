<?php

namespace App\Contracts\Repositories;

interface RepositoryInterface
{
    public function all(array $columns = ['*']);

    public function find(int $id, array $columns = ['*']);

    public function create(array $attributes);

    public function update(int $id, array $attributes);

    public function delete(int $id): bool;
}
