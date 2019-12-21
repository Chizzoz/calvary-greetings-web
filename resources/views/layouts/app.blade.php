<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if ($calendar_head)
        <!-- Calendar Stuff -->
        <link href='fullcalendar/core/main.css' rel='stylesheet' />
        <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
        <link href='fullcalendar/list/main.css' rel='stylesheet' />
        <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>

        <script src='fullcalendar/core/main.js'></script>
        <script src='fullcalendar/daygrid/main.js'></script>
        <script src='fullcalendar/list/main.js'></script>
        <script src='fullcalendar/interaction/main.js'></script>
        <script src='fullcalendar/bootstrap/main.js'></script>
        <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid', 'list', 'bootstrap', 'interaction' ],
                defaultView: 'dayGridMonth',
                timeZone: 'Africa/Lusaka',
                themeSystem: 'bootstrap',
                header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listMonth'
                },
                weekNumbers: true,
                events: [
                    <?php $count = count($devotions); ?>
                    @foreach($devotions as $devotion)
                    {
                    id: '{{ $devotion->id }}',
                    title: '{{ $devotion->title }}',
                    start: '{{ $devotion->devotion_date }}',
                    url: '#'
                    }
                    @if($count > 1)
                        ,
                    @endif
                    <?php $count -= 1 ?>
                    @endforeach
                ]
            });

            calendar.render();
        });

        </script>
    @endif
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
