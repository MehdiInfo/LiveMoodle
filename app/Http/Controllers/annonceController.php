<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;

class annonceController extends Controller
{
    //

    function addAnnonce(Request $req)
    {
        $annonce=new Annonce;
        $annonce->message=$req->annonce;
        $annonce->save();
    }
}
