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

        <div class="py-12">

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
