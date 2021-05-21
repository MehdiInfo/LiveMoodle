<!DOCTYPE html>
<html>
<head>
<!-- Cours -->

    <title>Cours</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @livewireStyles
</head>
<x-app-layout>
<body>
    <!-- Layout de dashbord -->
        <x-slot name="header">
        <div class="font-semibold text-xl text-gray-300 leading-tight" style="text-align: center">
                {{ __('Mes cours') }}
            </h2>
        </x-slot>

        <a href="dashboard">
        <button class="bg-gray-500 opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-2 border-t-2 border-r-2 border-grey-700 hover:opacity-100  rounded absolute inset-y-1/3  h-96 w-15 ">
             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
             </svg>
        </button>
        </a>


        <a href="tchat">
        <button class="bg-gray-500 opacity-25 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-2 border-t-2 border-l-2 border-grey-700 hover:opacity-100  rounded absolute inset-y-1/3 right-px  h-96 w-15">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
        </a>
        <div class="py-12">

            <div class="w-1/3 mx-auto sm:px-6 lg:px-8">
                @livewire('cours')
                <div class=" ">
                    <div class="h-48 flex flex-wrap content-around ...">
                     @if ($Cours == NULL)
                        <div class=" content-evenly w-1/3 overflow-hidden shadow-xl sm:rounded-lg bg-gray-400">

                            <div class="px-4 py-2">
                                <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">
                                        Vous n'avez aucun cours
                                </h1>
                            </div>
                        </div>
                     @endif
                    </div>

                </div>

            </div>
        </div>
    </div>


    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
</body>
@livewireScripts
</html>
</x-app-layout>
