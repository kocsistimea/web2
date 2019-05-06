<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Utazas extends Model
{
    protected $fillable = [
        'megnevezes', 'rovidleiras', 'ar', 'datum','dateig', 'hosszuleiras', 'helyszin', 'maxletszam',
    ];

    public function apply()
    {
        return $this->hasMany(Auth::user());
    }
}
