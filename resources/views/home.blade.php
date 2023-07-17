<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PetConnect</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

</head>

<body>
    @include('header')

    <section id="hero" class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Find Your Perfect Companion</h1>
            <p class="lead">Adopt a pet and make a difference in their lives.</p>
            <a href="#adopt" class="btn btn-light btn-lg">Adopt Now</a>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, eveniet repudiandae. Consectetur
                        voluptatem soluta, distinctio magnam odio officia aperiam nulla sed ratione reprehenderit?
                        Libero!</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/cat-dog.png') }}" alt="Cat and Dog" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="adopt" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Available Pets</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" alt="Pet" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pet Name</h5>
                            <p class="card-text">Pet Description</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" alt="Pet" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pet Name</h5>
                            <p class="card-text">Pet Description</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" alt="Pet" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Pet Name</h5>
                            <p class="card-text">Pet Description</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>Contact Information</h5>
                    <p>Email: info@example.com</p>
                    <p>Phone: 123-456-7890</p>
                    <p>Address: 123 Main Street, City, Country</p>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>
