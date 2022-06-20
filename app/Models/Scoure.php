<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scoure extends Model
{
    protected $fillable = ['user_id' , 'bunch_id' , 'subbunch_id' , 'subsetbunch_id' ,'questionbunch_id' , 'scoure'];

    public function bunches(){
        return $this->hasMany(Bunch::class ,'id' , 'bunch_id');
    }

    public function subbunches(){
        return $this->hasMany(Subbunche::class);
    }

    public function subsetbunches(){
        return $this->hasMany(Subsetbunch::class);
    }

    public function questionbunches(){
        return $this->hasMany(Questionbunch::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
