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
                    margin: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    border-radius: 10px;
                }

                .card-img-top {
                    transition: all 0.3s ease-in-out;
                    width: 100%;
                    border-radius: 10px 10px 0 0;
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

                .form-container {
                    padding: 20px;
                    background-color: #f8f9fa;
                    border-radius: 8px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }

                .form-group {
                    margin-bottom: 20px;
                }

                .form-group label {
                    font-weight: bold;
                    margin-bottom: 8px;
                    display: block;
                }

                .form-control {
                    border-radius: 8px;
                    border: 1px solid #ccc;
                    padding: 10px;
                    width: 100%;
                }

                .btn-submit {
                    padding: 10px 20px;
                    background-color: #28a745;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    cursor: pointer;
                }

                .btn-submit:hover {
                    background-color: #218838;
                }

                .small-text {
                    font-size: 12px;
                    color: #888;
                }

                .status-btn {
                    padding: 5px 15px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                .status-btn.pending {
                    background-color: #ffc107;
                    color: white;
                }

                .status-btn.approved {
                    background-color: #28a745;
                    color: white;
                }

                .text-center {
                    text-align: center;
                }
            </style>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">

                            <div class="row">
                                <div class="col">
                                    <h1 class="text-center mb-5">Add Vegetables</h1>
                                    <div class="card">
                                        <div class="card-body form-container">
                                            <form action="{{ route('admin.vegetables.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <!-- Add Image -->
                                                <div class="form-group">
                                                    <label for="image">Add Image</label>
                                                    <input type="file" class="form-control" name="image" accept="image/*" id="image">
                                                </div>

                                                <!-- Name of Vegetable -->
                                                <div class="form-group">
                                                    <label for="name">Name of Vegetable</label>
                                                    <input type="text" class="form-control" name="name" id="name" required>
                                                </div>

                                                <!-- Scientific Name -->
                                                <div class="form-group">
                                                    <label for="scientific_name">Scientific Name</label>
                                                    <input type="text" class="form-control" name="scientific_name" id="scientific_name" required>
                                                </div>

                                                <!-- Location (Multi-select) -->
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <select class="form-control" name="location[]" id="location" multiple>
                                                        <option value="aparri_west">Aparri West</option>
                                                        <option value="aparri_east">Aparri East</option>
                                                    </select>
                                                    <small class="small-text">Hold CTRL (or CMD on Mac) to select multiple locations.</small>
                                                </div>

                                                <!-- Best Time to Plant and Harvest -->
                                                <div class="form-group">
                                                    <label for="best_time_to_plant">Best Month to Plant</label>
                                                    <select class="form-control" name="best_Month_to_plant[]" id="best_time_to_plant" multiple>
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
                                                    <small class="small-text">Hold CTRL (or CMD on Mac) to select multiple months.</small>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="best_time_to_harvest">Best M to Harvest</label>
                                                    <select class="form-control" name="best_Month_to_harvest[]" id="best_time_to_harvest" multiple>
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
                                                    <small class="small-text">Hold CTRL (or CMD on Mac) to select multiple months.</small>
                                                </div>

                                                <!-- Season (Multi-select) -->
                                                <div class="form-group">
                                                    <label for="season">Season</label>
                                                    <select class="form-control" name="season[]" id="season" multiple>
                                                        <option value="rainy">Rainy Season</option>
                                                        <option value="dry">Dry Season</option>
                                                    </select>
                                                    <small class="small-text">Hold CTRL (or CMD on Mac) to select multiple seasons.</small>
                                                </div>

                                                <!-- Fertilizer (Multi-select) -->
                                                <div class="form-group">
                                                    <label for="fertilizer">Type of Fertilizer</label>
                                                    <select class="form-control" name="fertilizer[]" id="fertilizer" multiple>
                                                        <option value="organic">Organic Fertilizer</option>
                                                        <option value="chemical">Chemical Fertilizer</option>
                                                        <option value="compost">Compost</option>
                                                        <option value="none">None</option>
                                                    </select>
                                                    <small class="small-text">Hold CTRL (or CMD on Mac) to select multiple fertilizers.</small>
                                                </div>

                                                <!-- Description -->
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="description" class="form-control" id="description"></textarea>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="text-end">
                                                    <input type="submit" class="btn-submit mt-3" value="Add Vegetable">
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
