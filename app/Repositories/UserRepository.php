<?php

namespace App\Repositories;

use App\Models\User;
use App\Contracts\UserRepositoryInterface;

class UserRepository extends Repository implements UserRepositoryInterface
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }


    public function findByEmail(string $email){
        $this->model->where('email', '=',$email)->first();
    }
}
