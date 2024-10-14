

<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        .jumbotron {
          background-image: url('/images/bg1.jpg.jpg');
            background-size: cover;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
        .navbar {
            background-color: #3cb371;
        }
        .navbar-brand {
            color: #fff;
        }
        .nav-link {
            color: #fff;
        }
        .card {
            margin-bottom: 20px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-title {
            font-weight: bold;
        }
        .footer {
            background-color: #3cb371;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
  
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">AgricultureGuide</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <li class="nav-item active">
                    @if (Route::has('login'))
          
          @auth
          <li class="nav-item">
              <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
          </li>
          @else

          <li class="nav-item">

              <a href="{{ route('login') }}" class="nav-link">Log in</a>
          </li>
          <li class="nav-item">
      
              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
              @endif
          </li>
          @endauth
      @endif


                </ul>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Welcome to AgriGuide</h1>
                <p class="lead">Providing you the information you need</p>
            </div>
        </div>
    </header>

    
    <main class="container">
        <div class="row">
        @foreach ($vegetable as $vegetables)

            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $vegetables->images ? asset('list_of_vegetables/' . $vegetables->images) : asset('assets/img/offices/default.jpg') }}" alt="Vegetables">
             
                    <div class="card-body">
                        <h5 class="card-title">Vegetables Corner</h5>
                        <p class="card-text">All about Vegetables are here.</p>
                    </div>
                </div>
            </div>
            @endforeach 

            @foreach ($fruit as $fruits)
            <div class="col-lg-4">
                <div class="card">
            
                    <img class="card-img-top" src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}" alt="Fruits">
                  
                   
                    <div class="card-body">
                        <h5 class="card-title">Fruits Corner</h5>
                        <p class="card-text">All about Fruits are here.</p>
                    </div>
                </div>
            </div>
            @endforeach 

            @foreach ($farmer as $farmers)
            <div class="col-lg-4">
                <div class="card">
              
                    <img class="card-img-top" src="{{ $farmers->image ? asset('list_of_equipment/' . $farmers->image) : asset('assets/img/offices/default.jpg') }}" alt="Fruits">
                  
                    <div class="card-body">
                        <h5 class="card-title">Farmers Equipment Corner</h5>
                        <p class="card-text">All about farmers Equipments are Here.</p>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </main>
    <footer class="footer">
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style> 
        .jumbotron {
            background-image: url('farm.jpg');
            background-size: cover;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
        .navbar {
            background-color: #3cb371;
        }
        .navbar-brand {
            color: #fff;
        }
        .nav-link {
            color: #fff;
        }
        .card {
            margin-bottom: 20px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-title {
            font-weight: bold;
        }
        .footer {
            background-color: #3cb371;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Learn more About Agriculture</p>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Our Vision</h2>
                <p>To be the leading online platform for agricultural guidance, empowering farmers and enthusiasts with knowledge and resources to cultivate sustainable and prosperous agricultural practices.</p>
            </div>
            <div class="col-lg-6">
                <h2>Our Mission</h2>
                <p>Our mission is to provide comprehensive and reliable agricultural guidance through our website, 
                    offering a wealth of information, resources, and tools to support farmers and individuals interested in agriculture. 
                    We aim to foster a community of knowledge sharing, connecting experts, and enthusiasts to facilitate the exchange of ideas and best practices.
                     By promoting sustainable and innovative farming techniques, 
                    we strive to contribute to the growth and development of the agricultural industry, 
                    ensuring food security and environmental stewardship for future generations.</p>
            </div>
        </div>
    </main>
    <footer class="footer">
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
  </head>
  <body>


      <!--### Contact Starts Here ####-->

      <div class="container-fluid big-padding pt-3">
        <div class="container-xl">
          <div class="row px-5">
            <div class="col-lg-6">
              <h1 class="text-primary text-uppercase">Contact Us</h1>
              <h2 class="fw-bolder">We are here <br> to Help</h2>
              <p></p>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 align-self-centr pt-3">
                  <i class="bi text-primary fs-3 bi-telephone-outbound"></i>
                </div>
                <div class="flex-grow-1 pt-4 ms-3">
                  <span>Phone</span>
                  <h6 class="fw-bolder">+63 123456789</h6>
                </div>
              </div>

              <div class="d-flex align-items-center">
                <div class="flex-shrink-0 align-self-centr pt-3">
                  <i class="bi bi-envelope-at fs-3 text-primary"></i>
                </div>
                <div class="flex-grow-1 pt-4 ms-3">
                  <span>Email</span>
                  <h6 class="fw-bolder">MunicipalAgricultureOffice@email.com </h6>
                </div>
              </div>


            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="bg-agri p-5">
            
                <div class="row mt-4">
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                      <input type="email" class="form-control bg-white rounded-0 form-control-lg" id="exampleFormControlInput1" placeholder="Enter Name">
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                      <input type="email" class="form-control bg-white rounded-0 form-control-lg" id="exampleFormControlInput1" placeholder="Enter Mobile Number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Enter Message</label>
                      <textarea placeholder="Enter Message" name="" id="" cols="30" rows="5" class="form-control bg-white rounded-0"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <button class="btn btn-primary w-100 btn-lg">Send Message</button>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!--### Iframe Starts Here ####-->

      <div class="container-fluid big-padding pt-3">
        <div class="container-xl">
          <div class="row px-5">
              <div class="col-md-12">
                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"  height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>
        </div>
      </div>

      <!--###  Reaching US ####-->

      <div class="about-content container-fluid">
          <div class="container-xl px-0 px-md-5">
            <div class="row mb-5">
              <div class="col-md-7 text-center mx-auto">
                <h1 class="fw-bolder">Thanks for Reaching Out</h1>
        
              </div>
            </div>
         
      