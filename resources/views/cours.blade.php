<x-app-layout>
    <!-- Layout de dashbord -->
        <x-slot name="header">
        <div class="font-semibold text-xl text-gray-300 leading-tight">
                {{ __('Mes cours') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                    <x-cours />
                </div>
            </div>
        </div>
    </x-app-layout>
