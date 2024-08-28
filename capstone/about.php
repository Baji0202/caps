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
                <li><a href="index.php">HOME</a></li>
                <!-- <li><a href="about.php" >ABOUT</a></li> -->
                <li><a href="services.php#services">SERVICES</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </header>
    </nav>

    <div class="bg-landing">
        <img src="images/phs-bg-landing.png" alt="phs logo">
    </div>

   
</body>
</html>
