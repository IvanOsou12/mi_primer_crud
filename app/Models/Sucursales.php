<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class);
    }
}



