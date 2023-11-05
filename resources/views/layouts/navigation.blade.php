<nav class="navbar fixed-top">
    <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
        
        <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="{{route('home')}}">
            <img src="images/log.svg" alt="alternative" class="h-8" />
        </a>

        <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
            <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                <li>
                    <a class="nav-link page-scroll active" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link page-scroll" href="{{route('talks.index')}}">Talks</a>
                </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="{{route('profile.edit')}}">Profile</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <a class="dropdown-item page-scroll" href="{{route('logout')}}"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>
                    @else
                    <li>
                        <a class="nav-link page-scroll" href="{{route('login')}}">Login</a>
                    </li>
                    @if(Route::has('register'))
                    <li>
                        <a class="nav-link page-scroll" href="{{route('register')}}">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
            </ul>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->