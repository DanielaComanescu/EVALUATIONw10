<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    //the designer who draws the charcater
    public function designer() {
        return $this->belongsTo(Designer::class);
    }
}
