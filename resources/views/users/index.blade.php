@extends('layouts.Users.app')

@section('title', 'Welcome to AgriGuide')

@section('content')
    <div class="jumbotron jumbotron-fluid text-white" style="background-color: #28a745; /* Bootstrap primary color */">
        <div class="container text-center">
            <h1 class="display-4">Welcome to AgriGuide</h1>
            <p class="lead">Providing you the information you need</p>

            <div class="mt-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light btn-lg">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg ml-2">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>


@endsection


{{--  <main class="container">
        <div class="row">
            @foreach ($vegetable as $vegetables)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ $vegetables->images ? asset('list_of_vegetables/' . $vegetables->images) : asset('assets/img/offices/default.jpg') }}"
                            alt="Vegetables">
                        <div class="card-body">
                            <h5 class="card-title">Vegetables Corner</h5>
                            <p class="card-text">All about Vegetables are here.</p>
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach ($fruit as $fruits)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}"
                            alt="Fruits">
                        <div class="card-body">
                            <h5 class="card-title">Fruits Corner</h5>
                            <p class="card-text">All about Fruits are here.</p>
                        </div>
                    </div>
                </div>
            @endforeach

            @foreach ($farmer as $farmers)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ $farmers->image ? asset('list_of_equipment/' . $farmers->image) : asset('assets/img/offices/default.jpg') }}"
                            alt="Farmers Equipment">
                        <div class="card-body">
                            <h5 class="card-title">Farmers Equipment Corner</h5>
                            <p class="card-text">All about farmers Equipments are Here.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>  --}}
