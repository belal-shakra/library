<?php

namespace App\Repositories;

use App\Contracts\Repositories\CopyRepositoryInterface;
use App\Models\Copy;

class CopyRepository extends Repository implements CopyRepositoryInterface
{
    public function __construct(Copy $model)
    {
        parent::__construct($model);
    }


}
