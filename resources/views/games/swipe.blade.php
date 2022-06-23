<x-app-layout>
    <x-slot name="header">
        <p>Quiz final</p>
    </x-slot>
    <div class="swipeCardPrincipal">
    <p class="swipeTitle">10 questions d’auto-évaluation pour une communication non sexiste</p>
    <div class="swipeProgressBar">

        <progress max="100" value={{$calculProgress*100}}></progress>
        <div style="margin-left: 32px; font-size: 18px; font-weight: 700;">{{$idquestion}}/{{$idallquestion}}</div>
    </div>
    <div class="swipeCard">
        <div class="swipeCardSecondary">
            {{$question->question}}
        </div>
        <div class="swipeBtnContainer">
            <a class="swipeBtnText" href="{{route('postResult', ['reponse' => 'oui', 'question' => $question])}}">Oui</a>
            <a class="swipeBtnText" href="{{route('postResult', ['reponse' => 'non', 'question' => $question])}}">Non</a>
        </div>
    </div>
</div>
</x-app-layout>

<style>
    .swipeCardPrincipal{
        height: 90vh;
        box-shadow: 0px 15px 40px 5px #ededed;
        border-radius: 30px;
        background: #FFFFFF;
        display: flex;
        flex-direction: column;
    }
    .swipeCardSecondary {
        width: 55vh;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid #EEEEF0;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 30px;
        backdrop-filter: blur(6px);
        /* text */
        font-size: 18px;
        line-height: 27px;
        font-style: normal;
        text-align: center;
        padding: 0px 8px;
    }
    .swipeBtn {
        display: flex;
        width: 50%;
        align-items: center;
        justify-content: space-evenly;
    }
    .swipeBtnContainer {
        width: 50%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .swipeBtnText:hover {
        color: #696F79;
        border: 1px solid #696F79;
        background-color: white;
    }

    .swipeBtnText
    {
        text-decoration: none;
        color: white;
        height: 8vh;
        width: 8vh;
        background-color:#8692A6;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 24px;
        border-radius: 50%;
    }
    .swipeTitle {
        width: 43%;
        margin-top: 32px;
        margin-left: 42px;
        font-size: 18px;
        line-height: 22px;
        font-weight: 700;
        font-family: sans-serif;
        margin-bottom: 30px;
    }
    .swipeCard {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .swipeProgressBar {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 60px;
    }
    .swipeProgressBar progress{
        width: 70%;
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
    background-color: #10293F;
    background-size: 80px 40px
    }
.swipeProgressBar progress::-moz-progress-bar{
    /* background:linear-gradient(45deg,transparent 33%,hsla(0,0%,0%,.1) 33%, hsla(0,0%,0%,.1) 66%,transparent 66%); */
    background-color: #10293F;
    background-size:80px 40px
    }
</style>
