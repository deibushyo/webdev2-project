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

    <style>
        .history-section {
            position: relative;
            height: 50vh;
        }

        .background-image {
            background: url('{{ asset('images/cat-about-banner.jpg') }}') center/cover no-repeat;
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

        .dropdown-content {
            display: none;
            background-color: #f9f9f9;
            padding: 10px;
            position: absolute;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>

    <section id="hero" class="history-section">
        <div class="background-image">
            <h1 class="display-4"><b>ABOUT US</b></h1>
        </div>
        <div class="page-links">
            <a href="{{ route('home') }}">Home</a>
            <span>\</span>
            <span>About Us</span>
        </div>
    </section>

    <section class="card">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Our History
            </button>
            <div class="dropdown-menu">
                <p>[Insert plain text for Our History]</p>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                What We Do
            </button>
            <div class="dropdown-menu">
                <p>[Insert plain text for What We Do]</p>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Our Stand
            </button>
            <div class="dropdown-menu">
                <p>[Insert plain text for Our Stand]</p>
            </div>
        </div>
    </section>




    @include('footer')

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>
