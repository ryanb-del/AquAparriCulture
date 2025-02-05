<x-app-layout>
    @can('admin-access')

        @section('content')
            <style>
                .card {
                    border: 1px solid #e5e7eb;
                    border-radius: 8px;
                    padding: 20px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }

                .form-group label {
                    font-weight: bold;
                }

                .form-control {
                    border-radius: 5px;
                    border: 1px solid #ced4da;
                    transition: border-color 0.3s, box-shadow 0.3s;
                }

                .form-control:focus {
                    border-color: #007bff;
                    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
                }

                .btn-primary {
                    background-color: #007bff;
                    border-color: #007bff;
                    transition: background-color 0.3s, box-shadow 0.3s;
                }

                .btn-primary:hover {
                    background-color: #0056b3;
                    box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
                }

                h1 {
                    margin-bottom: 20px;
                    font-size: 1.75rem;
                    font-weight: bold;
                    color: #333;
                }

                small.form-text {
                    color: #6c757d;
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">

                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <h1 class="text-center">Add Fruits</h1>

                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('admin.fruits.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                <!-- Add Image -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="image">Add Image</label>
                                                            <input type="file" class="form-control" name="image" accept="image/*" id="image">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Name and Location -->
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Name of Fruit</label>
                                                            <input type="text" class="form-control" name="name" id="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">Location</label>
                                                            <select class="form-control" name="location" id="location">
                                                                <option value="aparri_west">Aparri West</option>
                                                                <option value="aparri_east">Aparri East</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Description -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Best Time to Plant -->
                                                <div class="row mb-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="best_time_to_plant">Best Time to Plant</label>
                                                            <select class="form-control" name="best_time_to_plant[]" id="best_time_to_plant" multiple>
                                                                <option value="january">January</option>
                                                                <option value="february">February</option>
                                                                <option value="march">March</option>
                                                                <option value="april">April</option>
                                                                <option value="may">May</option>
                                                                <option value="june">June</option>
                                                                <option value="july">July</option>
                                                                <option value="august">August</option>
                                                                <option value="september">September</option>
                                                                <option value="october">October</option>
                                                                <option value="november">November</option>
                                                                <option value="december">December</option>
                                                            </select>
                                                            <small class="form-text">Hold CTRL (or CMD on Mac) to select multiple months.</small>
                                                        </div>
                                                    </div>

                                                    <!-- Best Time to Harvest -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="best_time_to_harvest">Best Time to Harvest</label>
                                                            <select class="form-control" name="best_time_to_harvest[]" id="best_time_to_harvest" multiple>
                                                                <option value="january">January</option>
                                                                <option value="february">February</option>
                                                                <option value="march">March</option>
                                                                <option value="april">April</option>
                                                                <option value="may">May</option>
                                                                <option value="june">June</option>
                                                                <option value="july">July</option>
                                                                <option value="august">August</option>
                                                                <option value="september">September</option>
                                                                <option value="october">October</option>
                                                                <option value="november">November</option>
                                                                <option value="december">December</option>
                                                            </select>
                                                            <small class="form-text">Hold CTRL (or CMD on Mac) to select multiple months.</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-primary">Add Fruit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
