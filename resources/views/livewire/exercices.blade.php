<div class="col text-center">
    @include('livewire.RajoutExos')
   @foreach ($exer as $exo)
                    <br>
                            <div class=" content-evenly overflow-hidden shadow-xl sm:rounded-lg bg-gray-400" >

                                <button wire:click="delete({{ $exo->id }})" class="btn btn-danger btn-sm" style="text-align: center">&#10060</button>
                                <div class="px-4 py-2">
                                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">
                                        {{$exo->Categorie}}
                                    </h1>

                                </div>
                                <div class="px-4 py-2">
                                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">

                                    </h1>

                                </div>
                                <button onclick="window.location='{{ route('Question', $exo->id) }}'"
                                        class="w-full bg-gray-700 pt-5 w-1/2 px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white  focus:bg-gray-400 focus:outline-none">
                                        Questions
                                </button>
                            <br>
                    </div>

    @endforeach
    <div class=" ">
        <div class="">
         @if (empty($exer[0]))
         <br>
            <div class=" content-evenly w-1/1 overflow-hidden shadow-xl sm:rounded-lg bg-gray-400 ">

                <div class="px-4 py-2">
                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center" style="text-align: center" >
                            Vous n'avez aucun exercices
                    </h1>
                </div>
            </div>
         @endif
        </div>

    </div>
</div>
<br>
