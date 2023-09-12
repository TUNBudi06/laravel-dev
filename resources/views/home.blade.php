@extends("layout.layout")

@section("head")
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Information about TheUnknownName06" />
    <meta name="author" content="TUNBudi06" />
    <title>TheUnknownName06</title>
    <link rel="stylesheet" href="{{asset("aboutme/css/styles.css")}}">
    <link rel="icon" type="image/x" href="{{asset("aboutme/assets/favicon.ico")}}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <style>
        .padding-top {
            padding-top: 5rem;
        }
    </style>
@endsection

@section("content")
    <!-- Page Content-->
    <div class="container bg-gradient padding-top">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid bg-dark rounded mb-4 mb-lg-0" src="{{asset("img/logo.png")}}" alt="LOGO"/></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">TheUnknownName06</h1>
                <p>TheUnknownName06 is a dynamic IT solutions provider specializing in cutting-edge technologies. Our expertise lies in the realms of backend development and Internet of Things (IoT). We are passionate about crafting efficient and scalable backend systems that power modern applications, as well as harnessing the potential of IoT to create smart and connected solutions.</p>
                <a class="btn btn-primary" href="{{route("contact")}}">Contact US</a>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
                <p class="text-white m-0">If you need assistance or have any questions, please don't hesitate to contact us at:</p>
                <p class="text-white m-0"><strong>Email:</strong> anjaytun2006@gmail.com</p>
                <p class="text-white m-0"><strong>Telegram:</strong> @tunbudi06</p>
            </div>
        </div>
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">ThePakV5</h2>
                        <p class="card-text">ThePakV5 is a powerful tool specifically designed to help you unpack and repack PAK files in PUBG Mobile. With ThePakV5, you can access and edit various in-game elements, including images, sounds, and game configurations. For furthur information you can check thepakv5 telegram</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" target="_blank" href="http://t.me/thepakv5_official"> Thepakv5 official Telegram</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">QuickBMS</h2>
                        <p class="card-text">QuickBMS is a versatile and powerful file extraction and re-packing tool used for a wide range of applications. It is widely recognized for its ability to handle complex file formats and archive types. With QuickBMS, you can efficiently extract and modify game assets, archives, and more, making it an invaluable tool for modders and developers.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="http://quickbms.com">QuickBMS Web</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">YouTube Channel</h2>
                        <p class="card-text">Welcome to my YouTube channel! Here, you'll find a treasure trove of informative and engaging content covering a wide range of interesting topics. From tutorials and reviews to fascinating insights and discussions, my channel is dedicated to sharing valuable information with you.</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" target="_blank" href="{{route("sosmed",["tipe" => "youtube"])}}">Explore Channel</a></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Core theme JS-->
    <script src="{{asset("home-html/js/scripts.js")}}"></script>
@endsection
