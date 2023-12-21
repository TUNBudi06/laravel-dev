@extends("layout.layout")

@section("content")
    <section class="h-100">
        <div class="container h-100">
            @if(Session::has('registered'))
                <div class="alert alert-success mt-3">
                    {{ Session::get('registered') }}
                </div>
            @endif
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="{{asset("img/logo-navbar.png")}}" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Password Request</h1>
                            <form method="POST" novalidate="" autocomplete="off" action="{{route("pw-view",$id)}}">
                                @csrf

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="pwFirst">Old Password</label>
                                    <input id="pwFirst"  class="form-control" name="pwFirst" value="" required autofocus>
                                    @error('pwFirst')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="pwSecond">New Password</label>
                                    </div>

                                    <input id="pwSecond" class="form-control" name="pwSecond" required>
                                    @error('pwSecond')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                have an account? <a href="{{route("login")}}" class="text-dark">Login here</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; 2013-2024 &mdash; BananaRoll
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
