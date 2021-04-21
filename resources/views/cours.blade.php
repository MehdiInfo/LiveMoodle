<nav x-data="{ open: false }" class="bg-gray-400   "> 
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="  text-black hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <h2 class=" text-yellow-700 leading-tight">
                        {{ __('Accueil') }}
                    </h2>
                    </x-jet-nav-link>
                </div>
                <div class="  text-black hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('cours') }}" :active="request()->routeIs('cours')">
                    <h2 class=" text-yellow-700 leading-tight">
                        {{ __('Mes cours') }}
                    </h2>
                    </x-jet-nav-link>
                </div>
            </div>
        </div>
    </div>    
</nav> 