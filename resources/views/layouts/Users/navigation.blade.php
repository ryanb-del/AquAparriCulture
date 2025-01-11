<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">aquAPARRIculture</h1>
            
        </a>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
  /* Dropdown menu hidden by default */
.dropdown-menu {
    display: none;
    position: absolute;
    background-color: transparent; /* Make the background transparent */
    min-width: 160px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Show dropdown when hovering */
.dropdown:hover .dropdown-menu {
    display: block;
}

/* Style for individual dropdown links */
.dropdown-menu li {
    padding: 8px 16px;
}

.dropdown-menu li a {
    text-decoration: none;
    color: #333; /* Set text color */
    background-color: transparent; /* Ensure links also have no background */
}

.dropdown-menu li a:hover {
    background-color: #ddd; /* Optional: background color when hovering over links */
}

    </style>
</head>
<body>
    <!-- nav ng agri -->
<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home<br></a></li>

        <!-- Agriculture Dropdown -->
        <li class="dropdown">
            <a href="#" class="{{ request()->is('guest/grains') || request()->is('guest/vegetables') || request()->is('guest/fruits') || request()->is('guest/equipments') ? 'active' : '' }}">Agriculture</a>
            <ul class="dropdown-menu">
               
                <li><a href="{{ url('guest/vegetables') }}" class="{{ request()->is('guest/vegetables') ? 'active' : '' }}">Vegetables</a></li>
                <li><a href="{{ url('guest/fruits') }}" class="{{ request()->is('guest/fruits') ? 'active' : '' }}">Fruits</a></li>
                <li><a href="{{ url('guest/equipments') }}" class="{{ request()->is('guest/equipments') ? 'active' : '' }}">Equipments</a></li>
            </ul>
        </li> 
        <!-- Aquaculture Dropdown -->
        <li class="dropdown">
            <a href="#" class="{{ request()->is('guest/fisheries') || request()->is('guest/aquipments') || request()->is('guest/boats') ? 'active' : '' }}">Aquaculture</a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('guest/fisheries') }}" class="{{ request()->is('guest/fisheries') ? 'active' : '' }}">Fish</a></li>
                <li><a href="{{ url('guest/aqua-equipments') }}" class="{{ request()->is('guest/aqua-equipments') ? 'active' : '' }}">Aqua-Equipments</a></li>
        
            </ul>
        </li>

        <!-- About -->
        <li><a href="{{ url('guest/about') }}" class="{{ request()->is('guest/about') ? 'active' : '' }}">About</a></li>

        <!-- Contact -->
        <li><a href="{{ url('guest/contact') }}" class="{{ request()->is('guest/contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>



    </div>
</header>

</body>
</html>

  