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
       body {
    color: #1E272E;
    font-family: 'Roboto', sans-serif;
}

/* Styling for main text */
.main-text {
    font-family: 'Exo', sans-serif; 
    font-weight: bold;
    font-size: 90px;
    margin-top: 2%; /* Adjusted margin-top */
}

/* Container for registration form */
.register-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}

/* Styling for registration form */
.register-form {
    padding: 28px;
    border-radius: 5px;
    text-align: center;
    margin: 0 15%; /* Adjusted margin */
}

/* Styling for email and password input fields */
input[type="email"],
input[type="password"] {
    width: calc(100% - 140px);
    display: inline-block;
    max-width: 100%;
    margin-top: 2%;
    padding: 22px 14px; /* Simplified padding shorthand */
    margin-bottom: 24px;
    border: none;
    border-radius: 16px;
    box-shadow: inset 0 3px 2px 1px rgba(0, 0, 0, 0.2), 0 3px 2px 1px rgba(0, 0, 0, 0.2);
    background-color: #ffffe7;
    font-size: larger;
    color: #121b22;
}

/* Styling for select dropdown */
select {
    width: calc(100% - 140px);
    display: inline-block;
    max-width: 100%;
    margin-top: 2%;
    padding: 22px 14px; /* Simplified padding shorthand */
    margin-bottom: 24px;
    border: none;
    border-radius: 16px;
    box-shadow: inset 0 3px 2px 1px rgba(0, 0, 0, 0.2), 0 3px 2px 1px rgba(0, 0, 0, 0.2);
    background-color: #ffffe7;
    font-size: larger;
    color: #121b22;
    -webkit-appearance: none; /* Removes default arrow in select dropdown */
    -moz-appearance: none; /* Removes default arrow in Firefox */
    appearance: none; /* Removes default arrow in newer browsers */
}

/* Custom dropdown arrow */
select::after {
    content: '\25BC'; /* Unicode for downward arrow */
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    font-size: 18px;
    color: #1E272E;
}

/* Styling for password input when toggle is off */
.password-toggle input {
    width: calc(100% - 140px);
    display: inline-block;
    max-width: 100%;
    margin-top: 2%;
    padding: 22px 14px; /* Simplified padding shorthand */
    margin-bottom: 24px;
    border: none;
    border-radius: 16px;
    box-shadow: inset 0 3px 2px 1px rgba(0, 0, 0, 0.2), 0 3px 2px 1px rgba(0, 0, 0, 0.2);
    background-color: #ffffe7;
    font-size: larger;
    color: #121b22;
}

/* Styling for password toggle icon */
.password-toggle {
    position: relative;
}

.password-toggle .toggle-icon {
    position: absolute;
    right: 78px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 140%;
}

/* Styling for terms and conditions and login links */
#tnc,
#login-now {
    color: #4000FF;
    text-decoration: underline;
    font-size: larger;

}

#tnc:hover,
#login-now:hover {
    color: #2f1187;
}

/* Styling for general buttons */
.button {
    padding: 12px;
    width: 86%;
    border-radius: 30px;
    font-size: larger;
    align-items: center;
}

/* Styling for login and terms and conditions layout */
.login,
.tnc {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-bottom: 2%;
}

/* Spacing for login and terms and conditions links */
.login div,
.tnc div {
    margin-right: 10px;
}

/* bigger label */
#label-login,
#label-tnc {
    font-size: larger;
}


/* remeber-me css */
/* Hide the default checkbox */
#tnc-chk {
    display: none;
    
  }
  
  /* Style for the custom checkbox */
  #tnc-chk + label {
    position: relative;
    padding-left: 34px; /* Set padding to accommodate custom checkbox */
    cursor: pointer;
    font-size: larger;
    margin-right: 10px;
  }
  
  /* Style for the custom checkbox box */
  #tnc-chk + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 20px;
    height: 20px;
    border: 2px solid #1E272E;
    background-color: #ffffe7; /* Set default background color */
    box-shadow: inset 0px 2px 2px 1px rgba(0, 0, 0, 0.3);
    
  }
  
  /* Style for the custom checkmark */
  #tnc-chk + label:after {
    content: '\2714'; /* Unicode checkmark symbol */
    position: absolute;
    left: 4px;
    top: 1px;
    font-size: 16px; /* Adjust font size as needed */
    color: transparent; /* Initially hide the checkmark */
    font-weight: bolder;
  }
  
  /* Style for the custom checkbox when checked */
  #tnc-chk:checked + label:before {
    background-image: linear-gradient(#FFE690, #D9AA02);
    box-shadow: inset 0 2px 2px 1px rgba(0, 0, 0, 0.3);

}
  
  /* Show the checkmark when checkbox is checked */
  #tnc-chk:checked + label:after {
    color: #1E272E; /* Show the checkmark color */
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

    <div class="register-form-container">
        <div class="register-form">
            <div class="main-text">
                Registration
            </div>
     
            <!-- Registration form -->
            <form class="register-form" method="POST" action="" onsubmit="return validatePasswords()">
                
                <input type="email" class="text email-input" placeholder="Email" name="email" required>
                
                <!-- Password input with toggle -->
                <div class="password-toggle">
                    <input type="password" class="text" placeholder="Password" name="password" id="password" required>
                    <span class="toggle-icon" onclick="togglePassword('password', 'eye-icon')">
                        <i class="fas fa-eye" id="eye-icon"></i>
                    </span>
                </div>
            
                <!-- Confirm Password input with toggle -->
                <div class="password-toggle">
                    <input type="password" class="text" placeholder="Confirm Password" name="confirm_password" id="confirm-password" required>
                    <span class="toggle-icon" onclick="togglePassword('confirm-password', 'confirm-eye-icon')">
                        <i class="fas fa-eye" id="confirm-eye-icon"></i>
                    </span>
                </div>
                
                <select name="role" id="role" required>
                    <option value="" disabled selected>Choose your role</option>
                    <option value="Student">I am a Student</option>
                    <option value="University">I am a University</option>
                </select>

                <!-- Terms and Conditions link -->
                <div class="tnc">
                    <input type="checkbox" id="tnc-chk" name="tnc-chk">
                    <label for="tnc-chk">I have read and agreed on the </label>
                    <a href="tnc.php" id="tnc" class="links">Terms and Conditions</a>
                </div>
     
                <!-- Submit button -->
                <div class="button-container">
                    <input class="button" type="submit" name="submit" value="Verify & Proceed">
                </div>
            </form>

            <!-- Login link -->
            <div class="login">
                <div id="label-login">Already have an account?</div>
                <a href="login.php" id="login-now">Log in here</a>
            </div>
            <div id="password-message" style="color: red; display: none;">Passwords do not match</div>
                
        </div>
    </div>

    <!-- Font Awesome for eye icon toggle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        function validatePasswords() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const message = document.getElementById('password-message');

            if (password !== confirmPassword) {
                message.style.display = 'block';
                alert("Passwords do not match! Please try again.");
                return false;
            } else {
                message.style.display = 'none';
                return true;
            }
        }

        function togglePassword(inputId, iconId) {
            var passwordField = document.getElementById(inputId);
            var eyeIcon = document.getElementById(iconId);
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
