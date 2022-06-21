<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>{{ $live->titre }}</h1>

	<div>{{ $live->description }}</div>

	<p><a href="{{ route('lives.index') }}" title="Retourner aux lives" >Retourner aux lives</a></p>

</x-app-layout>
