<div class="fixed w-full top-0 shadow">
    <nav class="flex items-center justify-between flex-wrap bg-gradient-to-r from-teal-400 to-blue-500 p-4" >
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <span class="font-semibold text-3xl tracking-tight"><a class="navbar-brand" href="{{ url('/') }}">
                <b> {{ config('app.name', 'Laravel') }}</b>
            </a></span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm flex lg:flex-grow justify-center">
                @auth
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/home"> Home</a>
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/explore"> Explore</a>
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/coocoos"> Profile</a>
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="/coocoos/create"> Write new</a>
                @endauth
            </div>
                    <!-- Authentication Links -->
            <div>
                @guest
                    <a class="inline-block mr-2 text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    @if (Route::has('register'))
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    @endif
                @else
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}</a>
                    <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</div>
