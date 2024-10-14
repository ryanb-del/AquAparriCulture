@can('admin-access')
@extends('layouts.Admin.app')

@section('content')

<style>
    .card-group {
        position: relative;
        overflow: hidden;
    }

    .card-group .card {
        width: 500px;
    }

    .card-img-top {
        transition: all 0.3s ease-in-out;
        width: 500px;
    }

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

    .modal-content img {
        width: 80%;
        height: auto;
    }

</style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">


                        <div class="row">
                            <div class="col-sm-4">
                            <h1 class="text-center">Add Vegetables</h1>

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.vegetable.store')}}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                        <label for="">Add Image</label>
                                        <input type="file" class="form-control" name="images" accept="image/*" id="">

                                        <label for="">Name of Vegetable</label>
                                        <input type="text" class="form-control" name="vegies" id="">

                                        <label for="">Description</label>
                                        <textarea name="descrip" class="form-control" id=""></textarea>

                                        <input type="submit" class="btn btn-primary mt-3" value="Add Vegetable">

                                    </form>
                                </div>
                            </div>


                            </div>

                            <div class="col-sm-7">
                            <h3 class="text-center">List of All Vegetable</h3>
                        <div class="row">
                            @foreach ($vegetable as $vegetables)
                            <div class="col-2 mb-3 " style="width: 200px;">
                                <div class="card-group">
                                    <div class="card p-0">
                                        <img src="{{ $vegetables->images ? asset('list_of_vegetables/' . $vegetables->images) : asset('assets/img/offices/default.jpg') }}"
                                            class="card-img-top" alt="Image of {{ $vegetables->vegies }}"
                                            style="object-fit:cover;">
                                        <div class="text-center mt-1">
                                            <h6 class="fw-semibold">{{ $vegetables->vegies }}</h6>
                                        </div>
                                         <button href="" class="btn btn-primary mt-2" data-bs-toggle="modal">Edit</a>
                                        <button href="#" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#vegetablesModal-{{ $vegetables->id }}">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="vegetablesModal-{{ $vegetables->id }}" tabindex="-1"
                                aria-labelledby="vegetablesModalLabel-{{ $vegetables->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="vegetablesModalLabel-{{ $vegetables->id }}">
                                                {{ $vegetables->vegetables }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6"> <img
                                                        src="{{ $vegetables->image ? asset('list_of_vegetables/' . $vegetables->image) : asset('assets/img/offices/default.jpg') }}"
                                                        alt="Image of {{ $vegetables->vegetables }}">
                                                    </div>
                                                <div class="col-6">
                                                    <h5>Description</h5>
                                                    <p class="mt-3">{{ $vegetables->description }}</p>
                                                </div>
                                                <!-- Add more farmer details here if needed -->
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                            </div>
                        </div>
                           
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>  
                        
                        </div>
                    </div>
                </div>
            </div>
        @endsection
@endcan