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

        .accordion-container {
            width: 90%;
            margin: 0 auto;
            margin-bottom: 50px;
        }

        .accordion-header {
            background-color: var(--Background);
            color: var(--Text);
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.7s ease;
        }

        .accordion-header:hover {
            background-color: var(--Secondary);
        }

        .accordion-body {
            background-color: white;
            color: black;
            padding: 10px 30px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .accordion-button.collapsed {
            background-color: var(--Background);
            color: var(--Text);
        }

        .accordion-item {
            margin-bottom: 3px;
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

    <div class="accordion-container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Our History
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        PetConnect was founded in 2005 with a mission to connect abandoned animals with loving homes and
                        provide a platform for efficient animal shelter management. Over the years, we have helped
                        countless animals find their perfect companions and supported animal shelters in their
                        operations.

                        Starting as a small initiative, PetConnect grew rapidly as more individuals and organizations
                        recognized the importance of pet adoption and animal welfare. We collaborated with various
                        animal shelters, vet clinics, and volunteers to create a comprehensive online platform that
                        streamlines the adoption process, facilitates lost and found reunions, and promotes community
                        engagement.

                        Our dedicated team of animal lovers and professionals work tirelessly to ensure the well-being
                        of every animal in our care. We prioritize their health, safety, and happiness, and strive to
                        create a supportive and inclusive community for pet owners and animal enthusiasts.

                        Today, PetConnect is a leading name in the pet adoption industry, known for our commitment to
                        finding forever homes for abandoned animals and promoting responsible pet ownership. We continue
                        to innovate and expand our services, leveraging technology to make the adoption process easier
                        and more accessible.

                        Join us in our mission to make a difference in the lives of animals. Adopt, volunteer, donate,
                        and be a part of the PetConnect family!
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What We Do
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        At PetConnect, we are dedicated to making a positive impact on the lives of animals and the
                        communities they belong to. Our comprehensive range of services and initiatives aims to address
                        the various needs of both animals and animal lovers. Here's an overview of what we do:

                        Pet Adoption: We connect abandoned animals with loving homes by providing a user-friendly
                        platform for pet adoption. Our database features profiles of animals available for adoption,
                        complete with detailed information about their breed, age, temperament, and medical history.

                        Shelter Management: We offer tools and resources for animal shelters to efficiently manage their
                        operations. This includes tracking animal intake, medical records, vaccinations, spay/neuter
                        status, and adoption histories. We strive to streamline processes and improve the overall
                        management of animal shelters.

                        Lost and Found: Our platform facilitates the reporting of lost or found animals, helping reunite
                        owners with their beloved pets. We provide a centralized system for posting lost or found pet
                        notices, increasing the chances of successful reunions.

                        Community Engagement: We foster a community of pet lovers, allowing users to create profiles,
                        share adoption success stories, and participate in discussions and forums. This promotes
                        awareness, education, and collaboration among individuals passionate about animal welfare.

                        Volunteer Management: We offer features for managing volunteer registration, scheduling, and
                        assignments within animal shelters. Volunteers play a crucial role in providing care and support
                        to animals, and we strive to make the volunteering experience rewarding and organized.

                        Donation and Fundraising: We facilitate online donations to animal shelters and promote
                        fundraising campaigns to support their operations and animal welfare initiatives. Every
                        contribution goes a long way in providing essential care, medical treatment, and resources for
                        animals in need.

                        Events and Workshops: We organize and promote events and workshops related to pet care,
                        training, and awareness programs. These events aim to educate pet owners, promote responsible
                        pet ownership, and provide valuable information on animal welfare.

                        At PetConnect, our mission is to create a world where every animal has a loving home and
                        receives the care they deserve. We continuously strive to improve our services, expand our
                        reach, and advocate for the well-being of animals everywhere.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Our Stand
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        At PetConnect, we are committed to advocating for the welfare and well-being of animals. Our
                        stand is rooted in a strong belief that every animal deserves love, care, and protection. Here's
                        what we stand for:

                        Animal Rights: We believe in upholding the fundamental rights of animals and promoting their
                        humane treatment. We advocate against cruelty, neglect, and exploitation of animals in all
                        forms. Our aim is to create a society that values and respects the inherent worth of every
                        living creature.

                        Responsible Pet Ownership: We emphasize the importance of responsible pet ownership. This
                        includes providing proper nutrition, veterinary care, and a safe environment for pets. We
                        educate pet owners on the significance of spaying/neutering, regular vaccinations, and training
                        to ensure the well-being of both the animals and the community.

                        Adoption over Buying: We promote adoption as the preferred method of acquiring a pet. Our focus
                        is on finding loving homes for abandoned animals and reducing the demand for pet breeding and
                        selling. We encourage individuals to consider adopting from shelters and rescue organizations to
                        give a second chance to animals in need.

                        Education and Awareness: We strive to educate the public about various aspects of animal
                        welfare, including responsible pet ownership, animal behavior, and the importance of compassion
                        towards all living beings. Through workshops, seminars, and online resources, we empower
                        individuals with knowledge to make informed decisions and contribute to the well-being of
                        animals.

                        Collaboration and Support: We actively collaborate with animal shelters, rescue groups,
                        veterinary professionals, and like-minded organizations to strengthen our collective efforts. By
                        working together, we can achieve more significant impact and create lasting change for animals.
                        We provide support and resources to those working in the field of animal welfare.

                        Legislative Advocacy: We advocate for strong animal protection laws and policies at local,
                        regional, and national levels. We engage in lobbying efforts, support initiatives, and work with
                        policymakers to enact legislation that safeguards animals from abuse and promotes their welfare.

                        Compassionate Communities: We strive to build compassionate communities where animals are valued
                        and cared for. Through community engagement programs, we encourage empathy, kindness, and
                        responsible behavior towards animals. We believe that by nurturing compassion, we can create a
                        more harmonious and compassionate world for both humans and animals.

                        At PetConnect, we stand firmly in our commitment to creating a better future for animals. We
                        work tirelessly to raise awareness, drive positive change, and provide a voice for those who
                        cannot speak for themselves. Together, we can make a difference and create a world where animals
                        are treated with the love, respect, and compassion they deserve.
                    </div>
                </div>
            </div>
        </div>
    </div>




    @include('footer')

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>
