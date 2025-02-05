<x-app-layout>
    @can('admin-access')
        @section('content')
            <style>
                .card-group {
                    position: relative;
                    overflow: hidden;
                }

                .card-group .card {
                    width: 100%;
                    border: none;
                }

                .card-img-top {
                    transition: all 0.3s ease-in-out;
                    width: 100%;
                    height: 200px;
                    object-fit: cover;
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

                /* Ensure proper spacing and alignment */
                .col-2 {
                    padding: 0.5rem;
                }

                /* Responsive card layout */
                @media (max-width: 1200px) {
                    .col-lg-2 {
                        width: 25%;
                    }
                }

                @media (max-width: 992px) {
                    .col-lg-2 {
                        width: 33.33%;
                    }
                }

                @media (max-width: 768px) {
                    .col-lg-2 {
                        width: 50%;
                    }
                }

                @media (max-width: 576px) {
                    .col-lg-2 {
                        width: 100%;
                    }
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-center">List of All Aquatic Equipment</h3>
                                    <div class="row">
                                        @foreach ($equipments as $equipment)
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                                                <div class="card-group">
                                                    <div class="card p-0">
                                                        <img src="{{ $equipment->image ? asset('list_of_equipment/' . $equipment->image) : asset('assets/img/offices/default.jpg') }}"
                                                            class="card-img-top" alt="Image of {{ $equipment->equipment }}"
                                                            style="object-fit:cover;">
                                                        <div class="text-center mt-1">
                                                            <h6 class="fw-semibold">{{ $equipment->name }}</h6>
                                                        </div>

                                                        <!-- Corrected Edit Modal Trigger -->
                                                        <button class="btn btn-primary mt-2" equipment-bs-toggle="modal"
                                                            equipment-bs-target="#editequipmentModal-{{ $equipment->id }}">Edit</button>
                                                        <button class="btn btn-success mt-2" equipment-bs-toggle="modal"
                                                            equipment-bs-target="#farmersModal-{{ $equipment->id }}">Read More</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal to Show More Information -->
                                            <div class="modal fade" id="farmersModal-{{ $equipment->id }}" tabindex="-1"
                                                aria-labelledby="farmersModalLabel-{{ $equipment->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="farmersModalLabel-{{ $equipment->id }}">
                                                                {{ $equipment->name }}</h5>
                                                            <button type="button" class="btn-close" equipment-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <img src="{{ $equipment->image ? asset('list_of_equipment/' . $equipment->image) : asset('assets/img/offices/default.jpg') }}"
                                                                        alt="Image of {{ $equipment->name }}">
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>Description</h5>
                                                                    <p class="mt-3">{{ $equipment->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                equipment-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editequipmentModal-{{ $equipment->id }}" tabindex="-1"
                                                aria-labelledby="editequipmentModalLabel-{{ $equipment->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editequipmentModalLabel-{{ $equipment->id }}">
                                                                Edit {{ $equipment->name }}</h5>
                                                            <button type="button" class="btn-close" equipment-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form method="POST" action="{{ route('admin.aquatic.update', $equipment->id) }}" enctype="multipart/form-equipment">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="name-{{ $equipment->id }}" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id="name-{{ $equipment->id }}" name="name"
                                                                        value="{{ $equipment->name }}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description-{{ $equipment->id }}" class="form-label">Description</label>
                                                                    <textarea class="form-control" id="description-{{ $equipment->id }}" name="description" rows="3"
                                                                        required>{{ $equipment->description }}</textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="image-{{ $equipment->id }}" class="form-label">Image</label>
                                                                    <input type="file" class="form-control" id="image-{{ $equipment->id }}" name="image">
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
