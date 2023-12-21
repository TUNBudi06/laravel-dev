@extends("layout.layout")

@section("content")
    <section class="h-100">
        <div class="container h-100 pt-5">
            @if(Session::has('registered'))
                <div class="alert alert-success mt-3">
                    {{ Session::get('registered') }}
                </div>
            @endif
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form method="POST" novalidate="" autocomplete="off" action="{{route("login")}}">
                                @csrf

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">

                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                        @if (Route::has('password.request'))
                                        <a href="{{route("password.request")}}" class="float-end">
                                            Forgot Password?
                                        </a>
                                        @endif
                                    </div>

                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Don't have an account? <a href="{{route("register")}}" class="text-dark">Create One</a>
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
