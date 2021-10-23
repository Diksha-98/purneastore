<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitem extends Model
{
    use HasFactory;
    public function business()
    {
        return $this->hasMany('App\Models\business', 'bitem', 'id');
    }
}
