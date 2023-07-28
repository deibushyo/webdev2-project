<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PetConnect</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Include jQuery library from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="bg-light">
        @include('header')

        <style>
            h1 {
                text-align: center;
            }

            form {
                max-width: 50%;
                margin: 5% auto;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="email"],
            select,
            textarea {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            textarea {
                resize: vertical;
            }

            select {
                height: 40px;
            }

            input[type="file"] {
                margin: 1%;
            }

            input[type="submit"] {
                width: 17%;
                padding: 10px;
                background-color: var(--Secondary);
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: var(--Primary);
            }
        </style>

        <h1>Adoption Application Form</h1>

        <form action="{{ route('submit_adoption_application') }}" method="post" enctype="multipart/form-data">
            {{-- <form action=""> --}}
            @csrf
            <h3>Part One: Applicant's Information</h3>
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required><br>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required><br>

            <label for="status">Marital Status:</label>
            <select id="status" name="status" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="others">Others</option>
            </select><br>

            <h3>Part Two: Questionnaire</h3>
            <label for="looking_to_adopt">What are you looking to adopt?</label>
            <select id="looking_to_adopt" name="looking_to_adopt" required>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="both">Both</option>
                <option value="not_decided">Not Decided</option>
            </select><br>

            <label for="specific_animal">Are you applying to adopt a specific shelter animal?</label>
            <select id="specific_animal" name="specific_animal" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br>

            <label for="ideal_pet_description">Describe your ideal pet:</label><br>
            <textarea id="ideal_pet_description" name="ideal_pet_description" rows="4" cols="50" required></textarea><br>

            <label for="building_type">Type of Building you live in:</label>
            <select id="building_type" name="building_type" required>
                <option value="house">House</option>
                <option value="condo">Condo</option>
                <option value="apartment">Apartment</option>
                <option value="other">Other</option>
            </select><br>

            <label for="pet_removal">What happens to your pet if you move?</label><br>
            <input type="text" id="pet_removal" name="pet_removal" required><br>

            <label for="living_with">Who do you live with?</label>
            <select id="living_with" name="living_with" required>
                <option value="living_alone">Living Alone</option>
                <option value="spouse">Spouse</option>
                <option value="parents">Parents</option>
                <option value="children_over_18">Children over 18</option>
                <option value="children_below_18">Children below 18</option>
                <option value="relatives">Relatives</option>
                <option value="roommates">Roommate(s)</option>
            </select><br>

            <label for="home_photos">Attach photos of your home:</label><br>
            <span><b>Front of the house</b></span>
            <input type="file" id="front_of_house" name="front_of_house" required><br>
            <span><b>Street photo</b></span>
            <input type="file" id="street_photo" name="street_photo" required><br>
            <span><b>Living room</b></span>
            <input type="file" id="living_room" name="living_room" required><br>

            <label for="visit_shelter">Will you be able to visit the shelter for the meet-and-greet?</label>
            <select id="visit_shelter" name="visit_shelter" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br>

            <input type="submit" value="Submit">
        </form>


        @include('footer')
    </div>
    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>
