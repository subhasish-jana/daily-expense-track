<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemgroup extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsto(User::class);
    }

    public function item(){
        return $this->hasMany(Item::class);
    }
}
