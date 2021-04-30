<!DOCTYPE html>
<html>
<head>
    <title>Rajouter des étudiants</title>
    @livewireStyles
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<x-app-layout>
<body>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-white leading-tight" style="text-align:center">

        <div class="font-semibold text-xl text-white leading-tight">
            {{ __('Liste des étudiants') }}
        </div>
    </x-slot>
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
            <div class="card-header bg-success text-white ">
                <strong>Rechercher un étudiant</strong>
            </div>
            <div class="card-body">
                @livewire('search')
            </div>
            </div>
        </div>
        </div>
    </div>
</body>
@livewireScripts
</html>
</x-app-layout>
