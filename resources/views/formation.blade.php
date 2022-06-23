<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formation') }}
        </h2> -->
    </x-slot>

   <div class="background">
    <div class="backgroundWhite">
            <label class="textCenter">Formation pour une communication non sexiste</label>
            <div class="swipeProgressBar">
                <progress max="100" value=60></progress>
            </div>
            <button class="profilButton">
                <a class="profilButtona">Continuer</a>
            </button>
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
                        <img src="{{asset('/storage/image_quiz2.png')}}" alt="picActu">
                    </div>
                </div>
            </div>
    </div>
   </div>
</x-app-layout>
<style>
  .background{
    background-color: #015C53;
    width: 100vw;
    height: 115vh;
    padding-top: 130px;
  }
  .background .backgroundWhite{
    background-color: #FFFFFF;
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
    background: #8E00FD;
    border-radius: 0px 5px 5px 0px;
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
    align-items: center;
    justify-content: center;
    margin-bottom: 32px;
  }
  .swipeProgressBar progress{
        width: 60%;
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
    background-color: #8E00FD;
    background-size: 80px 40px
    }
.swipeProgressBar progress::-moz-progress-bar{
    /* background:linear-gradient(45deg,transparent 33%,hsla(0,0%,0%,.1) 33%, hsla(0,0%,0%,.1) 66%,transparent 66%); */
    background-color: #8E00FD;
    background-size:80px 40px
    }

.profilButton {
    width: 202px;
    height: 45px;
    background: #8E00FD;
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
    color: #FFFFFF;
    align-content: center;
    justify-content: center;
    text-decoration: none;
}
</style>
