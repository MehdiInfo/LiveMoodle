<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exercice;
use Livewire\WithPagination;

class Exercices extends Component
{
    use WithPagination;
    public $updateMode = false;
    public $idc, $Categorie;
    public function mount($test){
        $this->idc = $test;
    }

    public function render()
    {
        $csid = $this->idc;
        $exer = Exercice::where('Cours_id', 'LIKE', $csid)->get();
        return view('livewire.exercices',compact('exer', 'csid') );
    }
    private function resetInputFields(){
        $this->Categorie = '';
    }
    public function store(){
        $csid = $this->idc;
        $validatedDate = $this->validate([
            'Categorie' => 'required',
        ]);
        $validatedDate['Cours_id']= $csid;
        Exercice::create($validatedDate);
        $this->resetInputFields();

    }
    public function delete($id){
        if($id){
            Exercice::where('id','LIKE',$id)->delete();
        }
    }

}
