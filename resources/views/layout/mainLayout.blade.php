<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@lang('home.title_page')</title>
    <meta name="description" content="@lang('home.meta_description')">
    <meta name="keywords" content="@lang('home.meta_keywords')">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@lang('home.title_page')">
    <meta property="og:description" content="@lang('home.meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/Dijla-Logo-New.png') }}">
    <meta property="og:locale" content="{{ app()->getLocale() }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@lang('home.title_page')">
    <meta name="twitter:description" content="@lang('home.meta_description')">
    <meta name="twitter:image" content="{{ asset('assets/img/Dijla-Logo-New.png') }}">
    <meta name="twitter:site" content="@DijlaFood">

    <!-- Canonical Link -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/Dijla-Logo-New.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/img/Dijla-Logo-New.png') }}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/Dijla-Logo-New.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @if (app()->getLocale() === 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @endif
</head>
<style>
    #main{
        min-height:70vh;
    }
</style>

<body class="service-details-page">

    @include('layout.header')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('layout.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Dijla Food",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/img/Dijla-Logo-New.png') }}",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+123456789",
        "contactType": "Customer Service",
        "areaServed": "Global",
        "availableLanguage": ["English", "Arabic"]
      },
      "sameAs": [
        "https://www.facebook.com/DijlaFood",
        "https://www.twitter.com/DijlaFood",
        "https://www.instagram.com/DijlaFood"
      ]
    }
    </script>
</html>
