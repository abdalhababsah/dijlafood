{{-- resources/views/home.blade.php --}}
@extends('layout.mainLayout')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/Home.css') }}">
    </head>
    <style>
        #heroCarousel .carousel-item img {
            max-height: 600px;
            object-fit: cover;
        }

        .carousel-caption {
            bottom: 20px;
        }
    </style>
    <!-- Hero Section -->
    <div class="light-background">
        <div id="heroCarousel" class="carousel slide " data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="{{ __('home.slide_1') }}"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                    aria-label="{{ __('home.slide_2') }}"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                    aria-label="{{ __('home.slide_3') }}"></button>
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/Banners/banner_new_4.png') }}" class="d-block w-100"
                        alt="{{ __('home.hero_background') }}">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h2 class="carouselH2">{{ __('home.broasted_chicken_breast') }}<span>.</span></h2>
                        <p>{{ __('home.team_description') }}</p>
                    </div> --}}
                </div>

                <!-- Second Slide -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Banners/banner_new_3.png') }}" class="d-block w-100"
                        alt="{{ __('home.hero_background_2') }}">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h2 class="carouselH2">{{ __('home.marketing_strategies') }}</h2>
                        <p>{{ __('home.creative_solutions') }}</p>
                    </div> --}}
                </div>

                <!-- Third Slide -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Banners/banner_new_2.png') }}" class="d-block w-100"
                        alt="{{ __('home.hero_background_3') }}">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h2 class="carouselH2">{{ __('home.digital_excellence') }}</h2>
                        <p>{{ __('home.empowering_businesses') }}</p>
                    </div> --}}
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('home.previous') }}</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('home.next') }}</span>
            </button>
        </div>
    </div>

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 2,
                      "spaceBetween": 40
                    },
                    "480": {
                      "slidesPerView": 3,
                      "spaceBetween": 60
                    },
                    "640": {
                      "slidesPerView": 4,
                      "spaceBetween": 80
                    },
                    "992": {
                      "slidesPerView": 6,
                      "spaceBetween": 120
                    }
                  }
                }
                </script>
                <div class="swiper-wrapper align-items-center">
                    @for ($i = 1; $i <= 12; $i++)
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/sposnsor/' . $i . '.png') }}" class="img-fluid"
                                alt="{{ __('home.client') . ' ' . $i }}">
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('home.about_us') }}</h2>
            <p>{{ __('home.about_dijla') }}</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('assets/img/abouthome.jpeg') }}" class="img-fluid" alt="{{ __('home.about_us') }}">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <p class="fst-italic">
                        {{ __('home.company_details') }}
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i>
                            <span>{{ __('home.product_description') }}</span>
                        </li>
                        <li><i class="bi bi-check2-all"></i>
                            <span>{{ __('home.quality_materials') }}</span>
                        </li>
                        <li><i class="bi bi-check2-all"></i>
                            <span>{{ __('home.ethical_slaughter') }}</span>
                        </li>

                    </ul>
                    <p>
                        {{ __('home.factory_capacity') }}
                    </p>
                </div>
            </div>

        </div>

    </section>
    <!-- Blog Section -->
    <section class=" blog-section section-block">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('factory.our_factory') }}</h2>
            <p> {{ __('factory.automated_production_lines') }}</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="features">
                <!-- Feature Item 1 -->
                <div class="feature-item">
                    <div class="icon">
                        <i class="bi bi-gear-fill"></i> <!-- Replace with your preferred icon -->
                    </div>
                    <h3>{{ __('factory.feature_1_title') }}</h3>
                    <p>
                        {{ __('factory.feature_1_description') }}
                    </p>
                </div>
                <!-- Feature Item 2 -->
                <div class="feature-item">
                    <div class="icon">
                        <i class="bi bi-lightbulb-fill"></i> <!-- Replace with your preferred icon -->
                    </div>
                    <h3>{{ __('factory.feature_2_title') }}</h3>
                    <p>
                        {{ __('factory.feature_2_description') }}
                    </p>
                </div>
                <!-- Feature Item 3 -->
                <div class="feature-item">
                    <div class="icon">
                        <i class="bi bi-award-fill"></i> <!-- Replace with your preferred icon -->
                    </div>
                    <h3>{{ __('factory.feature_3_title') }}</h3>
                    <p>
                        {{ __('factory.feature_3_description') }}
                    </p>
                </div>
            </div> <!-- .features -->
        </div> <!-- .container -->
    </section>
    <!-- Products Section -->
    <section id="products" class="products section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('home.our_products') }}</h2>
            <p>{{ __('home.explore_products') }}</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4 justify-content-center">

                @foreach ($navcategories as $category)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 + $loop->index * 100 }}">
                        <a href="{{ route('products.subcategory', ['categoryID' => $category->id]) }}">
                        <div class="product-item position-relative"
                            style="background-image: url('{{ asset('storage/' . $category->img_path) }}');">
                            <div class="product-info">
                                <h3 class="text-white">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                    </div><!-- End Product Item -->
                @endforeach

            </div>
        </div>

    </section><!-- /Products Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('assets/img/productlex.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">

                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-lg-5">
                    <img src="{{ asset('assets/img/dijla_main_servise.jpg') }}" alt="{{ __('home.stats_image') }}"
                        class="img-fluid">
                </div>

                <div class="col-lg-6">

                    <h3 class="fw-bold fs-2 mb-3">{{ __('home.world_wide') }}</h3>
                    <p>
                        {{ __('home.world_wide_description') }}
                    </p>

                    <div class="row gy-4">

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="2045678" data-purecounter-end="30245678"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>{{ __('home.happy_clients') }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="521"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>{{ __('home.projects') }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-headset flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="345678"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>{{ __('home.hours_of_support') }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-6">
                            <div class="stats-item d-flex">
                                <i class="bi bi-people flex-shrink-0"></i>
                                <div>
                                    <span data-purecounter-start="0" data-purecounter-end="1360"
                                        data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>{{ __('home.hard_workers') }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Stats Section -->
@endsection
