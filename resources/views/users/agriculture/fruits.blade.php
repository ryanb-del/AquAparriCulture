@extends('layouts.Users.app')

@section('content')
<!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<style>
    
                /* Transparent card styles */
                .card-group .card {
                    background-color: rgba(255, 255, 255, 0.7); /* Transparent background */
                    border: 1px solid rgba(0, 0, 0, 0.1); /* Light border for visibility */
                    box-shadow: none;
                }

                .card-group .card:hover {
                    background-color: rgba(255, 255, 255, 0.9); /* Slightly more opaque on hover */
                }

                /* Card image transitions */
                .card-img-top {
                    transition: all 0.3s ease-in-out;
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
                }

                /* Read more button */
                .read-more {
                    position: absolute;
                    bottom: 10px;
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: rgba(0, 0, 0, 0.5);
                    color: #fff;
                    padding: 5px 10px;
                    border-radius: 5px;
                    text-decoration: none;
                    opacity: 0;
                    transition: opacity 0.3s ease-in-out;
                }

                .card-group:hover .read-more {
                    opacity: 1;
                }

                /* Modal image styling */
                .modal-content img {
                    width: 80%;
                    height: auto;
                }

</style>

<section id="features" class="hero">
    <div class="container-fluid">
        <div class="container">
            <div class="row p-4">
                @foreach ($fruit as $fruits)
                    <div class="col-lg-3 p-4">
                        <div class="card">
                            <div style="position: relative; padding-top: 100%; overflow: hidden;">
                                <img class="card-img-top"
                                    src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}"
                                    alt="Fruits">
                            </div>
                            <div class="card-body" style="padding: 15px; text-align: center;">
                                <h5 class="card-title">{{ $fruits->name }}</h5>
                                <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#fruitsModal-{{ $fruits->id }}">Read More</button>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="fruitsModal-{{ $fruits->id }}" tabindex="-1" aria-labelledby="fruitsModalLabel-{{ $fruits->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="fruitsModalLabel-{{ $fruits->id }}">{{ $fruits->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}" alt="Image of {{ $fruits->name }}" class="img-fluid mb-3">
                                        </div>
                                        <div class="col-12">
                                            <h5>Description</h5>
                                            <p class="mt-3">{{ $fruits->description }}</p>
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
