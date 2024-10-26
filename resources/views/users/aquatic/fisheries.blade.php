@extends('layouts.Users.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($fish as $data)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ $data->image ? asset('list_of_fish/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                            alt="fish">
                        <div class="card-body">
                            <h5 class="card-title">FISH Corner</h5>
                            <p class="card-text">All about fish are here.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
