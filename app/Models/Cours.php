<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $filable=[
        'title_cours',
        'Cls_id',
    ];
    public function classes(){
        return $this->belongsTo('App\Models\Classe','Cls_id','id');
    }
    public function exercices(){
        return $this->hasMany('App\Models\Exercice', 'id','Cours_id');
    }
}
