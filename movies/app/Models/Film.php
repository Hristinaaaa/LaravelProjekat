<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function rezisers(){
        return $this->belongsTo(Reziser::class,'reziser_id');
    }

    public function glumacs(){
        return $this->belongsTo(Glumac::class,'glumac_id');
    }


        public function users(){
        return $this->belongsTo(User::class,'user_id');
    }


}
