<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'title',
    ];
    use HasFactory;
    public function users(){
        return $this->hasMany('App\Models\User', 'id','Classe_id');
    }
    public function cours(){
        return $this->hasmany('App\Models\Cours','id','Cls_id');
    }
}
