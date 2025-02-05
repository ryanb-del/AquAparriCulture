<x-app-layout>
    @section('content')
        <style>
            .contact-card {
                padding: 20px;
                border: 1px solid #e5e7eb;
                border-radius: 10px;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
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

            iframe {
                border: none;
                border-radius: 10px;
                width: 100%;
                height: 400px;
                margin-bottom: 20px;
            }
        </style>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <!-- Google Map -->
                        <div>
                            <h1 class="text-center mb-4">Contact Us</h1>
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.621121034575!2d121.64311757488186!3d18.356143789251374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33116c78ac7b1449%3A0xe154f6a326b56bb3!2sAparri%2C%20Cagayan!5e0!3m2!1sen!2sph!4v1674482412345!5m2!1sen!2sph" 
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <!-- Contact Information -->
                        <div class="contact-card">
                            <h2>Contact Information</h2>
                            <p><strong>Phone Number:</strong> (078) 888-1234</p>
                            <p><strong>Email Address:</strong> contact@aparri.gov.ph</p>
                            <p><strong>Address:</strong> Municipality of Aparri, Cagayan, Philippines</p>
                            <p><strong>Social Media:</strong></p>
                            <ul>
                                <li><a href="https://facebook.com/aparri" target="_blank">Facebook</a></li>
                                <li><a href="https://twitter.com/aparri" target="_blank">Twitter</a></li>
                                <li><a href="https://instagram.com/aparri" target="_blank">Instagram</a></li>
                            </ul>
                        </div>

                        <!-- Inquiry Form -->
                        <div class="contact-card">
                            <h2>Do you have other questions? Just fill out the form below and we’ll get back to you as soon as possible.</h2>

                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="user_type" class="form-label">Please choose one *</label>
                                    <select class="form-control" name="user_type" id="user_type" required>
                                        <option value="" disabled selected>Select your type</option>
                                        <option value="farmer">Farmer</option>
                                        <option value="businessman">Businessman</option>
                                        <option value="student">Student</option>
                                        <option value="researcher">Researcher</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name" class="form-label">First Name *</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name" class="form-label">Last Name *</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address / Location *</label>
                                    <input type="text" class="form-control" name="address" id="address" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
</x-app-layout>
