@extends('layout.layout')

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Information about TheUnknownName06" />
    <meta name="author" content="TUNBudi06" />
    <title>TheUnknownName06</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x" href="{{asset("aboutme/assets/favicon.ico")}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="{{asset("aboutme/css/styles.css")}}" rel="stylesheet" />
    <style>
        .masthead {
            padding-top: calc(9.4rem + 74px);
            padding-bottom: 6rem;
            position: relative;
            width: 100%;
            height: auto;
            min-height: 35rem;
            background: url("{{ asset('aboutme/assets/img/bg-masthead.jpg') }}") no-repeat scroll center;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <div id="HOME">
        <!-- Masthead-->
        <header class="masthead text-dark text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="{{asset("aboutme/assets/img/fotoku.png")}}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Muhammad Agus Arif Setiyo Budi</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star custom-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">BackEnd Developer - Data Science - IT Enthusiast</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    @foreach($posts as $list)
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="card col" style="width: 18rem;">
                                <img src="{{$list["foto"]}}" class="card-img-top" alt="{{$list["alt-foto"]}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$list["judul"]}}</h5>
                                    <p class="card-text">{{$list["text"]}}</p>
                                    <a href="{{$list["button-link"]}}"  target="_blank" class="btn btn-outline-primary">{{$list["button-text"]}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card col" style="width: 18rem;">
                            <img src="{{asset("aboutme/assets/img/arduino.png")}}" class="card-img-top" alt="IoT Developer Image">
                            <div class="card-body">
                                <h5 class="card-title">Aspiring IoT Developer</h5>
                                <p class="card-text">I'm passionate about entering the exciting world of Internet of Things (IoT). As a beginner, I'm eager to learn and explore the potential of connecting devices and creating innovative IoT solutions that can make our lives more convenient and efficient.</p>
                                <a href="https://docs.arduino.cc/" class="btn btn-outline-primary">Connect on LinkedIn</a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 6 -->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card col" style="width: 18rem;">
                            <img src="{{asset("aboutme/assets/img/electronic.png")}}" class="card-img-top" alt="IoT Developer Image">
                            <div class="card-body">
                                <h5 class="card-title">Electronic Enthusiast and Repairer</h5>
                                <p class="card-text">I'm passionate about the fascinating world of electronics and proud to be an electronic fixer. With a keen interest in troubleshooting and repairing electronic devices, I've honed my skills in diagnosing and fixing various gadgets and appliances. Whether it's reviving an old piece of technology or ensuring your devices work smoothly, I'm here to help!</p>
                                <a href="https://docs.arduino.cc/" class="btn btn-outline-primary">Connect on LinkedIn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core theme JS-->
        <script src="{{asset("aboutme/js/scripts.js")}}"></script>
    </div>
@endsection
