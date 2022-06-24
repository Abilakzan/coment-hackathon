<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Votre profil
        </h2>
    </x-slot>
    <div class="premierrang">

        @if($profil->photo)
        <img src="{{url('storage/profil/'.$info->photo)}}" class="photo" alt="" />
        @else
        <img src="https://links.papareact.com/gll" class="photo" alt="" />
        @endif
        <div class="alignInfo">
            <p class="textPrincipal">{{$profil->name}}</p>
            <p class="textPrincipal">{{$profil->email}}</p>
        </div>

    </div>
    <form method="POST" enctype="multipart/form-data" action="{{route('updateProfil', $profil)}}" class="mt-5 flex justify-between">
                <!-- Add CSRF Token -->
                @csrf
    <div class="form-group">
        <input type="file" name="file" required>
    </div>
    <button type="submit">Envoyer</button>
    </form>
    {{$profil->description}}
    {{$profil->avancement}}
</x-app-layout>

<style>
    .premierrang {
        display: flex;
        align-items: center ;
        justify-content: flex-start;
    }
    .alignInfo {
        margin-top: 16px;
    }
    .textPrincipal {
        font-size: 1.5rem;
        line-height: 2rem;
        margin-left: 24px;
    }
    .photo {
        width: 142px;
        height: 142px;
        margin-left: 28px;
        margin-top: 28px;
        border-radius: 50%;
    }
</style>
