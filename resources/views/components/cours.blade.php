<div class="h-48 flex flex-wrap content-around ...">


<div class=" content-evenly w-1/3 overflow-hidden shadow-xl sm:rounded-lg bg-gray-400">

    <div class="px-4 py-2">
        <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">
        Cours 1
        </h1>

    </div>

    <div class=" flex items-center justify-center px-4 py-2 bg-gray-900">
            <div class="text-center  text-white-600"  >
            DESC
            </div>
    </div>

    <button onclick="window.location='{{ route('Question') }}'"
            class="w-full bg-gray-700 pt-5 w-1/5 px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white  focus:bg-gray-400 focus:outline-none">
            Cours 1 (Cliquez ici)
    </button>


</div>



<div class=" content-evenly w-1/3 overflow-hidden shadow-xl sm:rounded-lg bg-gray-400 ml-5">

    <div class="px-4 py-2">
        <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">
        Cours 2
        </h1>

    </div>

    <div class=" flex items-center justify-center px-4 py-2 bg-gray-900">
            <div class="text-center  text-white-600"  >
            DESC
            </div>
    </div>

    <button
            class="w-full bg-gray-700 pt-5 w-1/5 px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white  focus:bg-gray-400 focus:outline-none">
            Cours 2
    </button>


</div>



</div>



<!--


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

-->


