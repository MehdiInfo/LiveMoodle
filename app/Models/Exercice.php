<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    use HasFactory;
    protected $fillable = [
        'nb_question',
        'categorie'
    ];
    public function questions(){
        return $this->hasMany('App\Models\Question', 'id','Exer_id');
    }
}
