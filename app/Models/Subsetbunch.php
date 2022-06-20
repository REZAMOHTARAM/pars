<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsetbunch extends Model
{
    protected $fillable = ['name' , 'subbunch_id'];

//    public function scoures(){
//        return $this->belongsToMany(Scoure::class);
//    }
//
//    public function subbunches(){
//        return $this->belongsTo(Subbunche::class);
//    }
//
//    public function questionbunches(){
//        return $this->belongsTo(Questionbunch::class);
//    }

    public function questions()
    {
        return $this->hasMany(Questionbunch::class,'subsetbunch_id','id');
    }

    public function unAnsweredQuestions()
    {
        dd($this);

//        dd($this->questions);
        foreach($this->questions as $question)
        {

            dump($question->id);


        }

        dd('');



    }
}
