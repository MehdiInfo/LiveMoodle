<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Classe;
use App\Models\Cours;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
class Users extends Component
{
    public function render()
    {
        if(Auth::user()->statut == "Prof"){
            $Cours = Cours::all();
            $groupes = Classe::get('title')->all()->paginate(3);
            return view('livewire.Mescours', compact ('Cours', 'groupes'));

        }
       else{
        $c_user = Auth::user()->Classe_id;
        $Cours = Cours::where('Cls_id', $c_user)->get();
        return view('livewire.Mescours', compact ('Cours'));}

    }
    public function delete($id){
        if($id){
            Cours::where('id',$id)->delete();
        }
    }
}
