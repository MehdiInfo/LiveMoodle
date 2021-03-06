<div class="col text-center">
<button type="button" class="btn btn-secondary" style="" data-toggle="modal" data-target="#exampleModal">
	Ajouter un étudiant
</button>
</div>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rajouter un étudiant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom" wire:model="name">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Email">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Mots de passe</label>
                        <input type="password" class="form-control" id="exampleFormControlInput3" wire:model="password" placeholder="Mot de passe">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Groupe</label>
                        <select name="Classe_id" wire:model="Classe_id" class="form-control" id="exampleFormControlInput4" required>
                            <option value="4"></option>
                            <option value="3" >Aucun groupe</option>
                            <option value="0" >S4F5A</option>
                            <option value="1">S4F5B</option>
                            <option value="2">S4F5C</option>
                        </select>
                        @error('Classe_id') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="Etudiant" >Etudiant</label>
                        <input id="Etudiant" class="radio" type="radio" name="statut" value="Etudiant" wire:model="statut"  required >
                        <label for="Prof" >Prof</label>
                        <input id="Prof" class="radio" type="radio" name="statut" value="Prof" wire:model="statut" required >
                        @error('statut') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fermer</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Sauvegarder les modifications</button>
            </div>
        </div>
    </div>
</div>
