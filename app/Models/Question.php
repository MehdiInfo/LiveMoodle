<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'contenu',
    ];
    public function questions(){
        return $this->belongsTo('App\Models\Exercice', 'Exer_id','id');
    }

}
