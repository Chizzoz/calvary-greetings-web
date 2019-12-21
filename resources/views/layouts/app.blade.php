<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- title -->
    <title>{{ config('app.name') }} | Makeni Assembly of God | PAOG</title>

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href="{{ asset('css/OverlayScrollbars.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    @if (isset($calendar_head))
        <!-- Calendar Stuff -->
        <link href='fullcalendar/core/main.css' rel='stylesheet' />
        <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
        <link href='fullcalendar/list/main.css' rel='stylesheet' />
        <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
        <style>
            

            .fc-day-grid-event .fc-content {
                /* un-force events to be one-line tall */
                white-space: normal;
            }
        </style>

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
                    url: '{{ route("devotion_view", $devotion->title_slug) }}'
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
    <!-- START NAV -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                        <img src="{{ asset('img/maog_logo.png') }}" alt="MAOG Logo">
                    </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                <span></span>
                <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('about') }}" class="navbar-item is-active">
                            About
                        </a>
                    @else
                        <a href="{{ route('about') }}" class="navbar-item is-active">
                            About
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                {{ Auth::user()->name }}
                                </a>
                            <div class="navbar-dropdown">
                                <a href="/admin" class="navbar-item">
                                        Dashboard
                                    </a>
                                <a href="/admin/profile" class="navbar-item">
                                        Profile
                                    </a>
                                <a href="/admin/settings" class="navbar-item">
                                        Settings
                                    </a>
                                <hr class="navbar-divider">
                                <div class="navbar-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    <section class="hero is-info is-medium is-bold">
        <div class="hero-body">
            <div class="container title-container has-text-centered">
                <h1 class="title">Calvary Greetings Daily Devotion<br>Delivered By Bishop C. Chikumbi<br>of Makeni Assembly of God Church (MAOG)<br>a Pentecostal Assemblies of God (PAOG) Church</h1>
            </div>
        </div>
    </section>


    <div class="container">
        <!-- START ARTICLE FEED -->
        <section class="articles">
            <div class="column is-8 is-offset-2">
                <!-- START ARTICLE -->
                <div class="card article">
                    <div class="card-content">
                        @yield('content')
                    </div>
                </div>
                <!-- END ARTICLE -->
              </div>

        </section>
        <!-- END ARTICLE FEED -->
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong><a href="/" title="Calvary Greetings Daily Devotion">Calvary Greetings Daily Devotion</a></strong> by <i>Bishop C. Chikumbi</i> of <a href="https://facebook.com/makenipaogz/" title="Makeni Assembly of God Church" target="_blank">Makeni Assembly of God Church</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script async type="text/javascript" src="../js/burger.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js'></script>  
    <script>
    document.addEventListener("DOMContentLoaded", function() {
    //The first argument are the elements to which the plugin shall be initialized
    //The second argument has to be at least a empty object or a object with your desired options
    OverlayScrollbars(document.querySelectorAll("body"), { });
    });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>