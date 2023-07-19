<header>
    <style>
        /* Internal CSS style */
        nav {
            background-color: var(--Primary);
        }

        .navbar-brand,
        .nav-link {
            color: white;
        }

        /* Hover styles for navbar elements */
        .navbar-brand:hover,
        .nav-link:hover {
            color: var(--Text);
        }
    </style>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">PetConnect</a>
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
