<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formation') }}
        </h2> -->
    </x-slot>
    <div class="menu_track">
        <div class="check">
          <img src="{{asset('/storage/Grnotification.svg')}}" alt="logo_formation">
          <p>{{ __('Formation') }}</p>
        </div>
    </div>
    <div class="background_Header">
    </div>
    <div class="background">
    <div class="backgroundWhite">
            <div class="profil">
                <div class="profil_pic">
                    <img src="{{asset('/storage/charlottePP.png')}}" alt="photo de profil">
                </div>
                <div class="profil_text">
                    <h3 class="profilName">Charlotte.A</h3>
                    <p class="profilCatégorie">Formation pour une communication non sexiste</p>
                        <div class="swipeProgressBar">
                            <progress max="100" value={{$value}}></progress>
                            <p>{{$value}}%</p>
                        </div>
                    <button class="profilButton">
                        <a class="profilButtona">Continuer</a>
                    </button>
                </div>
            </div>
            <div class="fieldback">
                <div class="actus">
                    <div class="content_Link">
                        <div class="titre">Etape 1 : Workshop</div>
                    </div>
                    <div class="content_Actus">
                        <img src="{{asset('/storage/image_quiz1.png')}}" alt="picActu">
                    </div>
                </div>
                <div class="actus">
                    <div class="content_Link">
                        <div class="titre">Etape 2 : Quiz final</div>
                    </div>
                    <div class="content_Actus">
                        <a href="http://127.0.0.1:8000/gamesswipe">
                            <img src="{{asset('/storage/image_quiz2.png')}}" alt="picActu">
                        </a>
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
  .menu_track{
    position: absolute;
    width: 373px;
    height: 71px;
    left: 30px;
    top: 267px;
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
  .content_Link{
    display: flex;
    justify-content: space-between;
}
.titre{
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 23px;
    line-height: 34px;
    display: flex;
    align-items: center;
    color: #000000;
    margin-left: 40px;
  }
  .content_Actus{
      width: 390px;
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
    width: 405px;
    height: 325px;
    border-radius: 30px;
    margin: 0;
    margin-left: -13px;
  }

  .content_Actus p{
    width: 333px;
    height: 33px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 33px;
    display: flex;
    align-items: center;
    color: #000000;
    margin: 0;
    margin-top: -23px;
  }

  .content_Actus a button{
    width: 202px;
    height: 45px;
    background: #F9D915;
    border-radius: 10px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 27px;
    display: flex;
    color: #FFFFFF;
    text-align: center;
    margin-left: 150px;
    align-items: center;
    justify-content: center;
    align-content: center;
    border: transparent;
  }
.lien {
    width: 61px;
    height: 38px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    display: flex;
    align-items: center;
    color: #696F79;
}
  .fieldback {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    justify-items: center;
    margin-top: 32px;
  }
  .textCenter {
    width: 75%;
    text-align: center;
    padding-top: 95px;
    padding-bottom: 28PX;
    font-family: 'Poppins';
    font-weight: 400;
    font-size: 19px;
    line-height: 28px;
    color: #696F79;
  }
  .centerElement {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 95px;
  }
  .centerElement label {
    margin-bottom: 32px;
  }
  .swipeProgressBar {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin-bottom: 32px;
  }
  .swipeProgressBar progress{
        width: 660px;
        appearance: none;
        -webkit-appearance: none;
        border: none;
        height: 12px;
        position: relative;
        border-radius: 12px;
        overflow: hidden;
    }
.swipeProgressBar progress::-webkit-progress-bar{
    background-color:rgba(1, 92, 83, 0.1);
    }
.swipeProgressBar progress::-webkit-progress-value {
    /* background:linear-gradient(45deg,transparent 33%,hsla(0,0%,0%,.1) 33%, hsla(0,0%,0%,.1) 66%,transparent 66%); */
    background-color: #F9D915;
    background-size: 80px 40px
    }
.swipeProgressBar progress::-moz-progress-bar{
    /* background:linear-gradient(45deg,transparent 33%,hsla(0,0%,0%,.1) 33%, hsla(0,0%,0%,.1) 66%,transparent 66%); */
    background-color: #F9D915;
    background-size:80px 40px
    }
    .swipeProgressBar p{
        height: 44px;
        left: 671px;
        top: 320px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 29px;
        line-height: 44px;
        display: flex;
        align-items: center;
        color: #696F79;
        margin-bottom: -44px;
    }
.profilButton {
    width: 202px;
    height: 45px;
    background: #F9D915;
    border-radius: 10px;
    margin-left: auto;
    border: transparent;
    display: flex;
    margin-right: 205px;
}
.profilButtona {
    width: 97px;
    height: 27px;
    margin: auto;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 27px;
    display: flex;
    align-items: center;
    color: #0E4B42;
    align-content: center;
    justify-content: center;
    text-decoration: none;
}
.background .backgroundWhite .profil{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 70vw;
  }
  .background .backgroundWhite .profil .profil_pic{}
  .background .backgroundWhite .profil .profil_pic img{
    width: 225px;
    height: 195px;
    box-shadow: 0px 15px 40px 5px #ededed;
    border-radius: 30px;
    margin-left: 63px;
    margin-top: 34px;
  }
  .background .backgroundWhite .profil .profil_text{
    display: flex;
    flex-direction: column;
  }
  .background .backgroundWhite .profil .profil_text .profilName{
    width: 290px;
    height: 43px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 33px;
    line-height: 50px;
    display: flex;
    align-items: center;
    color: #015C53;
  }
  .background .backgroundWhite .profil .profil_text .profilCatégorie{
    width: 456px;
    height: 29px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 28px;
    display: flex;
    align-items: center;
    color: #696F79;
  }
  .background .backgroundWhite .profil .profil_text .barre_testLongueur{
    width: 660px;
    height: 12px;
    background: linear-gradient(0deg, rgba(1, 92, 83, 0.1), rgba(1, 92, 83, 0.1)), #F5F5F5;
    border-radius: 30px;
    margin: 11px;
  }
  .background .backgroundWhite .profil .profil_text .profilButton{
    width: 202px;
    height: 45px;
    background: #F9D915;
    border-radius: 10px;
    margin-left: auto;
    border: transparent;
    margin-right: 0px;
  }
  .background .backgroundWhite .profil .profil_text .profilButtona{
    width: 97px;
    height: 27px;
    margin: auto;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 27px;
    display: flex;
    align-items: center;
    color: #0E4B42;
    align-content: center;
    justify-content: center;
    text-decoration: none;
  }
</style>
