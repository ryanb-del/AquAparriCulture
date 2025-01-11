@extends('layouts.Users.app')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .card-img-top {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .modal-dialog {
        max-width: 80%;
        margin: 30px auto;
    }
    .modal-body {
        max-height: 60vh;
        overflow-y: auto;
    }
    .modal-body img {
        width: 100%;
        height: auto;
    }
    .modal-header {
        background-color: #f8f9fa;
    }
    .modal-title {
        font-weight: bold;
    }
    .btn-close {
        background: none;
        border: none;
    }
    .btn-close:hover {
        opacity: 0.7;
    }
</style>

<section id="features" class="hero">
    <div class="container-fluid">
        <div class="container">
            <div class="row p-4">
                @foreach ($fish as $fishItem)
                    <div class="col-lg-3 p-4">
                        <div class="card">
                            <div style="position: relative; padding-top: 100%; overflow: hidden;">
                                <img class="card-img-top"
                                    src="{{ $fishItem->image ? asset('list_of_fish/' . $fishItem->image) : asset('assets/img/offices/default.jpg') }}"
                                    alt="Fish">
                            </div>
                            <div class="card-body" style="padding: 15px; text-align: center;">
                                <h5 class="card-title">{{ $fishItem->name }}</h5>
                                <button class="btn btn-success mt-2"
                                    data-bs-toggle="modal" data-bs-target="#fishModal-{{ $fishItem->id }}">Read More</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="fishModal-{{ $fishItem->id }}" tabindex="-1"
                        aria-labelledby="fishModalLabel-{{ $fishItem->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="fishModalLabel-{{ $fishItem->id }}">{{ $fishItem->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="{{ $fishItem->image ? asset('list_of_fish/' . $fishItem->image) : asset('assets/img/offices/default.jpg') }}"
                                                alt="Image of {{ $fishItem->name }}" class="img-fluid mb-3">
                                        </div>
                                        <div class="col-12">
                                            <h5>Description</h5>
                                            <p class="mt-3">{{ $fishItem->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            </div>
        </div>
    </div>
</section>

@endsection
