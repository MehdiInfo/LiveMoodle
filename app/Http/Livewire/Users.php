<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Classe;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
class Users extends Component
{
    public $name, $email, $user_id, $password, $statut,$Classe_id,$etab_prof;
    protected $users;
    public $updateMode = false;
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $etab_prof = Auth::user()->Etab_id;
        $searchTerm = '%'.$this->searchTerm.'%';
        $this->users = User::where('statut', 'Etudiant');
        return view('livewire.users',[
            'users' => User::where('Etab_id', $etab_prof)->where('statut', 'Etudiant')->where('name','like', $searchTerm)->paginate(10)
        ]);
    }

    private function resetInputFields(){
        $this->classe = '';
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->statut = '';
        $this->Classe_id = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'statut' => 'required',
            'Classe_id' => 'required',
        ]);

        User::create($validatedDate);

        session()->flash('message', 'Etudiant rajouté !');

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->Classe_id = $user->Classe_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'Classe_id' => 'required',
            'email' => 'required|email',
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'Classe_id' => $this->Classe_id,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Etudiant modifié  !');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Etudiant Supprimé !');
        }
    }
}
