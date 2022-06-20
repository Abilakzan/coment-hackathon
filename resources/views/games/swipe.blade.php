<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div><p>Swipe Left or right</p></div>
    {{$question->question}}
    <a href="{{route('postResult', ['reponse' => 'oui', 'question' => $question])}}">Oui</a>
    <a href="{{route('postResult', ['reponse' => 'non', 'question' => $question])}}">Non</a>
</x-app-layout>
