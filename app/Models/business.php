<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    use HasFactory;
    public function bitem()
    {
        return $this->hasOne('App\Models\bitem', 'id', 'bitem');
    }
}
