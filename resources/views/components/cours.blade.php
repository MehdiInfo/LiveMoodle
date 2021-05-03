<div class="p-6 sm:px-20 bg-black-900 border-b border-light-black-200">
    <title > <h1>Génération des cours de la bdd</h1></title>
    <h2 class="text-white" style="text-align: center">
            vous etes un {{Auth::user()->statut}}
        </h2><br>
    <h2 class="text-white" style="text-align: center">
            votre Nom est {{Auth::user()->name}}
    </h2>
    <h2 class="text-white" style="text-align: center">
    Groupe :
    @php
        if (Auth::user()->classe->title)
         echo Auth::user()->classe->title;
        else
            echo "aucun";
    @endphp
    </h2>

</div>
