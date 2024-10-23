@extends('layouts.Users.app')

@section('content')
    <div class="container">
        <div class="row">
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
        </div>
    </div>
@endsection
