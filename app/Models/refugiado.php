<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refugiado extends Model
{
    use HasFactory;

    public function departamento()
    {
        return $this->belongsTo('App\Models\departamento','departamentos_id');
    }

    protected $fillable = ['nombre,identidad,telefono,edad,refugio'];
}
