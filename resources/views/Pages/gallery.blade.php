@extends('layout.mainLayout')

@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">
    </head>

    <body>
        <div class="gallery">
            <div class="swiper-container gallery-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_6.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_7.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_8.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_9.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_10.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_11.png' }}" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_6.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_7.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_8.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_9.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_10.png' }}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ 'assets/img/Banners/banner_new_11.png' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <script src='{{ asset('assets/js/swiper.js') }}'></script>
        <script>
            var slider = new Swiper('.gallery-slider', {
                slidesPerView: 1,
                centeredSlides: true,
                loop: true,
                loopedSlides: 6,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'slide', // Use slide effect
                allowTouchMove: true, // Enable touch navigation
                watchOverflow: true, // Disable navigation if there's only one slide
                speed: 400, // Transition speed in ms
            });

            var thumbs = new Swiper('.gallery-thumbs', {
                slidesPerView: 'auto',
                spaceBetween: 10,
                centeredSlides: true,
                loop: true,
                slideToClickedSlide: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });

            // Link the sliders
            slider.controller.control = thumbs;
            thumbs.controller.control = slider;
        </script>
        <style>
            .swiper-slide img {
                object-fit: contain !important;
            }
            /* Base styles for the gallery */
.gallery {
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    /* Prevent horizontal scrolling */
}

.gallery-slider {
    width: 100%;
    height: auto;
    margin: 0 0 10px 0;
    overflow: hidden;
    /* Prevent slider overflow */
}

.gallery-slider .swiper-slide {
    width: 100% !important;
    /* Force full width */
    height: fit-content;
    display: flex;
    /* Center the image */
    justify-content: center;
    align-items: center;
}

.gallery-slider .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
    margin: 0 auto;
}

.gallery-thumbs {
    width: 100%;
    max-width: 100%;
    padding: 0;
    overflow: hidden;
    margin-bottom: 20px;
}

.gallery-thumbs .swiper-slide {
    width: 100px;
    height: 100px;
    text-align: center;
    overflow: hidden;
    opacity: 0.5;
}

.gallery-thumbs .swiper-slide-active {
    opacity: 1;
}

.gallery-thumbs .swiper-slide img {
    width: auto;
    height: 100%;
    object-fit: cover;
}

.swiper-button-next,
.swiper-button-prev {
    color: var(--accent-color);
    font-size: 24px;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    color: var(--nav-hover-color);
    transition: color 0.3s ease;
}

/* Mobile-specific styles */
@media screen and (max-width: 768px) {
    .gallery {
        height: 100vh;
        position: relative;
        margin: 0;
        padding: 0;
    }

    .gallery-slider {
        height: 80vh;
        margin: 0;
    }

    .gallery-slider .swiper-slide {
        height: 100%;
    }

    .gallery-slider .swiper-slide img {
        height: 100%;
        max-width: 100%;
        object-fit: contain;
    }

    .gallery-thumbs {
        height: 15vh;
        margin: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
        width: 60px;
        height: 60px;
    }

    .swiper-button-next,
    .swiper-button-prev {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 20px;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 20px;
    }
}

/* Small mobile devices */
@media screen and (max-width: 480px) {
    .gallery-thumbs .swiper-slide {
        width: 50px !important;
        height: 50px !important;
    }

    .swiper-button-next,
    .swiper-button-prev {
        padding: 15px !important;
        width: 30px !important;
        height: 30px !important;
    }
}
        </style>

    </body>
@endsection
