<nav x-data="{ open: false }" class="bg-neutral-800 border-b border-neutral-100">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-between h-16 -ml-8">

            <!-- Logo -->
            <div class="shrink-0 space-x-4 sm:-my-px sm:ms-10 sm:flex">

                <a href="{{ route('home') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-red-500"/>
                </a>

                <!-- Navigation Links (left) -->
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>

                <x-nav-link :href="route('pages.one-to-one')" :active="request()->routeIs('pages.one-to-one')">
                    {{ __('1-to-1') }}
                </x-nav-link>

                <x-nav-link :href="route('pages.one-to-many')" :active="request()->routeIs('pages.one-to-many')">
                    {{ __('1-to-Many') }}
                </x-nav-link>

                <x-nav-link :href="route('pages.many-to-many')" :active="request()->routeIs('pages.many-to-many')">
                    {{ __('Many-to-Many') }}
                </x-nav-link>


            </div>

            <!-- Login/Register Links (right)-->
            @if (Route::has('login'))
                <div class="space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @else
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>

                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav-link>
                    @endauth
                </div>
            @endif

        </div>

    </div>

</nav>
