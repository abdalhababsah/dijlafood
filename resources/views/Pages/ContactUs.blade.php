@extends('layout.mainLayout')

@section('content')
    <style>
        @media (min-width: 580px) and (max-width: 768px) {
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
    <!-- Responsive Banner Section -->
@include('components.banner')


    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('contactus.contact_us') }}</h2>
            <p>{{ __('contactus.contact_us') }}</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3383.6716280343267!2d35.849297975947685!3d31.99691602344284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca18bd3c9c4db%3A0x390c53be083e10ac!2zVGlwVG9wIC0g2KrZkNioINiq2YjYqA!5e0!3m2!1sen!2sjo!4v1731400213560!5m2!1sen!2sjo"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4 d-flex">
                    <div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>{{ __('contactus.address') }}</h3>
                                <p>{{ __('contactus.address_content') }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>{{ __('contactus.call_us') }}</h3>
                                <p>00962796743429</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-building flex-shrink-0"></i>
                            <div>
                                <h3>{{ __('contactus.company_number') }}</h3>
                                <p>00962796743429</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>{{ __('contactus.email_us') }}</h3>
                                <p>batelco@dijlafood.com</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
  
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="col-lg-8">
                    <form action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control"
                                    placeholder="{{ __('contactus.your_name') }}" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control"
                                    placeholder="{{ __('contactus.your_email') }}" required>
                            </div>

                            <div class="col-md-12">
                                <textarea name="message" class="form-control" rows="6" placeholder="{{ __('contactus.message') }}" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">{{ __('contactus.loading') }}</div>
                                <div class="error-message"></div>
                                <div class="sent-message">{{ __('contactus.sent_message') }}</div>

                                <button type="submit">{{ __('contactus.send_message') }}</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
@endsection
