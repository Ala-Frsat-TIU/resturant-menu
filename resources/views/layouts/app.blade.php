<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> -->
        <div class="container">
            <!doctype html>
            <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">


                <!-- Fonts -->
                <link rel="dns-prefetch" href="//fonts.gstatic.com">
                <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

                <!-- Scripts -->
                @vite(['resources/sass/app.scss', 'resources/js/app.js'])
            </head>

            <body>
                <div id="app">
                    <div class="container ">

                        @if(Auth::user())
                        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav navcolor">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/home">Home </a>
                                    </li>
                                    @if(Auth::user()->type="admin")
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/list-of-users">Users </a>
                                    </li>

                                    @endif
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            Add:
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="justify-content:left; align-items:left">

                                            @if(Auth::user()->type=="admin")
                                            <a class="dropdown-item" href="{{ route('add-resturant') }}">
                                                Resturant
                                            </a>
                                            @endif

                                            <a class="dropdown-item" href="add-category">
                                                Category
                                            </a>
                                            <a class="dropdown-item" href="add-item">
                                                Item
                                            </a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="justify-content:left; align-items:left">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        @endif
                    </div>
                    </nav>

                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </body>

            </html>
        </div>
        </nav>

    </div>
</body>

</html>