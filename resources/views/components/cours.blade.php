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
        if (Auth::user()->classe->title && Auth::user()->statut=="Etudiant")
         echo Auth::user()->Classe->title;
        else
            echo "aucun";
    @endphp
    </h2>
    <?php
     //Si user est un étudiant affiche les Exercice
        if(Auth::user()->statut=="Etudiant"){

        ?>
        <div class="p-6 sm:px-20 bg-black-900 border-b border-light-black-200">
        <input type="text" class="form-control" id="Code" placeholder="Entrer Du code">
        </div>
    <?php } ?>
    <h2 class="text-white" style="text-align: center">
        Votre etablisement est : {{Auth::user()->etablissement->title}}
    </h2>


</div>
