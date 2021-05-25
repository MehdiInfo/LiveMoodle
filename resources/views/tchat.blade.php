<x-app-layout >
    <!-- Layout de dashbord -->
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
        <x-slot name="header">
        <div class="font-semibold text-xl text-gray-300 leading-tight">
                {{ __('Tchat en ligne') }}
            </h2>
        </x-slot>



    
        <a href="Mes_cours">
             
             <button class="bg-gray-500 opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-2 border-t-2 border-r-2 border-grey-700 hover:opacity-100  rounded absolute inset-y-1/3  h-96 w-15 ">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
             </button>
             </a>





     
             @php
                     $Utilisateur = Auth::user()->statut;
                     @endphp
                     @if ($Utilisateur == 'Prof')
     
             <a href="/prof/users">
             @else
             <a href="/dashboard">
             @endif

             

<button class="bg-gray-500 opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-2 border-t-2 border-l-2 border-grey-700 hover:opacity-100  rounded absolute inset-y-1/3 right-px  h-96 w-15">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</button>
        </a>

 
        <!-- Bouton gauche !-->




        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                </div>
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </x-app-layout>
