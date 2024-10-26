@extends('layouts.Users.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($aquapments as $data)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ $data->image ? asset('list_of_equipment/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                            alt="Aquatic Equipment">
                        <div class="card-body">
                            <h5 class="card-title">Aquatic Equipment Corner</h5>
                            <p class="card-text">All about aquatic Equipments are Here.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
