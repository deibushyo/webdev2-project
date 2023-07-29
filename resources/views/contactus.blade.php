<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PetConnect - Contact Us</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

</head>

<body>
    @include('header')

    <style>
        .history-section {
            position: relative;
            height: 50vh;
        }

        .background-image {
            background: url('{{ asset('images/contact-banner.jpg') }}') center/cover no-repeat;
            width: 100%;
            height: 70%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 7%;
            margin-bottom: 0;
        }

        .background-image h1 {
            color: white;
            text-align: left;
            font-size: 2rem;
        }

        .page-links {
            display: flex;
            height: 10%;
            align-items: center;
            justify-content: flex-start;
            padding-left: 7%;
            background-color: black;
        }

        .page-links a,
        .page-links span {
            color: white;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>

    <section id="hero" class="history-section">
        <div class="background-image">
            <h1 class="display-4"><b>CONTACT US</b></h1>
        </div>
        <div class="page-links">
            <a href="{{ route('home') }}">Home</a>
            <span>\</span>
            <span>Contact Us</span>
        </div>
    </section>

    <div class="container mt-4">
        <h1 class="mb-4">Contact Us</h1>
        <p id="contact-info">
            Email us with any questions or inquires or call +63 926-543-5431. We would be happy to answer your questions
            or concerns.
            PetConnect is here to connect with you, hand and paw.
        </p>
        <form action="{{ route('submit_contact_form') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="firstName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter your name" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="Enter your email address" required>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone"
                        placeholder="Enter your phone number" required pattern="[0-9]+" inputmode="numeric">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Concern</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="concern[]" value="Adopt">
                    <label class="form-check-label">Adopt</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="concern[]" value="Rehome">
                    <label class="form-check-label">Rehome</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="concern[]" value="Volunteer">
                    <label class="form-check-label">Volunteer</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="concern[]" value="Inquire">
                    <label class="form-check-label">Inquire</label>
                </div>
                <!-- Add more checkbox options here as needed -->
            </div>

            <div class="mb-3" id="message">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message here"
                    required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    @include('footer')

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>
