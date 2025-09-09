<?php

namespace App\Repositories;

use App\Models\Copy;

class CopyRepository extends Repository
{
    public function __construct(Copy $model)
    {
        parent::__construct($model);
    }


}
