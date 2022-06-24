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
        <img style=" width: 95%;
            height: 42%;
            margin-top: 12px;"
        src="{{asset('/storage/image_actualite1.svg')}}" alt="logo_news">
        <div class="placementSecondary">
            <label class="titleSecondary">Une nouvelle loi pour l'égalité</label>
            <label class="textSecondary">Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem tamque multiplici fertilitate abundat</label>
        </div>
        <a style="
            width: 97px;
            height: 27px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 27px;
            position: absolute;
            color: #0E4B42;
            text-decoration: none;
            right: 16.5%;
            flex-direction: row;
            margin-top: 24px;
            ">
            <button style="width: 202px;
            height: 45px;
            background: #F9D915;
            border-radius: 10px;
            margin-left: auto;
            border: transparent;
            margin-right: 0px;">Participer</button>
        </a>
        <div class="fieldback">
                <div class="actus">
                    <div class="content_Actus">
                        <img src="{{asset('/storage/image_actualite2.svg')}}" alt="picActu">
                        <label class="titleSecondary">Sexisme, pas notre genre !</label>
                    </div>
                </div>
                <div class="actus">
                    <div class="content_Actus">
                            <img src="{{asset('/storage/image_actualite3.svg')}}" alt="picActu">
                            <label class="titleSecondary">STOP à la violence sexiste au travail</label>
                    </div>
                </div>
                <div class="actus">
                    <div class="content_Actus">
                            <img src="{{asset('/storage/image_actualite4.svg')}}" alt="picActu">
                            <label class="titleSecondary">Les médias sont ils sexistes ?</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<style>
  header{
    display: none;
  }
  .placementSecondary {
    margin-left: 35px;
    margin-right: 90px;
  }
  .fieldback {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    justify-items: center;
    margin-top: 70px;
  }
  .content_Actus{
      width: 330px;
  }
  .actus {
    text-align: center;
  }
  .content_Actus span{
    position: absolute;
    width: 140px;
    height: 45px;
    left: 453px;
    top: 427px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 27px;
    display: flex;
    align-items: center;
    color: #FFFFFF;
    background: #F9D915;
    border-radius: 10px;
    padding: 9px 33px;
    border: transparent;
  }
  .content_Actus img{
    width: 315px;
    height: 215px;
    border-radius: 30px;
    margin: 0;
    margin-left: -13px;
  }
  .titleSecondary {
    font-family: 'Poppins';
    font-weight: 700;
    font-size: 22px;
    line-height: 33px;
    color: #000000;
    margin-bottom: 8px;
    margin-top: -20px;
  }
  .textSecondary {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 20px;
    color: #000000;
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
    height: 100vh;
    padding-top: 20px;
  }
  .background .backgroundWhite{
    background: #FCFBF0;
    margin-left: 370px;
    width: 1026px;
    height: 740px;
    border-radius: 30px;
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
</style>
