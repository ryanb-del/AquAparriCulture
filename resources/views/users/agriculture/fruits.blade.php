@extends('layouts.Users.app')

@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .expanded-card {
        display: none;
        padding: 20px;
        margin-top: 10px;
        border: 1px solid #ddd;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
        background-color: #f8f9fa;
    }

    .read-more-btn, .close-btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 16px;
        font-size: 16px;
        font-weight: bold;
        background-color: #198754;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .read-more-btn:hover, .close-btn:hover {
        background-color: #146c43;
    }

    .close-btn {
        background-color: #dc3545;
    }

    .expanded-container {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .expanded-image {
        flex: 1;
        max-width: 40%;
    }

    .expanded-text {
        flex: 2;
    }

    .expanded-image img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .fruit-details {
        margin-top: 20px;
        font-size: 16px;
    }

    .fruit-details p {
        margin: 5px 0;
    }

    .filter-section {
        margin-bottom: 15px;
    }

    .filter-section label {
        font-weight: bold;
    }

    .filter-section select {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ddd;
        width: 100%;
        background-color: #f8f9fa;
    }

    .list-group {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* New CSS to center the categories and darken the background */
    .categories-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to right, #01579b, #0288d1); /* Darker Background */
        padding: 20px 0;
    }

    .list-group {
        margin: 0;
        max-width: 300px;
        width: 100%;
    }

    .fruit-item {
        display: block; /* Initially show all items */
    }
</style>

<script>
    function toggleReadMore(id) {
        var element = document.getElementById(id);
        if (element.style.display === "none" || element.style.display === "") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }

    // Filter the fruit items based on the selected category
    function filterItems() {
        const location = document.getElementById("location").value;
        const monthPlant = document.getElementById("month-plant").value;
        const monthHarvest = document.getElementById("month-harvest").value;
        const season = document.getElementById("season").value;
        const fertilizer = document.getElementById("fertilizer").value;

        const fruitItems = document.querySelectorAll(".fruit-item");

        fruitItems.forEach(item => {
            const plantMonth = item.getAttribute("data-plant-month");
            const harvestMonth = item.getAttribute("data-harvest-month");
            const locationMatch = !location || item.getAttribute("data-location") === location;
            const plantMonthMatch = !monthPlant || plantMonth === monthPlant;
            const harvestMonthMatch = !monthHarvest || harvestMonth === monthHarvest;
            const seasonMatch = !season || item.getAttribute("data-season") === season;
            const fertilizerMatch = !fertilizer || item.getAttribute("data-fertilizer") === fertilizer;

            // Show item if all selected filters match
            if (locationMatch && plantMonthMatch && harvestMonthMatch && seasonMatch && fertilizerMatch) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    }
</script>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 categories-wrapper">
            <div class="list-group">
                <h4 class="p-3 text-center text-light">Categories</h4>
                <div class="filter-section">
                    <label for="location">Location:</label>
                    <select id="location" onchange="filterItems()">
                        <option value="">Select</option>
                        <option value="Aparri West">Aparri West</option>
                        <option value="Aparri East">Aparri East</option>
                    </select>
                </div>
                <div class="filter-section">
                    <label for="month-plant">Best Month to Plant:</label>
                    <select id="month-plant" onchange="filterItems()">
                        <option value="">Select</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>
                <div class="filter-section">
                    <label for="month-harvest">Best Month to Harvest:</label>
                    <select id="month-harvest" onchange="filterItems()">
                        <option value="">Select</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                </div>
                <div class="filter-section">
                    <label for="season">Season:</label>
                    <select id="season" onchange="filterItems()">
                        <option value="">Select</option>
                        <option value="Rainy Season">Rainy Season</option>
                        <option value="Dry Season">Dry Season</option>
                    </select>
                </div>
                <div class="filter-section">
                    <label for="fertilizer">Fertilizer Type:</label>
                    <select id="fertilizer" onchange="filterItems()">
                        <option value="">Select</option>
                        <option value="Organic Fertilizer">Organic Fertilizer</option>
                        <option value="Chemical Fertilizer">Chemical Fertilizer</option>
                        <option value="Compost">Compost</option>
                        <option value="None">None</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-md-9">
            <section id="features" class="hero">
                <div class="container">
                    <div class="row p-4" id="fruit-list">
                        @if ($fruit && count($fruit) > 0)
                            @foreach ($fruit as $fruits)
                                <div class="col-lg-4 p-4 fruit-item" 
                                    data-location="{{ $fruits->location }}"
                                    data-plant-month="{{ $fruits->best_month_to_plant }}"
                                    data-harvest-month="{{ $fruits->best_month_to_harvest }}"
                                    data-season="{{ $fruits->season }}"
                                    data-fertilizer="{{ $fruits->fertilizer_type }}">
                                    <div class="card">
                                        <div style="position: relative; padding-top: 60%; overflow: hidden;">
                                            <img class="card-img-top" src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}" alt="Fruits">
                                        </div>
                                        <button class="read-more-btn" onclick="toggleReadMore('details-{{ $fruits->id }}')">Read More</button>
                                        <div id="details-{{ $fruits->id }}" class="expanded-card">
                                            <p>{{ $fruits->description }}</p>
                                            <button class="close-btn" onclick="toggleReadMore('details-{{ $fruits->id }}')">Close</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No fruits found.</p>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
