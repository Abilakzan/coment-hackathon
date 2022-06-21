<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>Tous les articles</h1>

<p>
    <!-- Lien pour créer un nouvel article : "lives.create" -->
    <a href="{{ route('lives.create') }}" title="Créer un article" >Créer un nouveau live</a>
</p>

<!-- Le tableau pour lister les articles/lives -->
<table border="1" >
    <thead>
        <tr>
            <th>Titre</th>
            <th colspan="2" >Description</th>
        </tr>
    </thead>
    <tbody>
        <!-- On parcourt la collection de live -->
        @foreach ($lives as $live)
        <tr>
            <td>
                <!-- Lien pour afficher un live : "lives.show" -->
                <a href="{{ route('lives.show', $live) }}" title="Lire l'article" >{{ $live->titre }}</a>
            </td>
            <td>
            <td>
                {{$live->description}}
            </td>
            <td>
                <!-- Lien pour modifier un live : "lives.edit" -->
                <a href="{{ route('lives.edit', $live) }}" title="Modifier l'article" >Modifier</a>
            </td>
            <td>
                <!-- Formulaire pour supprimer un live : "lives.destroy" -->
                <form method="POST" action="{{ route('lives.destroy', $live) }}" >
                    <!-- CSRF token -->
                    @csrf
                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                    @method("DELETE")
                    <input type="submit" value="x Supprimer" >
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-app-layout>
