<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">AgricultureGuide</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item {{ request()->is('guest/fruits') ? 'active' : '' }}">
                <a href="{{ url('guest/fruits') }}" class="nav-link">Fruits</a>
            </li>
            <li class="nav-item {{ request()->is('guest/vegetables') ? 'active' : '' }}">
                <a href="{{ url('guest/vegetables') }}" class="nav-link">Vegetables</a>
            </li>
            <li class="nav-item {{ request()->is('guest/equipments') ? 'active' : '' }}">
                <a href="{{ url('guest/equipments') }}" class="nav-link">Equipments</a>
            </li>
            <li class="nav-item {{ request()->is('guest/aquapments') ? 'active' : '' }}">
                <a href="{{ url('guest/aquapments') }}" class="nav-link">Aqua-Equipments</a>
            </li>
            <li class="nav-item {{ request()->is('guest/fisheries') ? 'active' : '' }}">
                <a href="{{ url('guest/fisheries') }}" class="nav-link">Fish</a>
            </li>
            <li class="nav-item {{ request()->is('guest/about') ? 'active' : '' }}">
                <a href="{{ url('guest/about') }}" class="nav-link">About</a>
            </li>
            <li class="nav-item {{ request()->is('guest/contact') ? 'active' : '' }}">
                <a href="{{ url('guest/contact') }}" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
</nav>
