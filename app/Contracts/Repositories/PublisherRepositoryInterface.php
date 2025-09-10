<?php

namespace App\Contracts\Repositories;

interface PublisherRepositoryInterface extends RepositoryInterface
{
    public function findByName(string $publisher_name);
}
