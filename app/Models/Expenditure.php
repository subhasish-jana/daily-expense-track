<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenditure extends Model
{
    use HasFactory;

    public function item(){
        return $this->belongsto(Item::class);
    }

    public function user(){
        return $this->belongsto(User::class);
    }
}
