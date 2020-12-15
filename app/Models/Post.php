<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    
    public function user() //関数名は単数形
    {
    return $this->belongsTo('App\User');
    }
}
