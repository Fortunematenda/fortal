
<nav class="navbar sticky-top navbar-expand-lg bark-header  body-min-width header-shadow background-color-white py-0 bg-white border-b border-gray-100" x-data="{ open: false }" id="bark-header">
            <a class="navbar-brand py-3" href="/dashboard/">
            <img class="img-fluid loaded" src="{{asset('build/assets/img/fortailogo.png')}}" width="80" height="24" title="Fortai Logo" alt="Fortai Logo" data-was-processed="true">
        </a>
    
       <!-- Primary Navigation Menu -->

    
        <div class="collapsed ml-auto d-flex d-lg-none notifications-dropdown">
            <a class="notifications-dropdown-toggle" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="ld-notifications-cont">
                    <span class="seller-notification notification-bell mobile-notifications-trigger" style="">
                        <img src="{{asset('build/assets/img/bell-default.png!d=2M4f26')}}" alt="" width="24" height="24">
                        <span class="red-circle"></span>
                    </span>
                </div>
            </a>
          
        </div>

        
       
    <div class="collapse navbar-collapse dixylo" id="navbarSupportedContent">
    @auth
 
   <ul class="navbar-nav ml-auto d-flex align-items-center">
    <li class="dashboard-home nav-item px-2 py-3 py-sm-4" id="js-joyride-dashboard-home">
        <a class="text-grey-400 nav-link py-0" href="/dashboard/">Dashboard</a>
    </li>
    <li class="requests nav-item px-2 py-3 py-sm-4 active" id="js-joyride-requests">
        <a class="text-grey-400 nav-link py-0" href="/seller/dashboard/">Leads</a>
    </li>
    <li class="my-responses nav-item px-2 py-3 py-sm-4" id="js-joyride-my-responses">
        <a class="text-grey-400 nav-link py-0" href="/responses"">My Responses</a>
    </li>
    <li class="nav-item dropdown notifications-dropdown py-2 d-none d-lg-block">
        <a class="notifications-dropdown-toggle" href="/seller/dashboard" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="ld-notifications-cont">
                <span class="seller-notification notification-bell mobile-notifications-trigger" style="display:none;">
                    <img src="{{asset('build/assets/img/bell-default.png!d=2M4f26')}}" alt="" width="24" height="24" class="loading" data-was-processed="true">
                    <span class="red-circle"></span>
                </span>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right notification-dropdown-box" aria-labelledby="notifications-dropdown-toggle">
            <ul id="seller-notifications" class="dropdown notification-list js-notification-list"></ul>
        </div>
    </li>
</li>
<li class="nav-item dropdown user-account-dropdown seller p-lg-2">
    <a class="d-lg-flex flex-row" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
            <div class="d-inline-flex text-white justify-content-center align-items-center">
                                                                    <div class="elite-pro d-inline-flex justify-content-center align-items-center">
                                        <span class="w-0"></span>
                                    <img class="img-fluid default-avatar default-avatar-36 elite-pro-border elite-pro-border-sm ml-3 mr-1 loading" alt="Rachfort Solutions" width="32" height="32" title="Rachfort Solutions" src="./Bark.com - Leads_files/667b472a2a569.png!d=Wm3hl" srcset="https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/bmMOaP/logo/667b472a2a569.png!d=Wm3hl 1x, https://d1k8hez1mxkuxw.cloudfront.net/s/avatar_v2/bmMOaP/logo/667b472a2a569.png!d=N0quzn 2x" data-was-processed="true">
                                        
                                        <div class="d-none default-avatar default-avatar-36 bg-heliotrope text-white ml-3 mr-1 justify-content-center align-items-center elite-pro-border elite-pro-border-sm">
                                            R
                                        </div>
                                        <p class="d-inline-flex text-dark-blue mb-0 ml-1 js-buyer-username">
                                            Fortune Matenda
                                        </p>
                                    </div>
                    
                </a>

                                        

</x-slot>
<x-slot name="content" class="dOiuFl " style="background-color: gray;">
    <x-dropdown-link :href="route('profile.edit')">
        {{ __('My Account') }}
    </x-dropdown-link>

<x-dropdown-link :href="route('customer.dashboard')">
        {{ __('Switch to Customer') }}
    </x-dropdown-link>

    <x-dropdown-link :href="route('customer.dashboard')">
        {{ __('Help') }}
    </x-dropdown-link>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</x-slot>
                    </x-dropdown>
                                            </a>
                                            </span>
                                                    
                                            
                </li>
            
        </ul>
        @endauth

        @guest
        <ul class="navbar-nav ml-auto d-flex align-items-center">
                            <li class="dashboard-home nav-item px-2 py-3 py-sm-4 " id="js-joyride-dashboard-home">
                    <a class="text-grey-400 nav-link py-0" href="/login">Login</a>
                </li>
                            <li class="requests nav-item px-2 py-3 py-sm-4 active" id="js-joyride-requests">
                    <a class="text-grey-400 nav-link py-0" href="/profession/create/">Join As Professional</a>
                </li>
        @endguest
            </div>

          
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
               
            </div>
            @endauth

@guest
<div class="px-4">
<div class="font-medium text-base text-gray-800">Login</div>
<div class="font-medium text-sm text-gray-500">Join As Professional</div>
</div>
@endguest
        </div>
    </div>
 <!-- Hamburger -->
<!-- Hamburger: Hidden on md (medium screens and larger) -->
<div class="-me-2 flex items-center md:hidden">
    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>

<!-- Mobile Menu: Displayed when open -->
<div x-show="open" class="absolute top-0 left-0 w-full bg-white border-b border-gray-100 z-10 md:hidden" @click.away="open = false">
    <div class="pt-2 pb-3 px-2">
        <div class="flex justify-between items-center">
            <button @click="open = false" class="close-modal" aria-label="Close menu">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="mt-2 flex justify-center">
            <ul class="navbar-nav flex-col items-center w-full">
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/seller/dashboard/">Leads</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/responses">My Responses</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/settings">Settings</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="/help">Help</a>
                </li>
                @auth
                    <li class="nav-item mb-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</div>

  
</nav>

