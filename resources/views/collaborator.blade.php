<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Live') }}
        </h2>
    </x-slot>
    <table width="65%" border="1">
        <thead>
            <tr>
                <th>
                    Nom
                </th>
                <th>Email</th>
                <th>Avancement</th>
                <th>Tuteur</th>
            </tr>
        </thead>
        <div>
        Nombre de collaborateur : {{count($collaborator);}}
        </div>
            @foreach ($collaborator as $collab)
            <tr>
                <td>
                    {{$collab[0]->name}}
                </td>
                <td>
                    {{$collab[0]->email}}
                </td>
                <td>
                    {{$collab[0]->avancement}}
                </td>
                <td>
                    {{$my_user->name}}
                </td>
                </tr>
            @endforeach
</x-app-layout>
<style>

</style>
