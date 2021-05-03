<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Rechercher un..." />

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
                    <td>
                        S4F5A
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
