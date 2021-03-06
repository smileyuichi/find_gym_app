<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;
    public function features()
    {
        return $this->belongsToMany('App\Models\Feature')->withTimestamps();
    }
}
