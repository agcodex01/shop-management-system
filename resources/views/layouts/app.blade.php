<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <b>{{ config('app.name', 'Laravel') }}</b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="p-4 mt-5">
            <div class="row">
                @auth
                    <div class="col-md-3 ">
                        <div class="card p-0 m-0">
                            <div class="card-header bg-transparent"><i class="fa fa-bars"></i> Menu</div>
                            <div class="card-body px-0">

                                <ul class="list-group list-group-flush">
                                    <a href="{{ route('dashboard') }}"
                                        class="list-group-item list-group-item-action
                                        @if(Route::currentRouteName() == 'dashboard')  list-group-item-action active @endif h5 px-4">
                                        <i class="fa fa-desktop mr-2"></i> Dashboard
                                    </a>
                                    <a href="{{ route('products.index') }}"
                                        class="list-group-item list-group-item-action
                                        @if(Route::currentRouteName() == 'products.index')  list-group-item-action active @endif h5 px-4">
                                        <i class="fa fa-shopping-bag mr-2"></i> Products
                                    </a>
                                    <a href="{{ route('orders.index') }}"
                                        class="list-group-item list-group-item-action
                                        @if(Route::currentRouteName() == 'orders.index')  list-group-item-action active @endif h5 px-4">
                                        <i class="fa fa-list-alt mr-2"></i> Orders
                                    </a>
                                    <a href="{{ route('customers.index') }}"
                                        class="list-group-item list-group-item-action
                                        @if(Route::currentRouteName() == 'customers.index')  list-group-item-action active @endif h5 px-4">
                                        <i class="fa  fa-user-circle-o mr-2"></i> Customers
                                    </a>
                                    <a href="{{ route('suppliers.index') }}"
                                        class="list-group-item list-group-item-action
                                        @if(Route::currentRouteName() == 'suppliers.index')  list-group-item-action active @endif h5 px-4">
                                        <i class="fa  fa-user-circle-o mr-2"></i> Suppliers
                                    </a>
                                    <a href="{{ route('deliveries.index')}}"
                                        class="list-group-item list-group-item-action @if(Route::currentRouteName() == 'deliveries.index')  list-group-item-action active @endif h5 px-4">
                                        <i class="fa  fa-truck mr-2"></i> Deliveries
                                    </a>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                    @else
                        <div class="col-md-12">
                        @endauth
                        @yield('content')
                    </div>
                </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    @yield('script')
</body>

</html>
