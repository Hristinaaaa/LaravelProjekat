<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reziser extends Model
{
   

    public function films(){
        return $this->hasMany(Film::class);
}
}