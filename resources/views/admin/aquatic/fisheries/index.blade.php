<x-app-layout>
    @can('admin-access')
        @section('content')
            <style>
                .card-group {
                    position: relative;
                    overflow: hidden;
                }

                .card-group .card {
                    width: 100%; /* Ensure card takes full width in smaller devices */
                }

                .card-img-top {
                    transition: all 0.3s ease-in-out;
                    width: 100%; /* Ensure the image is responsive */
                    height: auto;
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
                    width: 100%; /* Ensure the image inside modal is responsive */
                    height: auto;
                }

                @media (max-width: 768px) {
                    .card-group .card {
                        width: 100%; /* Stack cards on smaller screens */
                    }
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">

                            <div class="row">

                                <div class="col">
                                    <h3 class="text-center">List of All Fish</h3>
                                    <div class="row">
                                        @foreach ($fish as $data)
                                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                                <div class="card-group">
                                                    <div class="card p-0">
                                                        <img src="{{ $data->image ? asset('list_of_fish/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                                                            class="card-img-top" alt="Image of {{ $data->name }}"
                                                            style="object-fit:cover;">
                                                        <div class="text-center mt-1">
                                                            <h6 class="fw-semibold">{{ $data->name }}</h6>
                                                        </div>
                                                        <button class="btn btn-primary mt-2" data-bs-toggle="modal"
                                                        data-bs-target="#editdataModal-{{ $data->id }}">Edit</button>
                                                        <button class="btn btn-success mt-2"
                                                            data-bs-toggle="modal" data-bs-target="#dataModal-{{ $data->id }}">Read More</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="dataModal-{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="dataModalLabel-{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="vegetablesModalLabel-{{ $data->id }}">
                                                                {{ $data->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12 col-md-6"> <img
                                                                        src="{{ $data->image ? asset('list_of_fish/' . $data->image) : asset('assets/img/offices/default.jpg') }}"
                                                                        alt="Image of {{ $data->name }}">
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <h5>Description</h5>
                                                                    <p class="mt-3">{{ $data->description }}</p>
                                                                </div>
                                                                <div class="col-12 col-md-6">
                                                                    <h5>Type of Fish</h5>
                                                                    <p class="mt-3">{{ $data->type }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                             <!-- Edit Modal -->
                                             <div class="modal fade" id="editdataModal-{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="editdataModalLabel-{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editdataModalLabel-{{ $data->id }}">
                                                                Edit {{ $data->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="{{ route('admin.fisheries.update', $data->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT') <!-- This tells Laravel to treat this as a PUT request -->
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="name-{{ $data->id }}" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id="name-{{ $data->id }}" name="name"
                                                                        value="{{ $data->name }}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description-{{ $data->id }}" class="form-label">Description</label>
                                                                    <textarea class="form-control" id="description-{{ $data->id }}" name="description" rows="3"
                                                                        required>{{ $data->description }}</textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="image-{{ $data->id }}" class="form-label">Image</label>
                                                                    <input type="file" class="form-control" id="image-{{ $data->id }}" name="image">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
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
</x-app-layout>
