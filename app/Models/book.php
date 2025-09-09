<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{


    public function authors(){
        return $this->belongsToMany(Author::class);
    }

    public function copy(){
        return $this->belongsTo(Copy::class);
    }

    public function publisher(){
        return $this->belongsTo(related: Publisher::class);
    }
}
