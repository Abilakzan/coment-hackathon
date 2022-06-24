<x-app-layout>
    <x-slot name="header" class="header_Breadcrumbs">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualités') }}
        </h2>
    </x-slot>
    <div class="menu_track">
        <div class="check">
          <img src="{{asset('/storage/new_gr.svg')}}" alt="logo_news">
          <p>{{ __('Actualités') }}</p>
        </div>
    </div>
    <div class="background_Header">
        <div class="image_Pic">
            <img src="{{asset('/storage/charlottePP.png')}}" alt="photo de profil">
            <p>Charlotte.A</P>
        </div>
    </div>
    <div class="background">
        <div class="backgroundWhite">
        </div>
    </div>
</x-app-layout>
<style>
  header{
    display: none;
  }
  .menu_track{
    position: absolute;
    width: 373px;
    height: 71px;
    left: 30px;
    top: 197px;
    background: #FCFBF0;
    border-radius: 30px 0px 0px 30px;
  }
  .menu_track .check{}
  .menu_track .check img{
    position: absolute;
    left: 3.7%;
    right: 94.58%;
    top: 15.48%;
    bottom: 81.98%;
    width: 25px;
    height: 25px;
    margin-left: 31px;
    margin-top: 14px;
  }
  .menu_track .check p{
    position: absolute;
    left: 82.82px;
    top: 16.58px;
    width: 134.61px;
    height: 39.84px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 30px;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    color: #015C53;
  }
  .background_Header{
    width: 100vw;
    background: rgb(255, 254, 248);
    height: 110px;
  }
  .background_Header .image_Pic{
    position: absolute;
    width: 184px;
    height: 54px;
    left: 1196px;
    top: 33px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    align-content: center;
  }
  .background_Header .image_Pic img{
    width: 54px;
    height: 54px;
    border-radius: 27px;
    margin: 0;
  }
  .background_Header .image_Pic p{
    width: 115px;
    height: 29px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 800;
    font-size: 19px;
    line-height: 28px;
    display: flex;
    align-items: center;
    color: #0E4B42;
    margin-bottom: 0;
  }
  .background{
    background-color: #015C53;
    width: 100vw;
    height: 87vh;
    padding-top: 20px;
  }
  .background .backgroundWhite{
    background: #FCFBF0;
    margin-left: 370px;
    width: 1026px;
    height: 654px;
    border-radius: 30px;
  }
</style>
