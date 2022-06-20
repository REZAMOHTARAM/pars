<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subbunche extends Model
{
    protected $fillable = ['name' , 'bunch_id'];

//    public function bunches(){
//        return $this->belongsToMany(Bunch::class);
//    }
//
//    public function scoures(){
//        return $this->belongsTo(Scoure::class);
//    }
//
//    public function bunche(){
//        return $this->belongsTo(Bunch::class);
//    }
//
//    public function subsetbunches(){
//        return $this->belongsTo(Subsetbunch::class);
//    }


    public function subsetBunches()
    {
        return $this->hasMany(Subsetbunch::class,'subbunch_id','id');
    }

}
