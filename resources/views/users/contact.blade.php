@extends('layouts.Users.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container-fluid" style="height: 70vh;">
        <div class="container-xl h-100">
            <div class="row px-5 h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-primary text-uppercase">Contact Us</h1>
                    <h2 class="fw-bolder">We are here <br> to Help</h2>

                    <div class="mt-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <i class="bi text-primary fs-3 bi-telephone-outbound"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <span class="text-muted">Phone</span>
                                <h6 class="fw-bolder">+63 123456789</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <i class="bi bi-envelope-at fs-3 text-primary"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <span class="text-muted">Email</span>
                                <h6 class="fw-bolder">MunicipalAgricultureOffice@email.com</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="bg-agri p-4 rounded shadow"> <!-- Adjusted padding for a smaller design -->
                        <h3 class="text-center text-primary">Get In Touch</h3>
                        <form>
                            <div class="row mt-3"> <!-- Adjusted margin-top -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control bg-white rounded-0 form-control-lg"
                                            id="name" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mobile" class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control bg-white rounded-0 form-control-lg"
                                            id="mobile" placeholder="Enter Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3"> <!-- Adjusted margin-top -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control bg-white rounded-0 form-control-lg"
                                            id="email" placeholder="Enter Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3"> <!-- Adjusted margin-top -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control bg-white rounded-0 form-control-lg" id="message" rows="4"
                                            placeholder="Type Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary py-2 px-4 mt-3">Send Message</button>
                            <!-- Adjusted padding for button -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
