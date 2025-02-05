<x-app-layout>
    @can('admin-access')

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

                .form-group label {
                    font-weight: bold;
                }

                .form-group small {
                    color: #6c757d;
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">

                            <div class="row">
                                <div class="col">
                                    <h1 class="text-center mb-4">Add Agriculture Equipments</h1>

                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <form action="{{ route('admin.equipments.store') }}" method="POST"
                                                enctype="form-data">
                                                @csrf
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="image">Add Image</label>
                                                            <input type="file" class="form-control" name="image"
                                                                accept="image/*" id="image">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name of Equipment</label>
                                                            <input type="text" class="form-control" name="name" id="name">
                                                        </div>
                                                        <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea name="description" class="form-control" id="description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>       
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Add Equipment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

                        </div>
                    </div>
                </div>
            </div>

            <script>
                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ session('success') }}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                @endif
            </script>
        @endsection
    @endcan
</x-app-layout>
