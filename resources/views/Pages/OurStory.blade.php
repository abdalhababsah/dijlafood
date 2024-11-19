@extends('layout.mainLayout')

@section('content')
    <style>
        .service-tab {
            padding: 50px 0;
        }

        .service-tab .tabs-left {
            border: none;
        }

        .service-tab .tabs-left li {
            float: none;
            margin-bottom: 10px;
        }

        .service-tab .tabs-left li a {
            display: block;
            text-align: left;
            border: 1px solid #ddd;
            padding: 15px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
        }

        .service-tab .tabs-left li.active a {
            background-color: #233295;
            color: #fff;
            border-color: #233295;
        }

        .service-tab .tabs-left li a:hover {
            background-color: #f5f5f5;
        }

        .service-tab .tab-pane {
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .service-tab .tab-pane img {
            max-width: 100%;
            margin-bottom: 15px;
        }

        .service-tab .tab-pane video {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .service-tab .tab-pane h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .service-tab .tab-pane p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .service-tab .tab-pane .btn {
            background-color: #233295;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .service-tab .tab-pane .btn:hover {
            background-color: #1a2478;
        }

        .nav-tabs.tabs-left {
            display: flex;
            flex-direction: column;
            margin-right: 20px;
        }

        .nav-tabs.tabs-left .nav-item {
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .nav-tabs.tabs-left {
                flex-direction: row;
                flex-wrap: wrap;
                margin-right: 0;
            }

            .nav-tabs.tabs-left .nav-item {
                flex: 1 1 50%;
            }

            .nav-tabs.tabs-left li a {
                text-align: center;
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

    <section class="service-tab section-block">
        <div class="container">
            
            <div class="title-block">
                <h2>Service</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore mollit anim id est laborum.
                </p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <ul class="nav nav-tabs tabs-left">
                        <li class="nav-item active">
                            <a href="#item-01" data-toggle="tab" class="nav-link">
                                <i class="pe-7s-display1"></i>Corporate Identity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#item-02" data-toggle="tab" class="nav-link">
                                <i class="pe-7s-compass"></i>Consultancy
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#item-03" data-toggle="tab" class="nav-link">
                                <i class="pe-7s-bicycle"></i>Data Analytics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#item-04" data-toggle="tab" class="nav-link">
                                <i class="pe-7s-musiclist"></i>Web Hosting
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="tab-content">
                        <div class="tab-pane active" id="item-01">
                            <video controls>
                                <source src="http://via.placeholder.com/1280x964" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <h3>Corporate Identity</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="tab-pane" id="item-02">
                            <video controls>
                                <source src="http://via.placeholder.com/1280x964" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <h3>Business Consultancy</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="tab-pane" id="item-03">
                            <video controls>
                                <source src="http://via.placeholder.com/1280x964" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <h3>Data Analytics</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="tab-pane" id="item-04">
                            <video controls>
                                <source src="http://via.placeholder.com/1280x964" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <h3>Web Hosting</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Enable tab navigation
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.nav-tabs .nav-link');
            const panes = document.querySelectorAll('.tab-pane');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', (e) => {
                    e.preventDefault();

                    // Remove active classes
                    tabs.forEach(t => t.parentElement.classList.remove('active'));
                    panes.forEach(p => p.classList.remove('active'));

                    // Activate clicked tab and corresponding pane
                    tab.parentElement.classList.add('active');
                    panes[index].classList.add('active');
                });
            });
        });
    </script>
@endsection