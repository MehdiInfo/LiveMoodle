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
                                                
                                                   <td>
                                                      <!-- croix de suppression -->
                                                      <button class=" ">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  class="bi bi-x-octagon " viewBox="0 0 16 16">
                                                             <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                                                             <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                      </button>


                                                   </td>
                                            </tr>
                                           
                                        @endforeach
                                                
                                             
                                                
                                                <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    <input type="text" name="Envoiquestion" class="w-full"/>
                                                    
                                                    <!-- Croix de validation -->
                                                   </td>
                                                   <td>
                                                   <button class="bg-gray-500 hover:bg-red-400 text-gray-300 font-bold py-2 px-8  border border-red-400 rounded ">
                                                        Rajouter une question
                                                    </button>
                                                </td>
                                                </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </x-app-layout>
