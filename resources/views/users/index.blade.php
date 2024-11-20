@extends('layouts.Users.app')

@section('title', 'Welcome to AgriGuide')

@section('content')
    {{-- <div class="jumbotron jumbotron-fluid text-white" style="background-color: #28a745; /* Bootstrap primary color */">
        <div class="container text-center">
            <h1 class="display-4">Welcome to AgriGuide</h1>
            <p class="lead">Providing you the information you need</p>

            <div class="mt-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-light btn-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-light btn-lg">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg ml-2">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div> --}}
    {{-- <img src="assets/img/services.jpg" alt="" data-aos="fade-in"> --}}
    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('assets/img/bg1.jpg') }}" alt="" data-aos="fade-in">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h1 data-aos="fade-up">Focus On What Matters</h1>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis cum recusandae eum
                            laboriosam voluptatem repudiandae odio, vel exercitationem officiis provident minima.
                        </p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn-get-started">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn-get-started me-2">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn-get-started">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

        <div class="container">

            <div class="row g-0">

                <div class="col-xl-5 img-bg" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/bg3.jpg" alt="">
                </div>

                <div class="col-xl-7 slides position-relative" data-aos="fade-up" data-aos-delay="200">

                    <div class="swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "centeredSlides": true,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Let's grow your business together</h3>
                                    <h4 class="mb-3">Optio reiciendis accusantium iusto architecto at quia minima
                                        maiores quidem, dolorum.</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, ipsam
                                        perferendis asperiores explicabo vel tempore velit totam, natus nesciunt
                                        accusantium dicta quod quibusdam ipsum maiores nobis non, eum. Ullam
                                        reiciendis dignissimos laborum aut, magni voluptatem velit doloribus quas
                                        sapiente optio.</p>
                                </div>
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Unde perspiciatis ut repellat dolorem</h3>
                                    <h4 class="mb-3">Amet cumque nam sed voluptas doloribus iusto. Dolorem eos
                                        aliquam quis.</h4>
                                    <p>Dolorem quia fuga consectetur voluptatem. Earum consequatur nulla maxime
                                        necessitatibus cum accusamus. Voluptatem dolorem ut numquam dolorum delectus
                                        autem veritatis facilis. Et ea ut repellat ea. Facere est dolores fugiat
                                        dolor.</p>
                                </div>
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Aliquid non alias minus</h3>
                                    <h4 class="mb-3">Necessitatibus voluptatibus explicabo dolores a vitae
                                        voluptatum.</h4>
                                    <p>Neque voluptates aut. Soluta aut perspiciatis porro deserunt. Voluptate ut
                                        itaque velit. Aut consectetur voluptatem aspernatur sequi sit laborum.
                                        Voluptas enim dolorum fugiat aut.</p>
                                </div>
                            </div><!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti
                                        laborum soluta nihil est. Eum similique neque autem ut.</h4>
                                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at
                                        voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui
                                        animi animi rerum.</p>
                                </div>
                            </div><!-- End slide item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        </div>

    </section><!-- /Why Us Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                    <div>
                        <h4 class="title">Lorem Ipsum</h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                        <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i>
                    </div>
                    <div>
                        <h4 class="title">Dolor Sitema</h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat tarad limino ata</p>
                        <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                    <div>
                        <h4 class="title">Sed ut perspiciatis</h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur</p>
                        <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i>
                    </div>
                    <div>
                        <h4 class="title">Magni Dolores</h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum</p>
                        <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i>
                    </div>
                    <div>
                        <h4 class="title">Nemo Enim</h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque</p>
                        <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i>
                    </div>
                    <div>
                        <h4 class="title">Eiusmod Tempor</h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum soluta nobis est eligendi</p>
                        <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section>
    <!-- /Services Section -->

@endsection


{{--  <main class="container">
        <div class="row">
            @foreach ($vegetable as $vegetables)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top"
                            src="{{ $vegetables->images ? asset('list_of_vegetables/' . $vegetables->images) : asset('assets/img/offices/default.jpg') }}"
                            alt="Vegetables">
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
                        <img class="card-img-top"
                            src="{{ $fruits->image ? asset('list_of_fruits/' . $fruits->image) : asset('assets/img/offices/default.jpg') }}"
                            alt="Fruits">
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
                        <img class="card-img-top"
                            src="{{ $farmers->image ? asset('list_of_equipment/' . $farmers->image) : asset('assets/img/offices/default.jpg') }}"
                            alt="Farmers Equipment">
                        <div class="card-body">
                            <h5 class="card-title">Farmers Equipment Corner</h5>
                            <p class="card-text">All about farmers Equipments are Here.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>  --}}
