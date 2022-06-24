<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Live') }}
        </h2>
    </x-slot>
    <div class="menu_track">
        <div class="check">
          <img src="{{asset('/storage/display_gr.svg')}}" alt="logo_live">
          <p>{{ __('Live') }}</p>
        </div>
    </div>
    <div class="background_Header">
    </div>
    <div class="background">
        <div class="backgroundWhite">
            <div id="twitch-embed"></div>
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
    top: 328px;
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
    justify-content: flex-start;
    color: #015C53;
    margin-left: 13px;
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
  #twitch-embed{
    width: 90%;
    margin: auto;
  }
  iframe{
    margin-top: 30px;
  }
</style>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "100%",
        height: 600,
        channel: "kamet0",
        theme: "dark",
      });
    </script>
