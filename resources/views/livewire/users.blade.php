<div>
    @include('livewire.create')
    @include('livewire.update')
    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input type="text"  class="form-control" placeholder="Rechercher...." wire:model="searchTerm" />
                <table class="table table-bordered mt-5">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Classe</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($users as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <?php
                                switch($value->Classe_id){
                                    case 3: ?>
                                    <td> Aucun groupe</td>
                                    <?php break; ?>
                                    <?php case 0: ?>
                                    <td>S4F5A</td>
                                    <?php break; ?>
                                    <?php case 1: ?>
                                    <td> S4F5B</td>
                                    <?php break; ?>
                                    <?php case 2: ?>
                                    <td>S4F5C</td>
                                    <?php break; ?>
                                    <?php
                                }
                                ?>

                            <td>
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-secondary btn-sm">Modifier</button>
                            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Supprimer</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
