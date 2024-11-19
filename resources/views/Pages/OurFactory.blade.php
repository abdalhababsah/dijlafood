@extends('layout.mainLayout')

@section('content')
    <style>
        .factory-divider-section {
            padding: 40px 0;
            background-color: #f9f9f9;
        }

        .factory-divider-content {
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .factory-horizontal-list {
            display: flex;
            gap: 30px;
            padding: 0;
            margin: 0;
            list-style: none;
            align-items: center;
        }

        .factory-horizontal-list li {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #333;
            gap: 8px;
            /* Space between icon and text */
        }

        .factory-horizontal-list li i {
            font-size: 20px;
            color: #e7544c;
            /* Red color for icons */
        }

        .factory-divider-text h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #e7544c;
        }

        @media (max-width: 768px) {
            .factory-horizontal-list {
                flex-direction: column;
                gap: 15px;
            }

            .factory-horizontal-list li {
                justify-content: center;
                text-align: center;
            }
        }

        /*--------------------------------------------------------------
                # Divider Section - RTL and LTR Support
                --------------------------------------------------------------*/
        .divider-section {
            padding: 60px 0;
            /* Light neutral background */
        }

        .divider-content {
            display: flex;
            flex-direction: column;
            /* Stack items vertically */
            align-items: center;
            /* Center-align image and text */
            gap: 20px;
            /* Space between image and text */
            padding: 20px;
            text-align: center;
            /* Center the text */
        }

        .divider-content img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
        }




        /* Responsive Adjustments */
        @media (max-width: 767.98px) {
            .divider-content {
                flex-direction: column;
                text-align: center;
            }


        }        @media (min-width: 580px) and (max-width: 768px) {
            .section-title p {
                font-size: 30px !important;
            }
        }

        @media screen and (max-width: 580px) {

            .section-title p {
                margin-top: 5px;
                font-size: 22px !important;
            }

            #heroCarousel .carousel-item img {
                min-height: 700px !important;
                object-fit: cover;
            }
        }

    </style>

    @include('components.banner')

    <!-- Divider Section -->
    <section class="divider-section section-block" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container">
            <div class="divider-content divider-text ">
                <!-- Image on the Right (LTR) or Left (RTL) -->
                <div class="divider-image">
                    <img src="{{ asset('assets/img/factory/iso.jpg') }}" alt="{{ __('factory.divider_image_alt') }}">
                </div>
                <!-- Text on the Left (LTR) or Right (RTL) -->
                <div class=" mb-0">
                    {{ __('factory.divider_text') }}
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('factory.our_factory') }}</h2>
            <p style="color: #e7544c;">{{ __('factory.check_our_factory') }}</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">


                <!-- Portfolio Items -->
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <!-- Portfolio Item 1 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-3.png') }}" class="img-fluid"
                            alt="{{ __('factory.machinery') }} 1">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 1</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-3.png') }}"
                                title="{{ __('factory.machinery') }} 1" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 2 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-2.png') }}" class="img-fluid"
                            alt="{{ __('factory.products') }} 1">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 2</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-2.png') }}"
                                title="{{ __('factory.products') }} 1" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 3 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-1.png') }}" class="img-fluid"
                            alt="{{ __('factory.facilities') }} 1">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 3</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-1.png') }}"
                                title="{{ __('factory.facilities') }} 1" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 4 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-4.png') }}" class="img-fluid"
                            alt="{{ __('factory.machinery') }} 2">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 4</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-4.png') }}"
                                title="{{ __('factory.machinery') }} 2" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 5 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-5.png') }}" class="img-fluid"
                            alt="{{ __('factory.products') }} 2">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 5</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-5.png') }}"
                                title="{{ __('factory.products') }} 2" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 6 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-6.png') }}" class="img-fluid"
                            alt="{{ __('factory.facilities') }} 2">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 6</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-2.png') }}"
                                title="{{ __('factory.facilities') }} 2" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 7 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-7.png') }}" class="img-fluid"
                            alt="{{ __('factory.machinery') }} 3">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 7</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-7.png') }}"
                                title="{{ __('factory.machinery') }} 3" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 8 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-8.png') }}" class="img-fluid"
                            alt="{{ __('factory.products') }} 3">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 8</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-8.png') }}"
                                title="{{ __('factory.products') }} 3" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>

                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Portfolio Item 9 -->
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-machinery">
                        <img src="{{ asset('assets/img/factory/factory-9.png') }}" class="img-fluid"
                            alt="{{ __('factory.facilities') }} 3">
                        <div class="portfolio-info">
                            <h4>{{ __('factory.machinery') }} 9</h4>
                            <p>{{ __('factory.description') }}</p>
                            <a href="{{ asset('assets/img/factory/factory-9.png') }}"
                                title="{{ __('factory.facilities') }} 3" data-gallery="portfolio-gallery-machinery"
                                class="glightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->
    <div class="" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3388.5380098246574!2d35.979331475974845!3d31.86478463004456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b593f869cda43%3A0xe3f632f3b3ecd9db!2sDijla%20Food%20Industrial%20Co!5e0!3m2!1sen!2sjo!4v1731742290440!5m2!1sen!2sjo"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="factory-divider-section" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
        <div class="container">
            <div class="factory-divider-content">
                <!-- Factory Contact Information -->
                <div class="factory-divider-text">
                    <ul class="factory-horizontal-list">
                        <li>
                            <i class="bi bi-person-circle"></i>
                            <span><strong>{{ __('factory.manager') }}</strong>: 00962796036166</span>
                        </li>
                        <li>
                            <i class="bi bi-person-lines-fill"></i>
                            <span><strong>{{ __('factory.commercial_manager') }}</strong>: 00962790442486</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <span><strong>{{ __('factory.email') }}</strong>: export@dijlafood.com</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
