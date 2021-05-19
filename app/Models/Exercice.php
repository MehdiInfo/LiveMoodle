<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    use HasFactory;
    protected $fillable = [
        'nb_question',
        'categorie',
        'Cours_id'
    ];
    public function questions(){
        return $this->hasMany('App\Models\Question', 'id','Exer_id');
    }
    public function cours(){
        return $this->belongsTo('App\Models\Cours', 'Cours_id', 'id');
    }
}
