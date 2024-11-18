@extends('layout.mainLayout')

@section('content')
    <style>
        .timeline-panel {
            width: 408px;
        }

        .timeline {
            list-style: none;
            padding: 20px 0;
            position: relative;
            overflow: hidden;
            /* Ensure children are contained */

        }

        .timeline-body {
            text-align: left;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            /* Position at the center */
            width: 4px;
            /* Thickness of the line */
            background: #e9ecef;
            /* Line color */
            transform: translateX(-50%);
            z-index: 1;
            /* Ensure it is below other elements */
        }

        .timeline>li {
            position: relative;
            margin-bottom: 20px;
            width: 50%;
            padding: 0 20px;
            clear: both;
            /* Clear floats to prevent layout issues */
        }

        .timeline>li:nth-child(odd) {
            float: left;
            text-align: right;
        }

        .timeline>li:nth-child(even) {
            float: right;
            text-align: left;
        }

        .timeline-badge {
            position: absolute;
            top: 20px;
            left: 50%;
            width: 30px;
            height: 30px;
            background: var(--bs-primary);
            border-radius: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.2rem;
            z-index: 2;
            /* Ensure it appears above the line */
        }

        .timeline-panel {
            position: relative;
            background: #fff;
            border: 1px solid #e9ecef;
            border-radius: 0.375rem;
            padding: 15px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1);
            z-index: 2;
        }

        .timeline-panel::before {
            content: '';
            position: absolute;
            top: 20px;
            width: 0;
            height: 0;
            color: blue border-style: solid;
        }

        .timeline>li:nth-child(odd) .timeline-panel {
            margin-left: auto;
        }

        .timeline>li:nth-child(odd) .timeline-panel::before {
            right: -10px;
            border-width: 10px 10px 10px 0;
            border-color: transparent #fff transparent transparent;
        }

        .timeline>li:nth-child(even) .timeline-panel {
            margin-right: auto;
        }

        .timeline>li:nth-child(even) .timeline-panel::before {
            left: -10px;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent #fff;
        }



        .gtco-services {
            padding: 2em 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 2px 78px;
        }

        .gtco-services .service-wrap {
            display: flex;
            justify-content: center;
            /* Center the service card horizontally */
        }

        .gtco-services .service {
            margin: 10px;
            text-align: center;
            padding: 2em;
            margin-bottom: 30px;
            position: relative;
            background: #fff;
            box-shadow: 0px 0px 38px -2px rgba(0, 0, 0, 0.075);
            transition: 0.5s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 220px;
            max-width: 356px;
            /* Center content vertically */
            align-items: center;
            /* Center content horizontally */
        }

        .gtco-services .service h3 {
            font-size: 18px;
            color: #000;
            text-align: center;
            /* Center the title */
            margin-bottom: 1em;
        }

        .gtco-services .service h3 i {
            color: #17B794;
            font-size: 22px !important;
            margin-bottom: 0.5em;
        }

        .gtco-services .service p {
            text-align: center;
            /* Center the paragraph */
            color: #898989;
            font-size: 15px;
            line-height: 1.6;
            /* Better readability */
        }

        .gtco-services .service p:last-child {
            margin-bottom: 0;
        }

        #headingCert {
            display: flex;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 8px;
                /* Align the line with the badges on small screens */
            }

            .timeline>li {
                width: 100%;
                text-align: left;
                padding-left: 40px;
            }

            .timeline>li:nth-child(odd),
            .timeline>li:nth-child(even) {
                float: none;
            }

            .timeline-badge {
                left: 20px;
            }

            .timeline-panel {
                margin: 0 auto 20px auto;
            }

            .timeline-panel::before {
                left: 10px;
                border-width: 10px 10px 0;
                border-color: #fff transparent transparent transparent;
            }

            .gtco-services {
                padding: 2em 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 2px 8px;
                /* Center the entire section content */
            }
        }

        #backGroudGray {
            background-color: #f9f9f9;
            padding-top: 20px;
        }
    </style>
    @include('components.banner')

    <div class="gtco-services gtco-section">
        <div class="gtco-container">
            <div class="row row-pb-md">
                <div class="col-md-4 col-sm-4 service-wrap">
                    <div class="service service animate-change changed animated-fast">
                        <h3><i class="ti-ruler-pencil"></i> {{ __('certificates.altajer_althahabi_certificate_title') }}</h3>
                        <p>{{ __('certificates.altajer_althahabi_certificate_description') }}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 service-wrap">
                    <div class="service">
                        <h3><i class="ti-settings"></i> {{ __('certificates.iso_certification_title') }}</h3>
                        <p>{{ __('certificates.iso_certification_description') }}</p>
                    </div>
                </div>
    
                <div class="col-md-4 col-sm-4 service-wrap">
                    <div class="service">
                        <h3><i class="ti-check-box"></i> {{ __('certificates.halal_food_certificate_title') }}</h3>
                        <p>{{ __('certificates.halal_food_certificate_description') }}</p>
                    </div>
                </div>
    
                <div class="clearfix visible-md-block visible-sm-block"></div>
            </div>
        </div>
    </div>

    <div id="backGroudGray" class="">
        <div class="container my-5">
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ __('certificates.achievements_heading') }}</h2>
                <p style="color: #e7544c;">{{ __('certificates.achievements_description') }}</p>
            </div>

            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="bi bi-circle-fill"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            @if (app()->getLocale() === 'ar')
                                <a href="{{ asset('assets/Certificates/TrustAr.png') }}" class="glightbox"
                                    data-gallery="certificates-gallery">
                                    <img class="img-fluid" src="{{ asset('assets/Certificates/TrustAr.png') }}"
                                        alt="Trust program Certificate">
                                </a>
                            @else
                                <a href="{{ asset('assets/Certificates/TrustHU.png') }}" class="glightbox"
                                    data-gallery="certificates-gallery">
                                    <img class="img-fluid" src="{{ asset('assets/Certificates/TrustHU.png') }}"
                                        alt="شهادة برنامج الثقه">
                                </a>
                            @endif

                        </div>
                        <div class="timeline-body">
                            <h4>{{ __('certificates.trust_program_certificate_title') }}</h4>
                            <p>{{ __('certificates.trust_program_certificate_description') }}</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="bi bi-circle-fill"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <a href="{{ asset('assets/Certificates/altajerAlthahabi.png') }}" class="glightbox"
                                data-gallery="certificates-gallery">
                                <img class="img-fluid" src="{{ asset('assets/Certificates/altajerAlthahabi.png') }}"
                                    alt="Altajer Althahabi Certificate">
                            </a>
                        </div>
                        <div class="timeline-body">
                            <h4>{{ __('certificates.altajer_althahabi_certificate_title') }}</h4>
                            <p>{{ __('certificates.altajer_althahabi_certificate_description') }}</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="bi bi-circle-fill"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <a href="{{ asset('assets/Certificates/Iso_cert.png') }}" class="glightbox"
                                data-gallery="certificates-gallery">
                                <img class="img-fluid" src="{{ asset('assets/Certificates/Iso_cert.png') }}"
                                    alt="ISO Certificate">
                            </a>
                        </div>
                        <div class="timeline-body">
                            <h4>{{ __('certificates.iso_certification_title') }}</h4>
                            <p>{{ __('certificates.iso_certification_description') }}</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="bi bi-circle-fill"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            @if (app()->getLocale() === 'ar')
                                <a href="{{ asset('assets/Certificates/HalalAr.png') }}" class="glightbox"
                                    data-gallery="certificates-gallery">
                                    <img class="img-fluid" src="{{ asset('assets/Certificates/HalalAr.png') }}"
                                        alt="Halal food certificate">
                                </a>
                            @else
                                <a href="{{ asset('assets/Certificates/HalalEn.png') }}" class="glightbox"
                                    data-gallery="certificates-gallery">
                                    <img class="img-fluid" src="{{ asset('assets/Certificates/HalalEn.png') }}"
                                        alt="شهادة حلال">
                                </a>
                            @endif

                        </div>
                        <div class="timeline-body">
                            <h4>{{ __('certificates.halal_food_certificate_title') }}</h4>
                            <p>{{ __('certificates.halal_food_certificate_description') }}</p>
                        </div>
                    </div>
                </li>
                <!-- Add more list items as needed -->
            </ul>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var lightbox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                closeButton: true
            });
        });
    </script>
@endpush
