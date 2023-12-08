<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mantenimiento extends Model
{
    public function sucursal()
    {
        return $this->belongsTo(Sucursales::class);
    }
}
