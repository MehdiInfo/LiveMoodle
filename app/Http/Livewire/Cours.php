<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Classe;
use App\Models\Cours as Appcours;
use Illuminate\Support\Facades\Auth;
class Cours extends Component
{
    public function render()
    {
        if(Auth::user()->statut == "Prof"){
            $Cours = Appcours::all();
            $groupes = Classe::get('title')->all();
            return view('livewire.cours', compact ('Cours', 'groupes'));

        }
       else{
        $c_user = Auth::user()->Classe_id;
        $Cours = Appcours::where('Cls_id', $c_user)->get();
        return view('livewire.cours', compact ('Cours'));}
    }
    public function delete($id){
        if($id){
            Appcours::where('id','LIKE',$id)->delete();
        }
    }

}
