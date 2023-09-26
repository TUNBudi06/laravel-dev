{{--@dd($name)--}}
@extends("layout.layout")

@section("head")
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Information about TheUnknownName06" />
    <meta name="author" content="TUNBudi06" />
    <title>TheUnknownName06</title>
    <link rel="icon" type="image/x" href="{{asset("aboutme/assets/favicon.ico")}}" />
    <link rel="stylesheet" href="{{asset("contact-html/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("contact-html/css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("contact-html/css/LineIcons.css")}}">
    <link rel="stylesheet" href="{{asset("contact-html/css/default.css")}}">
    <link rel="stylesheet" href="{{asset("contact-html/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("aboutme/css/styles.css")}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <style>
        .padding-top {
            padding-top: 10rem;
        }
    </style>
@endsection

@section("content")
    <section id="contact" class="padding-top contact-area">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}<br>
                    Name: {{ old('name') }}<br>
                    Email: {{ old('email') }}<br>
                    Message: {{ old('message') }}<br>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">You can contact us anytime. I will reply when I have the time.</p>
                    </div>
                    <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4437.904615642275!2d112.82475081823777!3d-7.712870244334679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7ce3211dd4055%3A0x20fedfd6cd7b3478!2sKedung%20Boto%2C%20Wrati%2C%20Kec.%20Kejayan%2C%20Pasuruan%2C%20Jawa%20Timur%2067172!5e0!3m2!1sid!2sid!4v1694328232974!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Setiaji St, Kuntungan Hamlet,<br> Wrati Village, Pasuruan Regency,<br> East Java 67172</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">anjaytun2006@gmail.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>
{{--                        contact start--}}
                        <form id="contact-form" action="{{route("pFeedback")}}"  method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25 ">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" value="{{old("name")}}">
                                            @error('name')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                            @if ($errors->has('name'))
                                                <i class="@error('name') is-invalid @enderror"></i>
                                            @else
                                                <i class="lni lni-user"></i>
                                            @endif
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" value="{{old("email")}}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            @if ($errors->has('name'))
                                                <i class="@error('name') is-invalid @enderror"></i>
                                            @else
                                                <i class="lni lni-envelope"></i>
                                            @endif
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Massage</label>
                                        <div class="input-items default">
                                            <textarea name="message" value="{{old("message")}}" class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                                            @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            @if ($errors->has('name'))
                                                <i class="@error('name') is-invalid @enderror"></i>
                                            @else
                                                <i class="lni lni-pencil-alt"></i>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button type="submit" class="main-btn light-rounded-two">Send Message</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <script src="{{asset("contact-html/js/jquery-1.12.4.min.js")}}"></script>
    <script src="{{asset("contact-html/js/modernizr-3.7.1.min.js")}}"></script>
    <script src="{{asset("contact-html/js/slick.min.js")}}"></script>
    <script src="{{asset("contact-html/js/popper.min.js")}}"></script>
    <script src="{{asset("contact-html/js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{asset("contact-html/js/main.js")}}"></script>
    <script src="{{asset("contact-html/js/scripts.js")}}"></script>
@endsection
