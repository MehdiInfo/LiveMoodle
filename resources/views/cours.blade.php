<x-app-layout>
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
                    <
                </div>

            </div>
        </div>
    </div>


</x-app-layout>
