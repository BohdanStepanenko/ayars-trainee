<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.parts.header')

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Trainee') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @include('layouts.parts.menu')

                    <!-- Right Side Of Navbar -->
                    @include('layouts.parts.auth_links')
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('components.alerts')
            @yield('content')
        </main>
    </div>
</body>
</html>
