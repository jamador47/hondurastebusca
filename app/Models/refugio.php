<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refugio extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function departamento()
    {
        return $this->belongsTo('App\Models\departamento','departamentos_id');
    }

    public function refugiados()
    {
        return $this->hasMany('App\Models\refugiado');
    }
}
