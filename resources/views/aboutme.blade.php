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
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card col" style="width: 18rem;">
                            <img src="{{asset("aboutme/assets/img/python.png")}}" class="card-img-top" alt="Python Developer Image">
                            <div class="card-body">
                                <h5 class="card-title">Experienced Python Developer</h5>
                                <p class="card-text">I specialize in the art of Python development, crafting powerful and versatile applications. My experience spans the realm of Python, and I'm here to take your projects to the next level.</p>
                                <a href="https://docs.python.org/3/"  target="_blank" class="btn btn-outline-primary">Explore Python Docs</a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card col" style="width: 18rem;">
                            <img src="{{asset("aboutme/assets/img/cpp.png")}}" class="card-img-top" alt="C/C++ Developer Image">
                            <div class="card-body">
                                <h5 class="card-title">Seasoned C/C++ Developer</h5>
                                <p class="card-text">With a wealth of experience in C and C++ development, I bring precision and efficiency to every project. My expertise spans from optimizing code to crafting robust applications.</p>
                                <a href="{{ route("sosmed",[ 'tipe' => 'github']) }}" class="btn btn-outline-primary">Explore My Github</a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card col" style="width: 18rem;">
                            <img src="{{asset("aboutme/assets/img/IT-komputer.png")}}" class="card-img-top" alt="IT and Computer Expertise">
                            <div class="card-body">
                                <h5 class="card-title">Backend Developer & IT Enthusiast</h5>
                                <p class="card-text">I'm not just a Backend Developer; I'm also your go-to expert for server management, computer assembly, and troubleshooting. Whether it's crafting efficient code or assembling the perfect computer setup, I've got you covered.</p>
                                <a href="{{ route("sosmed",[ 'tipe' => 'instagram']) }}" class="btn btn-outline-primary">Explore My Instagram</a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card col" style="width: 18rem;">
                            <img src="{{asset("aboutme/assets/img/android.png")}}" class="card-img-top" alt="IT and Computer Expertise">
                            <div class="card-body">
                                <h5 class="card-title">Experienced Android Modder and Opreker</h5>
                                <p class="card-text">I'm not just a Backend Developer; I'm also an Android enthusiast with over 7 years of experience in modding and tweaking Android devices. My passion lies in unlocking the full potential of Android, fixing and enhancing smartphones to meet your unique needs.</p>
                                <a href="{{ route("sosmed",[ 'tipe' => 'telegram']) }}" class="btn btn-outline-primary">Explore My Telegram</a>
                            </div>
                        </div>
                    </div>
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
