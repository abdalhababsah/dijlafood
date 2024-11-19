<head>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<header class="header_section">
    <!-- Language Switcher Section -->
    <div class="language-switcher-section">
        <div class="container d-flex justify-content-end align-items-center py-2">
            <div class="language-switcher">
                <a href="{{ route('lang.switch', ['locale' => 'en']) }}"
                    class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">
                    @lang('home.en')
                </a>
                |
                <a href="{{ route('lang.switch', ['locale' => 'ar']) }}"
                    class="{{ app()->getLocale() === 'ar' ? 'active' : '' }}">
                    {{ __('home.ar') }}
                </a>
            </div>
        </div>
    </div>

    <nav>
        <!-- Logo Section -->
        <a href="{{ route('home') }}">
            <div class="logo">
                <img src="{{ asset('assets/img/Dijla-Logo-New.png') }}" alt="Logo" />
            </div>
        </a>
        <div class="d-flex">
            <!-- Desktop Navigation Links -->
            <ul class="desktop-nav">
                <li><a href="{{ route('gallery') }}">@lang('home.photo_gallery')</a></li>
                <li><a href="{{ route('contact') }}">@lang('home.contact_us')</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        @lang('home.our_products')
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($navcategories as $category)
                            <li><a href="{{ route('products.subcategory', ['categoryID' => $category->id]) }}">
                                    {{ $category->name }}
                                </a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        @lang('home.about_us')
                    </a>
                    <ul class="dropdown-menu">
                        {{-- <li><a href="{{ route('our.story') }}">@lang('home.our_story')</a></li> --}}
                        <li><a href="{{ route('our.factory') }}">@lang('home.our_factory')</a></li>
                        <li><a href="{{ route('our.certificates') }}">@lang('home.our_certificates')</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Hamburger Menu for Mobile -->
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="logo secondery-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/tiptop.png') }}" alt="Logo" />
                </a>
            </div>

        </div>

    </nav>

    <!-- Mobile Menu -->
    <div class="menubar">
        <ul>
            <li><a href="{{ route('home') }}">@lang('home.home')</a></li>
            <li>
                <button class="dropdown-btn">
                    @lang('home.our_products')
                    <i class="fa fa-chevron-down expand-icon"></i>
                </button>
                <ul class="subnav dropdown-container">
                    @foreach ($navcategories as $category)
                        <li><a href="{{ route('products.subcategory', ['categoryID' => $category->id]) }}">
                                {{ $category->name }}
                            </a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ route('gallery') }}">@lang('home.photo_gallery')</a></li>
            <li><a href="{{ route('contact') }}">@lang('home.contact_us')</a></li>
            <li>
                <button class="dropdown-btn">
                    @lang('home.about_us')
                    <i class="fa fa-chevron-down expand-icon"></i>
                </button>
                <ul class="subnav dropdown-container">
                    {{-- <li><a href="{{ route('our.story') }}">@lang('home.our_story')</a></li> --}}
                    <li><a href="{{ route('our.factory') }}">@lang('home.our_factory')</a></li>
                    <li><a href="{{ route('our.certificates') }}">@lang('home.our_certificates')</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<style>
    /* Desktop Dropdown */
    .desktop-nav .dropdown {
        position: relative;
    }

    .desktop-nav .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        display: none;
        background-color: var(--nav-dropdown-background-color);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        list-style: none;
        padding: 0;
        margin: 0;
        z-index: 1000;
    }

    .desktop-nav .dropdown:hover .dropdown-menu {
        display: block;
        /* Show dropdown on hover */
    }

    .desktop-nav .dropdown-menu li {
        padding: 0;
    }

    .desktop-nav .dropdown-menu li a {
        display: block;
        padding: 10px 15px;
        color: var(--nav-dropdown-color);
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .desktop-nav .dropdown-menu li a:hover {
        background-color: var(--nav-dropdown-hover-color);
        color: var(--contrast-color);
    }

    /* Mobile Navigation */
    .menubar {
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 300px;
        background-color: var(--nav-mobile-background-color);
        transition: left 0.3s ease;
        z-index: 1000;
        overflow-y: auto;
    }

    .menubar.active {
        left: 0;
    }

    .menubar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menubar ul li {
        border-bottom: 1px solid var(--surface-color);
    }

    .menubar ul li a,
    .menubar ul li button {
        padding: 10px 16px;
        font-size: 16px;
        text-decoration: none;
        color: var(--default-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border: none;
        background: none;
        width: 100%;
    }

    .menubar ul li a:hover,
    .menubar ul li button:hover {
        color: var(--nav-hover-color);
        background-color: var(--surface-color);
    }

    .dropdown-container {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .dropdown-btn.active+.dropdown-container {
        max-height: 300px;
        /* Adjust based on content */
    }

    .fa-caret-down {
        font-size: 14px;
        transition: transform 0.3s ease;
    }

    .dropdown-btn.active .fa-caret-down {
        transform: rotate(180deg);
    }

    .hamburger {
        z-index: 1000000;
    }

    /* Hamburger Menu Styles */
    .hamburger {
        display: none;
        /* Hidden on desktop */
        cursor: pointer;
        padding: 10px;
        background: transparent;
        border: none;
        position: relative;
        z-index: 1000000;
    }

    .hamburger .line {
        display: block;
        width: 25px;
        height: 3px;
        background-color: var(--default-color);
        margin: 5px 0;
        transition: all 0.3s ease-in-out;
    }

    /* Hamburger to X transformation */
    .hamburger.active .line:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .line:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .line:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

    /* Mobile Navigation Styles */
    @media screen and (max-width: 768px) {
        .hamburger {
            display: block;
            /* Show on mobile */
        }

        .desktop-nav {
            display: none;
        }
    }



    /* Additional Logo Styles */
    .logo img {
        max-height: 60px;
        width: auto;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 10px;
        background-color: var(--nav-background-color);
    }



    /* Ensure proper spacing between elements */
    .d-flex {
        display: flex;
        align-items: center;
        gap: 20px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.querySelector(".hamburger");
        const navbar = document.querySelector(".menubar");
        const dropdownButtons = document.querySelectorAll(".dropdown-btn");

        // Toggle mobile nav and hamburger animation
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navbar.classList.toggle("active");
        });

        // Close menu when clicking outside
        document.addEventListener("click", (e) => {
            if (!hamburger.contains(e.target) && !navbar.contains(e.target)) {
                hamburger.classList.remove("active");
                navbar.classList.remove("active");
            }
        });

        // Expand/collapse dropdowns in mobile nav
        dropdownButtons.forEach(button => {
            button.addEventListener("click", () => {
                const dropdownContainer = button.nextElementSibling;
                button.classList.toggle("active");
                if (button.classList.contains("active")) {
                    dropdownContainer.style.maxHeight = dropdownContainer.scrollHeight + "px";
                } else {
                    dropdownContainer.style.maxHeight = "0";
                }
            });
        });
    });
</script>
