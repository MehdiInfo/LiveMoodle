<x-app-layout>
    <!-- Layout de dashbord -->
        <x-slot name="header">
        <div class="font-semibold text-xl text-red-600 leading-tight">
                {{ __('Gestion des étudiants') }}
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
