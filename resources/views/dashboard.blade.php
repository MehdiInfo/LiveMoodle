<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script type="text/javascript" src="{{URL::asset('\js\scripts.js')}}"></script>
    <title>Mon chat</title>
</head>

<x-app-layout>

<!-- Layout de dashbord -->
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-white leading-tight" style="text-align:left">

        <div class="font-semibold text-xl text-gray-300 leading-tight">
            {{ __('Accueil') }}
        </div>
    </x-slot>
<!-- Bouton gauche !-->

<a href="/prof/users">
<button class="bg-gray-500 opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-2 border-t-2 border-r-2 border-grey-700 hover:opacity-100  rounded absolute inset-y-1/3 h-96 w-15  ">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
</button>
</a>


<a href="Mes_cours">
<button class="bg-gray-500 opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-2 border-t-2 border-l-2 border-grey-700 hover:opacity-100  rounded absolute inset-y-1/3 right-px h-96 w-15 ">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</button>
</a>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">

             <!--   <x-jet-welcome />-->
    


    <div class="p-6 sm:px-20 bg-gray-900 border-b border-gray-500">
        <div>
           <x-jet-application-logo class="block h-12 w-auto" />
        </div>

    <div class="p-2 mt-8 text-2xl text-gray-300">
          ANNONCES
    </div>


<body>
    <section class="container">
        <main class="row">

        <div class="col-12 my-1">
            <div class="p-2 h-96 shadow-xl overflow-y-scroll bg-gray-400 border-4 border-gray-500" id="ANNONCES" >
            -> Crée le 27/04/2021
        </div>
    </div>
<div class="col-12 saisie">


@php
                $Utilisateur = Auth::user()->statut;
                @endphp
                @if ($Utilisateur == 'Prof')

                <form action="dashboard" method="POST" >
                @csrf
                    <div class="w-full">
                        <input class="w-3/4 rounded bg-gray-400" type="texte" name="annonce" placeholder="Entrez une nouvelle annonce visible par tous les internautes..."> 
                        <button class="w-1/4 bg-gray-400 rounded"  type="submit"> Ajouter une annonce </button>
                    </div>
                  
                </form>
             


<!--
    <div class="input-group">
        <input wire:model="message" type="text" class="form-control" id="texte" placeholder="Entrez une nouvelle annonce visible par tous les internautes...">
        <div class="input-group-append">
            <span class="input-group-text" id="valid">  <i class="la la-check"></i></span>
        </div>
    </div>

-->

    
@endif
</div>


        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
        
            </div>
        </div>
    </div>
</div>
</html>

            </div>
        </div>
    </div>
</x-app-layout>



