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

    <div class="container mt-4">
        <h1 class="mb-4">Contact Us</h1>
        {{-- <form action="{{ route('submit_contact_form') }}" method="POST"> --}}
        @csrf

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName"
                    placeholder="Enter your first name" required>
            </div>
            <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName"
                    placeholder="Enter your last name" required>
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
                <input class="form-check-input" type="checkbox" name="concern[]" value="Spay">
                <label class="form-check-label">Spay</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="concern[]" value="Adopt">
                <label class="form-check-label">Adopt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="concern[]" value="Neglect">
                <label class="form-check-label">Neglect</label>
            </div>
            <!-- Add more checkbox options here as needed -->
        </div>

        <div class="mb-3">
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
