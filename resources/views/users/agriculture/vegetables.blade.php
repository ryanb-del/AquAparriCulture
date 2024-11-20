@extends('layouts.Users.app')

@section('content')
    <section id="features" class="hero">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @foreach ($vegetable as $vegetables)
                        <div class="col-lg-4">
                            <div class="card">
                                <img class="card-img-top"
                                    src="{{ $vegetables->image ? asset('list_of_vegetables/' . $vegetables->image) : asset('assets/img/offices/default.jpg') }}"
                                    alt="Vegetables">
                                <div class="card-body">
                                    <h5 class="card-title">Vegetables Corner</h5>
                                    <p class="card-text">All about Vegetables are here.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
