<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classe;

class VotreClasse extends Controller
{
    public function classe($id){
        return Classe::find($id)->user()->get();
    }
}
