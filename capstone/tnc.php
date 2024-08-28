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
       /* Main text styling */
.text-container{
  color: #1E272E;
}

.main-text {
  font-family: 'Exo', sans-serif;
  font-weight: bold;
  font-size: 60px;
  text-align: center;
  margin: 40px 0; /* Adjust margins for spacing */
}



/* Container for centering the content */
.description-container {
  max-width: 76%; /* Adjusted max-width to make it responsive */
  min-height: 480px; /* Set the minimum height */
  position: relative;
  margin: auto;
  margin-top: 20px; /* Adjusted margin-top */
  background-color: #fff;
  border-radius: 12px;
padding: 20px 60px; 
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  font-size: medium;
  overflow-y: auto; /* Enable vertical scroll */
  max-height: 480px; /* Added max-height to trigger scrollbar */
   /* Custom scrollbar */
  
}

/* width */
::-webkit-scrollbar {
  width: 16px;
}

/* Track */
::-webkit-scrollbar-track {

  border-radius: 12px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:  #FFDD6B;
  border-radius: 12px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:  #e0c159;
}


/* Paragraph container styling */
.description-container p {
  margin: 20px 0; /* Adjust margins for spacing */
}

.button {
  font-size: larger;
  margin: 1% auto; /* Adjust margin to center horizontally */
  padding: 10px 16%; /* Adjust padding as needed */
  border-radius: 24px;
  display: block; /* Change display to block */
  width: fit-content; /* Adjust width to fit content */
  text-align: center; /* Center text horizontally */
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
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="services.php#services">SERVICES</a></li>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </header>
    </nav>

    <div class="bg-landing">
        <img src="images/phs-bg-landing.png" alt="phs logo">
    </div>

    <div class="text-container">
    <div class="main-text">Terms and Conditions</div>
    <div class="description-container">
        <p>The iPHS Careers web portal is committed to protecting the privacy of its users in accordance with the Republic Act No. 10173, also known as the Data Privacy Act of 2012 (DPA). This consent form outlines the type of data we collect, how we use it, and your rights as a user.</p>
        <p>Data We Collect:</p>
        <ol>
            <li>Personal Information: This may include your name, student ID number, email address, and any information you provide in your profile (optional).</li>
            <li>Usage Data: This includes information about how you use the platform, such as the careers you explore, assessments you complete (optional), and saved career paths.</li>
            <li>Device Data: This may include information about the device you use to access the platform, such as the operating system and IP address.</li>
        </ol>
        
        <p>How We Use Your Data:</p>
        <p>We use the data we collect to...</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pellentesque diam at ex suscipit dapibus. Nunc ultricies sagittis nisl, ut efficitur purus accumsan in.</p>
        <p>Sed lobortis bibendum justo, ac molestie ipsum rutrum eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer quis nulla quis ex scelerisque mattis.</p>
        <p>Ut viverra semper risus, non sodales lorem dapibus non. In hac habitasse platea dictumst. Cras eu orci mauris. Nulla convallis risus velit, sed lacinia odio finibus ac.</p>
        <p>Morbi nec malesuada nulla. Proin euismod velit non justo vestibulum, vel venenatis purus pharetra. Sed congue ipsum quis eros accumsan, a tempor arcu lacinia.</p>
        <p>Nullam dignissim lorem vitae odio auctor, eget pellentesque lectus dapibus. Nulla facilisi. Aenean malesuada risus in bibendum cursus.</p>
        
        <!-- Repeat content as needed -->
    </div class="button-container">
        <a href="register.php" class="button" id="Confirm">Accept Terms and Conditions</a>
    </div>
</div>
</body>
</html>
