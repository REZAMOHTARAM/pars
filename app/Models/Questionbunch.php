<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionbunch extends Model
{
    protected $fillable = ['name' , 'label' , 'subsetbunch_id'];

    public function scoures(){
        return $this->hasOne(Scoure::class);
    }

    public function subsetbunches(){
        return $this->belongsTo(Subsetbunch::class);
    }

}
