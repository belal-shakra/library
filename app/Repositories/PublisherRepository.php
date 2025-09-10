<?php

namespace App\Repositories;

use App\Contracts\Repositories\PublisherRepositoryInterface;
use App\Models\Publisher;

class PublisherRepository extends Repository implements PublisherRepositoryInterface
{
    public function __construct(Publisher $model)
    {
        parent::__construct($model);
    }

    public function findByName(string $publisher_name){
        $this->model->firstWhere('name', '=', $publisher_name);
    }

}
