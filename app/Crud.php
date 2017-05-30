<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    public function gettitleAttribute($value)
    {
        return ucfirst($value);
    }
}
