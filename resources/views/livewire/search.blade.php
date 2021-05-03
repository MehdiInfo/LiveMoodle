<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Rechercher...." wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Nom</th>
                    <th>EMail</th>
                    <th>Classe</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <?php
                                switch($value->Classe_id){
                                    case 0: ?>
                                    <td> Sans groupe</td>
                                    <?php break; ?>
                                    <?php case 1: ?>
                                    <td>S4F5A</td>
                                    <?php break; ?>
                                    <?php case 2: ?>
                                    <td> S4F5B</td>
                                    <?php break; ?>
                                    <?php case 3: ?>
                                    <td>S4F5C</td>
                                    <?php break; ?>
                                    <?php
                                }
                                ?>
                </tr>
                @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
