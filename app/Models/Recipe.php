<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Categories::class);

    }

    public function members(){
        return $this->hasMany(Member::class);
    }
}
