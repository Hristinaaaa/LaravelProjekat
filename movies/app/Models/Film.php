<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function rezisers(){
        return $this->hasMany(Reziser::class);
    }

    public function glumacs(){
        return $this->hasMany(Glumac::class);
    }
}
