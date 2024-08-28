<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPHS Careers</title>
    <link rel="icon" href="images/phs-logo.png" type="image/x-icon"/>
    <!-- CSS -->
    <link rel="stylesheet" href="include/css/styles-landing.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 90%; /* Adjusted max-width to make it responsive */
            position: relative;
            margin: auto;
            padding-left: 6%;
            padding-right: 6%;
            margin-top: 3.5%; /* Moved from .main-text to adjust for responsiveness */
            padding-bottom: 60px; /* Added padding to ensure space for button */
        }

        .main-text {
            font-family: 'Exo', sans-serif; 
            font-weight: bold;
            font-size: 90px;
            margin-top: 4.4%;
            margin-bottom: 3%;
        }

        .sub-text {
            font-family: 'Roboto Slab', sans-serif;
            font-size: 44px;
        }

        .mySlides {
            opacity: 0;
            transition: opacity 1s ease-in-out; /* Smooth fade transition */
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .fade-in {
            opacity: 1;
        }

        /* Button Styling */
        .button {
            display: block;
            width: 200px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin: 0 auto; /* Center horizontally */
            position: relative;
            bottom: 0;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Ensure the button is positioned at the bottom */
        .button-container {
            text-align: center;
            margin-top: 20px; /* Space above the button */
        }
    </style>
</head>
<body>
    <nav>
        <header>
            <div class="logo">
                <a href="">
                    <img src="images\phs-logo.png" alt="phs logo">
                </a>
                <div class="text_logo">
                    iPHS Careers
                </div>
            </div>
            <ul>
                <!-- <li><a href="index.php">HOME</a></li> -->
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="services.php#services">SERVICES</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </header>
    </nav>

    <div class="bg-landing">
        <img src="images/phs-bg-landing.png" alt="phs logo">
    </div>

    <div class="slideshow-container">
        <!-- Each profession's message as a slide -->
        <div class="mySlides fade-in">
            <div class="main-text">Lawyers</div>
            <div class="sub-text">
                Welcome, future justice seekers, to a path where words are your weapon. Here, logic reigns and truth you'll glean, a champion's heart, a voice that's keen. So step inside, and let your fire ignite, for justice served is a glorious sight.
            </div>
        </div>
        <div class="mySlides fade-in">
            <div class="main-text">Lawyers</div>
            <div class="sub-text">
                Welcome, future justice seekers, to a path where words are your weapon. Here, logic reigns and truth you'll glean, a champion's heart, a voice that's keen. So step inside, and let your fire ignite, for justice served is a glorious sight.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Doctors</div>
            <div class="sub-text">
                Welcome, future healers, to a journey where compassion meets precision. Here, every heartbeat is your guide, and every life a story you help write. So don your white coat and let your hands work wonders, for a life saved is a legacy of greatness.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Engineers</div>
            <div class="sub-text">
                Welcome, future builders of tomorrow, to a realm where innovation knows no bounds. Here, every blueprint is a promise, and every structure a testament to your skill. So step forward, let your creativity soar, for a world designed by you is a masterpiece in the making.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Teachers</div>
            <div class="sub-text">
                Welcome, future educators, to the sacred ground where minds are molded. Here, wisdom is your craft, and knowledge your gift to bestow. So embrace your calling, let your passion shine, for a future shaped by your hands is a future bright and bold.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Accountants</div>
            <div class="sub-text">
                Welcome, future guardians of numbers, to the balance sheet where precision prevails. Here, integrity is your compass, and accuracy your guide. So take your seat, let your diligence lead, for every calculation you master brings clarity to the world.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Nurses</div>
            <div class="sub-text">
                Welcome, future caretakers of the heart, to a vocation where empathy meets expertise. Here, every patient is a testament to your dedication, and every smile a reward for your care. So don your scrubs, let your kindness flow, for a life touched by you is a life forever changed.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Architects</div>
            <div class="sub-text">
                Welcome, future visionaries, to a canvas where imagination becomes reality. Here, every line you draw is a step towards beauty, and every structure a blend of form and function. So pick up your tools, let your ideas take flight, for a world designed by you is a world redefined.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Journalists</div>
            <div class="sub-text">
                Welcome, future truth-tellers, to the frontline where stories unfold. Here, words are your power, and the truth your guiding light. So grab your pen, let your voice be heard, for in every story you tell, the world finds its reflection.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">Entrepreneurs</div>
            <div class="sub-text">
                Welcome, future pioneers of industry, to the crossroads of innovation and ambition. Here, every risk is an opportunity, and every idea a spark of potential. So take the leap, let your vision lead, for a business built by you is a dream realized.
            </div>
        </div>
        <div class="mySlides">
            <div class="main-text">IT Professionals</div>
            <div class="sub-text">
                Welcome, future masters of the digital realm, to the forefront of technology's evolution. Here, code is your language, and innovation your pursuit. So power up, let your creativity thrive, for the future you design will connect the world.
            </div>
        </div>
    </div>

    <!-- Button container -->
    <div class="button-container">
        <button class="button" onclick="location.href='login.php';">Get Started</button>
    </div>

    <script>
        // Array of slide elements
        const slides = document.querySelectorAll('.mySlides');
        let currentSlideIndex = 0;

        function showNextSlide() {
            // Hide the current slide
            slides[currentSlideIndex].classList.remove('fade-in');

            // Calculate the next slide index
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;

            // Show the next slide after a brief delay (matching the fade duration)
            setTimeout(() => {
                slides[currentSlideIndex].classList.add('fade-in');
            }, 1000); // 1 second for the fade-out transition
        }

        // Start the slideshow with an interval of 5 seconds
        setInterval(showNextSlide, 5000);
    </script>
</body>
</html>
