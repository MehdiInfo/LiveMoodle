<div>
    @foreach ($Cours as $uncours)
                    <br>
                            <div class=" content-evenly w-1/3 overflow-hidden shadow-xl sm:rounded-lg bg-gray-400">
                                <button wire:click="delete({{ $uncours->id }})" class="btn btn-danger btn-sm">Supprimer</button>
                                <div class="px-4 py-2">
                                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">
                                        {{$uncours->title_cours}}
                                    </h1>

                                </div>
                                <div class="px-4 py-2">
                                    <h1 class="text-3xl font-bold text-gray-800 uppercase dark:text-white text-center">
                                        {{$groupes[$uncours->Cls_id]->title}}
                                    </h1>

                                </div>
                                <button onclick="window.location='{{ route('Question') }}'"
                                        class="w-full bg-gray-700 pt-5 w-1/5 px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-200 transform bg-white  focus:bg-gray-400 focus:outline-none">
                                        Exercices
                                </button>
                            <br>
                    </div>

    @endforeach
</div>

