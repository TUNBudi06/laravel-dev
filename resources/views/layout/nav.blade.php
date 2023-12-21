<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset("img/logo.png") }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            TheUnknownName06
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link rounded {{ request()->url() === route("home") ? "active" : ""  }}" href="{{route("home")}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded {{ request()->url() === route("aboutme")  ? "active" : ""  }}" href="{{route("aboutme")}}">About ME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded {{ request()->url() === route("contact")  ? "active" : ""  }}" href="{{route("contact")}}">Contact</a>
                @if(!auth()->check())
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->url() == route("login")) ? "active" : ""}}" href="{{route("login")}}">Login</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @php
                                // Extracting and displaying the last name
                                $nameParts = explode(' ', auth()->user()->name);
                                $lastName = end($nameParts);
                                echo $lastName;
                            @endphp
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route("komentar.index")}}"><small>Komentar</small></a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route("logout")}}">Logout</a></li>
                        </ul>
                    </li>
                    @endif
            </ul>
        </div>
    </div>
</nav>
