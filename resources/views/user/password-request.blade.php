@extends("layout.layout")


@section("content")
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="{{ asset("img/logo-navbar.png") }}" alt="logo" width="100">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Forgot Password</h1>
                            <form method="POST" novalidate="" autocomplete="off" action="{{ route("pw-reset") }}">
                                @csrf
                                <div class="mb-3">
                                    @error("email")
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message}}</strong>
                                        </div>
                                    @enderror
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control"  name="email" value="{{ old("email") }}" required autofocus>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto">Next</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Remember your password? <a href="{{ route("login") }}" class="text-dark">Login</a>
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
