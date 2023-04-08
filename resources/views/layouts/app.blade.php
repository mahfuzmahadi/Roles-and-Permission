<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions ') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
/* Sidebar */
#sidebar {
  min-width: 250px;
  max-width: 250px;
  min-height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #343a40;
  color: #fff;
  transition: all 0.3s;
  z-index: 999;
  padding-top: 50px;
}

#sidebar .sidebar-header {
  padding: 20px;
  text-align: center;
}

#sidebar ul.components {
  padding: 20px 0;
  border-bottom: 1px solid #47748b;
}

#sidebar ul li a {
  padding: 10px;
  display: block;
  color: #fff;
  text-decoration: none;
}

#sidebar ul li a:hover {
  background-color: #454d55;
}

#sidebar ul li.active > a,
a[aria-expanded="true"] {
  background-color: #343a40;
}

#sidebar .CTAs {
  padding: 20px;
}

#sidebar .btn-outline-light {
  color: #fff;
  border-color: #fff;
}

#sidebar .btn-outline-light:hover {
  color: #343a40;
  background-color: #fff;
  border-color: #fff;
}

/* Page Content */
#content {
  margin-left: 250px;
  padding: 20px;
}

.navbar-dark .navbar-toggler-icon {
  background-color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link:hover {
  color: #fff;
}

.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .show > .nav-link {
  color: #fff;
  background-color: #343a40;
}

.navbar-dark .navbar-nav .dropdown-menu {
  background-color: #343a40;
  border-color: #343a40;
}

.navbar-dark .navbar-nav .dropdown-menu .dropdown-item {
  color: #fff;
}

.navbar-dark .navbar-nav .dropdown-menu .dropdown-item:hover,
.navbar-dark .navbar-nav .dropdown-menu .dropdown-item:focus {
  color: #343a40;
  background-color: #fff;
}

@media (max-width: 768px) {
  #sidebar {
    margin-left: -250px;
    transition: all 0.3s;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #sidebarCollapse span {
    display: none;
  }
}


</style>

<body>
    <div id="app">
        <div class="wrapper">
            <!-- Sidebar -->
            <nav id="sidebar" class="bg-dark">
                <div class="sidebar-header">
                    <h3 class="text-white">Laravel 10 User Roles and Permissions</h3>
                </div>
    
                <ul class="list-unstyled components">
                    <li><a href="{{ route('users.index') }}" class="text-white">Manage Users</a></li>
                    <li><a href="{{ route('roles.index') }}" class="text-white">Manage Role</a></li>
                    <li><a href="{{ route('products.index') }}" class="text-white">Manage Product</a></li>
                </ul>
    
                <ul class="list-unstyled CTAs">
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-light">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
    
            <!-- Page Content -->
            <div id="content">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <i class="fas fa-align-left"></i>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
    
                <main class="py-4">
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    
</body>
</html>