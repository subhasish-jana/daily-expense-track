<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    public function itemgroup(){
        return $this->belongsto(Itemgroup::class);
    }

    public function user(){
        return $this->belongsto(User::class);
    }
    public function expenditure(){
        return $this->hasMany(Expenditure::class);
    }
}
