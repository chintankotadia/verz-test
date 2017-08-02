<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <section id="container">
        <!-- header begins -->
        <header class="header fixed-top clearfix">
            <!-- logo begins -->
            <div class="brand">
                <a href="{{ url('/') }}" class="logo">Recruiter Application</a>
            </div>
            <!--logo ends -->
        </header>
        <!-- header ends -->
        <!-- sidebar begins -->
        <!-- sidebar ends -->
        <aside>
            <div id="sidebar" class="sidebar nav-collapse">
                <div class="navigation">
                    <ul class="sidebar-menu">
                        <li class=""> <a href="{{ route('interview.index') }}">Interviews </a> </li>
                        <li class=""> <a href="{{ route('candidate.index') }}">Candidates </a> </li>
                    </ul>
                </div>
            </div>
        </aside>
        <section id="main-content" class="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
        </section>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>