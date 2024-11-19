@extends('layout.mainLayout')

@section('content')
    <style>
        /* Tabs Styling */
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            gap: 10px;
        }

        #viewBtn {
            background-color: var(--accent-color);
            /* Use accent color for brand consistency */
            color: #ffffff;
            /* Text color */
            border: none;
            /* Remove border */
            border-radius: 5px;
            /* Rounded corners */
            padding: 5px 9px;
            /* Button padding */
            cursor: pointer;
            /* Pointer cursor on hover */
            transition: all 0.3s ease;
            /* Smooth transition for hover effects */
        }

        #viewBtn:hover {
            background-color: var(--nav-hover-color);
            /* Slightly darker color on hover */
            color: #ffffff;
            /* Keep text white on hover */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            /* Enhanced shadow on hover */
            transform: translateY(-2px);
            /* Subtle lift effect */
        }

        #viewBtn:active {
            background-color: var(--nav-hover-color);
            /* Active state same as hover */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* Reduced shadow for active state */
            transform: translateY(1px);
            /* Pressed effect */
        }

        .tabs button {
            padding: 10px 20px;
            border: none;
            background-color: var(--surface-color);
            color: var(--default-color);
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tabs button.active {
            background-color: var(--accent-color);
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .tabs button:hover {
            background-color: var(--nav-hover-color);
            color: white;
        }

        .products .product-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;  /* Centers items horizontally */
    align-items: center;      /* Centers items vertically */
    gap: 20px;
    padding: 20px;
    width: 100%;
}

.products .product-item {
    max-width: 285px;
    min-width: 228px;
    flex: 0 0 auto;          /* Prevents items from stretching */
}

/* Update your media queries to maintain centering */
@media (max-width: 1218px) {
    .products .product-grid {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .products .product-grid {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .products .product-grid {
        justify-content: center;
    }
}
        /* Product Item Styling */
        .products .product-item .card {
            height: 100%;

            width: 300px;
            /* Ensure cards stretch to fill space */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add a subtle shadow for better visuals */
            transition: transform 0.2s, box-shadow 0.2s;
            /* Smooth hover effects */
        }

        .products .product-item .card:hover {
            transform: translateY(-5px);
            /* Lift card on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Increase shadow depth */
        }

        .products .product-item .card-img-top {
            height: 200px;
            /* Fixed height for image uniformity */
            object-fit: cover;
            /* Maintain aspect ratio while cropping */
            border-bottom: 1px solid #e0e0e0;
        }

        .products .product-item .card-body {
            padding: 15px;
            text-align: center;
        }

        .products .product-item .card-title {
            font-size: 18px;
            font-weight: bold;
        }

        .products .product-item .card-text {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .products .product-item .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            text-transform: uppercase;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .products .product-item .btn-primary:hover {
            background-color: var(--nav-hover-color);
        }

        .products .product-item {
            max-width: 285px;
            min-width: 228px;
        }

        .product-grid{
            {
    align-items: center;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
            /* Space between items */
            padding: 20px;
}
        }
        
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
    @include('components.banner')
    <section id="products" class="products section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ __('products.our_products') }}</h2>
            <p>{{ __('products.explore_our_collection') }}</p>
        </div>

        <div class="container">

            <!-- Tabs for Subcategories -->

            <div class="tabs">
                <button class="active" onclick="filterProducts('all')">{{ __('products.all') }}</button>
                @foreach ($categories->first()->subcategories as $subcategory)
                    <button onclick="filterProducts('subcategory-{{ $subcategory->id }}')">{{ $subcategory->name }}</button>
                @endforeach
            </div>

            <!-- Product Grid -->
            <div class="product-grid" data-aos="fade-up" data-aos-delay="200">
                @foreach ($categories->first()->subcategories as $subcategory)
                    @foreach ($subcategory->products as $product)
                        <div class="product-item subcategory-{{ $subcategory->id }}">
                            <div class="card">
                                <img src="{{ asset('storage/' . $product->img_path) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

    </section>

    <script>
        function filterProducts(filter) {
            const products = document.querySelectorAll('.product-item');

            products.forEach((product) => {
                if (filter === 'all') {
                    product.style.display = 'block';
                } else if (!product.classList.contains(filter)) {
                    product.style.display = 'none';
                } else {
                    product.style.display = 'block';
                }
            });
            document.querySelectorAll('.tabs button').forEach((btn) => btn.classList.remove('active'));
            document.querySelector(`.tabs button[onclick="filterProducts('${filter}')"]`).classList.add('active');
        }
    </script>
@endsection
