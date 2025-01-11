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
                <div class="row">
                    @foreach ($aquapments as $data)
                        <div class="col-lg-4">
                            <div class="card" style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                                <div style="width: 100%; position: relative; padding-top: 100%; overflow: hidden;">
                                    <img class="card-img-top"
                                        src="{{ $data->image ? asset('list_of_equipment/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                                        alt="Aquatic Equipment"
                                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="card-body" style="padding: 15px; text-align: center;">
                                    <h5 class="card-title">Aquatic Equipment Corner</h5>
                                    <button class="btn btn-success mt-2"
                                    data-bs-toggle="modal" data-bs-target="#aquapmentModal-{{ $data->id }}">Read More</button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="aquapmentModal-{{ $data->id }}" tabindex="-1" aria-labelledby="aquapmentModalLabel-{{ $data->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="aquapmentModalLabel-{{ $data->id }}">Aquatic Equipment Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <img src="{{ $data->image ? asset('list_of_equipment/' . $data->image) : asset('assets/img/offices/default.jpg') }}" 
                                                     alt="Image of {{ $data->name }}" 
                                                     class="img-fluid mb-3" 
                                                     style="max-height: 300px;">
                                            </div>
                                            <div class="col-12">
                                                <h5>Description</h5>
                                                <p class="mt-3">{{ $data->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection


