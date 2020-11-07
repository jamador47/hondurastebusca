<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refugiado extends Model
{
    use HasFactory;
    /**
     * @return HasMany
     */
    public function refugio()
    {
        return $this->belongsTo('App\Models\refugio','refugios_id');
    }
}
