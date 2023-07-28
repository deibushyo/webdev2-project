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
    @include('header')


    <style>
        /* Internal CSS style for the FAQ section */
        #faq {
            /* Add a line on top of the section
            border-radius: 20px;*/
            /* Rounded background */
            color: var(--Text);
            /* Set text color to white */
        }

        #faq h2 {
            text-align: center;
            margin-bottom: 30px;
            border-top: 3px solid var(--Primary);
            border-radius: 0 0 17px 17px;
        }

        .faq-item {
            border: 1px solid var(--Secondary);
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .faq-item h3 {
            color: #333;
        }

        .faq-item p {
            color: #666;
        }

        .filter-btn.active {
            background-color: var(--Background);
            color: var(--Text);
        }

        .custom-image-size {
            width: 100%;
            /* You can adjust the width as needed */
            height: 100%;
            /* You can adjust the height as needed */
            object-fit: cover;
            /* Zoom the image to cover the entire container */
        }

        .rounded-image {
            border-radius: 50%;
            /* Make the image circular */
        }

        /* Add a custom class for centering text */
        .centered-text {
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            flex-direction: column;
            /* Stack text on top of the image */
            height: 100%;
            /* Ensure the container takes the full height of the column */
        }
    </style>

    <!-- New Section -->
    <section id="new-section" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- First Column -->
                <div class="col-md-6 section-content">
                    <h2>Adopt a Shelter Cat or Dog</h2>
                    <p>Our adoptable cats and dogs are all spayed/neutered &#40;kapon&#41; and vaccinated. Because they
                        lived a difficult life before being rescued, we need to be sure that they get adopted by loving
                        humans and won&apos;t be subjected to further cruelty or neglect. Here&apos;s how to apply:</p>
                    <!-- First SVG icon and text -->
                    <div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor"
                                class="bi bi-file-earmark" viewBox="0 0 16 16">
                                <path
                                    d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                            </svg>
                            <!-- First text -->
                            <span class="mr-2">Submit the adoption application form</span>
                        </div>
                        <!-- Second SVG icon and text -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor"
                                class="bi bi-camera-video" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                            </svg>
                            <!-- Second text -->
                            <span class="mr-2">Attend the Zoom interview</span>
                        </div>
                        <!-- Third SVG icon and text -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                            </svg>
                            <!-- Third text -->
                            <span class="mr-2">Meet our shelter animals in person</span>
                        </div>
                        <!-- Fourth SVG icon and text -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z" />
                            </svg>
                            <!-- Fourth text -->
                            <span class="mr-2">Visit your chosen pet to confirm your choice</span>
                        </div>
                        <!-- Fifth SVG icon and text -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-card-checklist" viewBox="0 0 16 16">
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                <path
                                    d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                            </svg>
                            <!-- Fifth text -->
                            <span class="mr-2">Wait for vet clearance and schedule pick up</span>
                        </div>
                        <!-- Sixth SVG icon and text -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                <path
                                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                            </svg>
                            <!-- Sixth text -->
                            <span class="mr-2">Pay the adoption fee</span>
                        </div>
                        <!-- Seventh SVG icon and text -->
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-check" viewBox="0 0 16 16">
                                <path
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z" />
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.707l.547.547 1.17-1.951a.5.5 0 1 1 .858.514Z" />
                            </svg>
                            <!-- Seventh text -->
                            <span class="mr-2">Take your pet home!</span>
                        </div>
                        <div style="margin-top: 10px">
                            <a href="{{ route('adoption') }}" class="btn btn-dark btn-block">Apply Now</a>
                            <a href="#faq" class="btn btn-outline-dark btn-block">Adoption FAQ</a>
                        </div>
                    </div>
                </div>

                <!-- Second Column -->
                <div class="col-md-2">
                    <div class="centered-text">
                        <img src="{{ asset('images/pets/C06-deputy.jpeg') }}" alt="Adoptable Cat"
                            class="img-fluid custom-image-size rounded-image">
                        <p><b>PLEASE</b></p>
                    </div>
                </div>
                <!-- Third Column -->
                <div class="col-md-2">
                    <div class="centered-text">
                        <img src="{{ asset('images/pets/D06-banoi.jpg') }}" alt="Adoptable Dog"
                            class="img-fluid custom-image-size rounded-image">
                        <p><b>ADOPT</b></p>
                    </div>
                </div>
                <!-- Fourth Column -->
                <div class="col-md-2">
                    <div class="centered-text">
                        <img src="{{ asset('images/pets/C07-shadow.jpg') }}" alt="Adoptable Cat"
                            class="img-fluid custom-image-size rounded-image">
                        <p><b>US</b></p>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="adopt" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Available Pets</h2>

            <!-- Buttons for filtering pets -->
            <div class="text-center mb-4">
                <button class="btn btn-outline-dark mx-2 filter-btn" data-filter="all">ALL</button>
                <button class="btn btn-outline-dark mx-2 filter-btn" data-filter="Cat">CATS</button>
                <button class="btn btn-outline-dark mx-2 filter-btn" data-filter="Dog">DOGS</button>
            </div>

            <!-- Pet cards -->
            <div class="row" id="pet-cards">
                <!-- Pet cards will be populated dynamically using JavaScript -->
            </div>
        </div>
    </section>





    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">Pet Adoption FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="faq-item">
                        <h3>How can I adopt?</h3>
                        <p>Applicants go through a screening process to ensure that our rescued animals go to loving
                            homes. The process includes an online interview via Zoom and at least two &#40;2&#41;
                            separate shelter visits to meet and get to know your chosen pet</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can you adopt my pet?</h3>
                        <p>PetConnect does NOT adopt owned pets. We already have 300+ shelter animals rescued from
                            cruelty and neglect that are waiting to be adopted. If you need to give up your pet for some
                            reason, please consider other options or apply for rehoming assistance.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Why is there an adoption fee?</h3>
                        <p>The adoption fee is a token of your commitment and and a demonstration of your financial
                            capacity to care for a pet. It is a small price which already covers your pet&apos;s
                            spay/neuter surgery, vaccinations, tick, and flea treatment.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can my adoption application get denied?</h3>
                        <p>Yes. Some reasons for denied applications include: Not being able to keep their pet indoors,
                            incompatibility with the household, plus other circumstances that may be damaging to the
                            health, safety, and happiness of our shelter animals.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item">
                        <h3>I live in the province/abroad. Can I still adopt?</h3>
                        <p>Yes, but special arrangements need to be made for the meet-and-greet, depending on your
                            location. Please contact us to discuss your options. You may also opt to adopt from your
                            local pound instead.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do you have purebred cats or dogs?</h3>
                        <p>It is very rare that purebred cats or dogs are admitted to the shelter. Sadly, they are
                            valued more than aspins and puspins who are equally deserving of a home. Please consider
                            adopting a local breed instead.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do you have puppies or kittens for adoption?</h3>
                        <p>Puppies and kittens are only available for fostering for up to 6 months, or until they are
                            vaccinated and neutered. Fostered puppies and kittens may be permanently adopted after this
                            period if the fosterer passes the adoption application.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I adopt more than one pet?</h3>
                        <p>Some applicants may be approved to adopt more than one pet on a case to case basis, but
                            especially if the animal you wish to adopt belongs to a bonded pair.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I return my adopted pet if I change my mind?</h3>
                        <p>A pet is a lifetime commitment. However, if you truly can&apos;t keep your adopted pet,
                            please don&apos;t abandon them on the streets or with strangers. Please return them to us so
                            we can find another home for them.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            // Initial filter setting
            let currentFilter = "all";

            // Function to filter pet cards based on the selected category
            function filterPets(category) {
                $(".pet-card").hide();
                if (category === "all") {
                    $(".pet-card").show();
                } else {
                    $(`.pet-card[data-category='${category}']`).show();
                }
            }

            // Function to fetch pets data from the database using Ajax
            function fetchPetsData() {
                $.ajax({
                    url: "{{ route('get_pets_data') }}",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // Clear existing pet cards
                        $("#pet-cards").empty();

                        // Loop through the data and generate pet cards
                        $.each(data, function(index, pet) {
                            let petCard = `
                            <div class="col-md-4 mb-4 pet-card" data-category="${pet.petCategory}">
                                <div class="card">
                                    <img src="{{ asset('images/pets/${pet.petImage}') }}" alt="Pet" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">${pet.petName}</h5>
                                        <p class="card-text"><b>Age:</b> Approximately ${pet.petAge} years old </p>
                                        <p class="card-text"><b>Sex:</b> ${pet.petSex}</p>
                                        <p class="card-text"><b>Story:</b></p>
                                        <p class="card-text">${pet.petDescription}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                            $("#pet-cards").append(petCard);
                        });

                        // Apply the current filter
                        filterPets(currentFilter);
                    },
                    error: function(error) {
                        console.error("Error fetching pets data:", error);
                    }
                });
            }

            // Fetch pets data on page load
            fetchPetsData();

            // Handle button clicks
            $(".filter-btn").click(function() {
                const category = $(this).data("filter");
                currentFilter = category;
                filterPets(category);
            });

        });
    </script>





    @include('footer')

    <!-- Bootstrap JavaScript -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>

</body>

</html>
