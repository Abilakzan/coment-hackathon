<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 navigationLa">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center logoNav">
                    <a href="{{ route('actualites') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex navigationSite">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <img src="{{asset('/storage/ic_round-space-dashboard.svg')}}" alt="logo_dashboard">
                        <p>{{ __('Dashboard') }}</p>
                    </x-nav-link>
                    <x-nav-link :href="route('actualites')" :active="request()->routeIs('actualites')">
                        <img src="{{asset('/storage/fiber_new_black_24dp1.svg')}}" alt="logo_actualité">
                        <p>{{ __('Actualités') }}</p>
                    </x-nav-link>
                    <x-nav-link :href="route('formation')" :active="request()->routeIs('formation')">
                        <img src="{{asset('/storage/ci_notification.svg')}}" alt="logo_formation">
                        <p>{{ __('Formation') }}</p>
                    </x-nav-link>
                    <x-nav-link :href="route('live')" :active="request()->routeIs('live')">
                        <img src="{{asset('/storage/smart_display_black_24dp1.svg')}}" alt="logo_live">
                        <p>{{ __('Live') }}</p>
                    </x-nav-link>
                    <x-nav-link :href="route('campagne')" :active="request()->routeIs('campagne')">
                        <p>{{ __('Évaluer ma campagne') }}</p>
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex navigationIcon">
                <x-nav-link :href="route('calendrier')" :active="request()->routeIs('calendrier')">
                    <img src="{{asset('/storage/calender.svg')}}" alt="calendar">
                </x-nav-link>
                <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                <img src="{{asset('/storage/user.svg')}}" alt="account">
                </x-nav-link>
                <x-nav-link :href="route('search')" :active="request()->routeIs('search')">
                    <img src="{{asset('/storage/magnifier.svg')}}" alt="search">
                </x-nav-link>
            </div>
            -->
        </div>
    </div>
</nav>

<style>
    .navigationLa{
      width: 330px;
      height: 100vh;
      float: left;
    }
    .navigationSite{
      width: 144px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      align-content: flex-start;
      margin-left: 70px;
      margin-top: 44px;
    }
    .navigationSite a{
      color: black;
      text-decoration: none;
      display: flex;
      flex-direction: row;
      margin-top: 18px;
    }
    .navigationSite img{
      width: 25px;
      height: 25px;
      margin: 0;
      margin-right: 29px;
    }
    .navigationSite p{
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 600;
      font-size: 20px;
      line-height: 30px;
      display: flex;
      align-items: center;
      color: #015C53;
    }
</style>
