<x-app-layout>
    <x-slot name="header" class="header_Breadcrumbs">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="background">
        <div class="backgroundWhite">
            <div class="profil">
                <div class="profil_pic">
                    <img>
                </div>
                <div class="profil_text">
                    <h3 class="profilName">Charlotte.A</h3>
                    <p class="profilCatégorie">Formation pour une communication non sexiste</p>
                    <span class="barre_testLongueur"></span>
                    <!--
                        Mettre la barre de progression
                    -->
                    <button class="profilButton">
                        <a class="profilButtona">Continuer</a>
                    </button>
                </div>
            </div>
            <div class="fieldback">
                <div class="actus">
                    <div class="content_Link">
                        <div class="titre">Actualité</div>
                        <div class="lien">View All</div>
                    </div>
                    <div class="content_Actus">
                        <span>À la une</span>
                        <img src="{{asset('/storage/image_Actu.png')}}" alt="picActu">
                        <p>Une nouvelle loi pour l’égalité</p>
                        <a>
                            <button>Consulter</button>
                        </a>
                    </div>
                </div>
                <div class="live">
                    <div class="content_Link">
                        <div class="titre">Live</div>
                        <div class="lien">View All</div>
                    </div>
                    <div class="content_live">
                        <span>En direct</span>
                        <img src="{{asset('/storage/image_Live.png')}}" alt="picLive">
                        <p>Pour une communication non sexiste</p>
                        <a>
                            <button>Participer</button>
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
  .background{
    background-color: #015C53;
    width: 100vw;
    height: 100vh;
    padding-top: 130px;
  }
  .background .backgroundWhite{
    background-color: #FFFFFF;
    margin-left: 370px;
    width: 1026px;
    height: 654px;
    border-radius: 30px;
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
    background: #8E00FD;
    border-radius: 10px;
    margin-left: auto;
    border: transparent;
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
    color: #FFFFFF;
    align-content: center;
    justify-content: center;
    text-decoration: none;
  }
  .background .backgroundWhite .fieldback{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    justify-items: center;
  }
  .background .backgroundWhite .fieldback .actus{
    display: flex;
    flex-direction: column;
    width: 355px;
  }
  .background .backgroundWhite .fieldback .actus .content_Link{
    display: flex;
    justify-content: space-between;
}
  .background .backgroundWhite .fieldback .actus .content_Link .titre{
    width: 118px;
    height: 38px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 25px;
    line-height: 38px;
    display: flex;
    align-items: center;
    color: #015C53;
  }
  .background .backgroundWhite .fieldback .actus .content_Link .lien{
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
  .background .backgroundWhite .fieldback .actus .content_Actus{
      width: 370px;
  }
  .background .backgroundWhite .fieldback .actus .content_Actus span{
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
    background: #8E00FD;
    border-radius: 0px 5px 5px 0px;
    padding: 9px 33px;
    border: transparent;
  }
  .background .backgroundWhite .fieldback .actus .content_Actus img{
    width: 383px;
    height: 313px;
    border-radius: 30px;
    margin: 0;
    margin-left: -13px;
  }
  .background .backgroundWhite .fieldback .actus .content_Actus p{
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
  .background .backgroundWhite .fieldback .actus .content_Actus a{}
  .background .backgroundWhite .fieldback .actus .content_Actus a button{
    width: 202px;
    height: 45px;
    background: #8E00FD;
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
    .background .backgroundWhite .fieldback .actus{
    display: flex;
    flex-direction: column;
    width: 355px;
  }
  .background .backgroundWhite .fieldback .live .content_Link{
    display: flex;
    justify-content: space-between;
}
  .background .backgroundWhite .fieldback .live .content_Link .titre{
    width: 118px;
    height: 38px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 25px;
    line-height: 38px;
    display: flex;
    align-items: center;
    color: #015C53;
  }
  .background .backgroundWhite .fieldback .live .content_Link .lien{
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
  .background .backgroundWhite .fieldback .live .content_live{
      width: 370px;
  }
  .background .backgroundWhite .fieldback .live .content_live span{
    position: absolute;
    width: 140px;
    height: 45px;
    left: 957px;
    top: 427px;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 27px;
    display: flex;
    align-items: center;
    color: #FFFFFF;
    background: #8E00FD;
    border-radius: 0px 5px 5px 0px;
    padding: 9px 33px;
    border: transparent;
  }
  .background .backgroundWhite .fieldback .live .content_live img{
    width: 383px;
    height: 313px;
    border-radius: 30px;
    margin: 0;
    margin-left: -13px;
  }
  .background .backgroundWhite .fieldback .live .content_live p{
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
  .background .backgroundWhite .fieldback .live .content_live a{}
  .background .backgroundWhite .fieldback .live .content_live a button{
    width: 202px;
    height: 45px;
    background: #8E00FD;
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
</style>
