<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NxtGen">
    <meta property="og:locale" content="en-US">
    <meta property="og:type" content="website">
    <meta name="description" content="Buy snacks and drinks swiftly with Snax on the go!">
    <meta name="og:description" content="Buy snacks and drinks swiftly with Snax on the go!">
    <title>Snax Vendor Dashboard Demo</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/orders.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/icon/Rectangle 10.svg') }}" alt=""></a>
                <div class="navbar-links ml-auto">
                    <a class="nav-link" href="#"><img class="profile-pic" width="40" src="{{ asset('assets/img/Ellipse 9.png') }}" alt=""></a>
                    <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <button class="logout-button">Logout</button>
                      </a>
                  
                </div>
        </div>
      </nav>

    <!-- Sub Nav -->
    <div class="container" id="subnav">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('vendor/home')) ? 'active' : '' }}" id="subnav-link" href="{{ url('/vendor/home') }}">Overview</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('vendor/orders')) ? 'active' : '' }}" id="subnav-link" href="{{ url('/vendor/orders') }}">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('vendor/products')) ? 'active' : '' }}" id="subnav-link" href="{{ url('/vendor/products') }}">Food Items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('vendor/business-profile')) ? 'active' : '' }}" id="subnav-link" href="{{ url('/vendor/business-profile') }}">Profile</a>
            </li>
          </ul>
    </div>

    @yield('content')
    

    
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>