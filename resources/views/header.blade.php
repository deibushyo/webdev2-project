<header>
    <style>
        /* Internal CSS style */
        nav {
            background-color: var(--Primary);
        }

        .navbar-brand img {
            /* Set the desired width and height for the logo */
            width: 70px;
            height: auto; /* Adjust height proportionally */
        }

        .navbar-brand,
        .nav-link {
            color: white;
            font-size: 27px; /* Set the desired font size in pixels (example: 18px) */
        }

        /* Hover styles for navbar elements */
        .navbar-brand:hover,
        .nav-link:hover {
            color: var(--Text);
        }
    </style>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Replace <a> with <img> -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="PetConnect Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#adopt">ADOPT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
