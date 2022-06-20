<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bunch extends Model
{
    protected $fillable = ['name'];

//    public function subbunches(){
//        return $this->belongsToMany(Subbunche::class);
//    }
//
//    public function scoures(){
//        return $this->belongsTo(Scoure::class);
//    }
//
//    public function subbunche(){
//        return $this->belongsTo(Subbunche::class);
//    }


    public function subbunches()
    {
        return $this->hasMany(Subbunche::class);
    }


}
