<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;


class annonceController extends Controller
{
    //
/*
    function index(){
        return view('dashboard');
    }
    */

    function addAnnonce(Request $req)
    {
        $annonce=new Annonce;
        $annonce->message=$req->annonce;
        $annonce->createur=Auth::user()->name;
        $annonce->save();
        
        $data=Annonce::get();
        return view('dashboard',compact('data'));
    }
}
