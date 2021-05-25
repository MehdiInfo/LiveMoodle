<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Classe;
use App\Models\Cours as Appcours;
use Illuminate\Support\Facades\Auth;
class Cours extends Component
{
    use WithPagination;
    public $Cls_id, $title_cours;
    public $updateMode = false;
    public function render()
    {
        if(Auth::user()->statut == "Prof"){
            $Cours = Appcours::paginate(5);
            $groupes = Classe::get('title')->all();
            return view('livewire.cours', compact ('Cours', 'groupes'));

        }
       else{
        $c_user = Auth::user()->Classe_id;
        $Cours = Appcours::where('Cls_id', $c_user)->paginate(5);
        return view('livewire.cours', compact ('Cours'));}
    }
    public function delete($id){
        if($id){
            Appcours::where('id','LIKE',$id)->delete();
        }
    }
    private function resetInputFields(){
        $this->title_cours = '';
        $this->Cls_id = '';
    }

    public function store(){
        $validatedDate = $this->validate([
            'title_cours' => 'required',
            'Cls_id' => 'required',
        ]);
        Appcours::create($validatedDate);
        $this->resetInputFields();
    }

}
