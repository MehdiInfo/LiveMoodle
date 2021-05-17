<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];
    public function users(){
        return $this->hasMany('App\Models\User', 'id','Etab_id');
    }
}
