<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bienvenue, vous êtes administrateur !
                </div>
            </div>
        </div>
    </div>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Vos collaborateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lives</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Témoignages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Références</a>
        </li>
      </ul>
</x-app-layout>
