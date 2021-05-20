<!DOCTYPE html>
<html>
<head>
<!-- Questions -->

    <title>Questions</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @livewireStyles
</head>
<x-app-layout>
<body>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-white leading-tight" style="text-align:left">

        <div class="font-semibold text-xl text-white leading-tight border-white">
            {{ __('Questions') }}
        </div>
    </x-slot>

        <div class="py-12  ">
             <div class="md:px-8">
             
             <div class="col text-center">
                    <button type="button" class="btn btn-secondary" style="" data-toggle="modal" data-target="#exampleModal">
	                        Rajouter une question
                    </button>
            </div>



            <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rajouter une question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Question</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Question" wire:model="name">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                   <!-- TYPE DE QUESTION 
                        <select name="Classe_id" wire:model="Classe_id" class="form-control" id="exampleFormControlInput4" required>
                            <option value="4"></option>
                            <option value="3" >Aucun groupe</option>
                            <option value="0" >TYPEQUESTION 1</option>
                            <option value="1">TYPE QUESTION 2</option>
                            <option value="2">TYPE QUESTION 3 </option>
                        </select>

                    FIN TYPE DE QUESTION -->


                        @error('Classe_id') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Fermer</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Sauvegarder les modifications</button>
            </div>
        </div>
    </div>
</div>






              </div>
            <div class="w-1/3 mx-auto sm:px-6 lg:px-8">
                <div class="body-card">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <table class="table table-bordered mt-5">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Question</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($qst as $key => $question)
                                            <tr data-entry-id="{{ $question->id }}">
                                                <td>
                                                    {{ $question->id ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $question->contenu ?? '' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </x-app-layout>
