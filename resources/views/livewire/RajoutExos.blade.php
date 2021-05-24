<button type="button" class="btn btn-secondary" style="" data-toggle="modal" data-target="#exampleModal">
    Ajouter un Exercice
</button>
<br>
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rajouter un Exercice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">Type d'exercice</label>
                            <select name="Categorie" wire:model="Categorie" class="form-control" id="exampleFormControlInput4" required>
                                <option value="4"></option>
                                <option value="QCM" >QCM</option>
                                <option value="CODER">CODER</option>
                            </select>
                            @error('Categorie') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>


                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fermer</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>
