<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function status(){
        return $this->belongsTo(Status::class);

    }

    public function recipe(){
        return $this->belongsTo(Recipe::class);

    }


}
