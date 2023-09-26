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
                </li>
            </ul>
        </div>
    </div>
</nav>