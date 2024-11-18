@extends('layout.mainLayout')

@section('content')

<head>
    <link rel="stylesheet" href="{{asset('assets/css/gallery.css')}}">
</head>
    <body>
        <div class="gallery">
            <div class="swiper-container gallery-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_6.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_7.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_8.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_9.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_10.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_11.png'}}" alt="">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_6.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_7.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_8.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_9.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_10.png'}}" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{'assets/img/Banners/banner_new_11.png'}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <script src='{{asset('assets/js/swiper.js')}}'></script>
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
            });
            var thumbs = new Swiper('.gallery-thumbs', {
                slidesPerView: 'auto',
                spaceBetween: 10,
                centeredSlides: true,
                loop: true,
                slideToClickedSlide: true,
            });
            slider.controller.control = thumbs;
            thumbs.controller.control = slider;



        </script>
        <style>
         .swiper-slide img {
    object-fit: contain !important;
}
        </style>

    </body>
@endsection
