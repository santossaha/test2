<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function Country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function City()
    {
        return $this->hasOne(City::class,'state_id');
    }
}
