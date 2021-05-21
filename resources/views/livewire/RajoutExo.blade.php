<button type="button" class="btn btn-secondary" style="" data-toggle="modal" data-target="#exampleModal">
    Ajouter un Cours
</button>
<br>
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rajouter un cours</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">nom du cours</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom" wire:model="title_cours" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">Groupe</label>
                            <select name="Classe_id" wire:model="Cls_id" class="form-control" id="exampleFormControlInput4" required>
                                <option value="4"></option>
                                <option value="3" >Aucun groupe</option>
                                <option value="0" >S4F5A</option>
                                <option value="1">S4F5B</option>
                                <option value="2">S4F5C</option>
                            </select>
                            @error('Cls_id') <span class="text-danger error">{{ $message }}</span>@enderror
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
