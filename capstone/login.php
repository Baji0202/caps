<?php
require_once 'user.php';

$user = new User($pdoConnect);
$message = '';

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    // $rememberMe = isset($_POST['remember_me']);
echo $email,$password;
    $user->login($email, $password);
} else {
    echo 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPHS Careers</title>
    <link rel="icon" href="images/phs-logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="include/css/styles-landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<style>
    /* Log In */

body {
    color: #1E272E;
    font-family: 'Roboto', sans-serif;

}

/* label for login */
.main-text {
    font-family: 'Exo', sans-serif; 
    font-weight: bold;
    margin-top: 0; /* Removed margin-top from here */
    font-size: 90px;
    margin-top: 4.4%; /* Removed margin-top from here */
    margin-bottom: 3%;
}



.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}


.login-form {
    padding: 28px;
    border-radius: 5px;
    text-align: center;
    margin-left: 15%;
    margin-right: 15%;
}

/* form texts */

input[type="email"],
input[type="password"] {
    width: calc(100% - 140px);
    display: inline-block;
    max-width: 100%;
    margin-top: 2%;
    padding-inline: 14px;
    padding-block: 22px;
    margin-bottom: 24px;
    border: none;
    border-radius: 16px;
    box-shadow: inset 0 3px 2px 1px rgba(0, 0, 0, 0.2), 0 3px 2px 1px rgba(0, 0, 0, 0.2);
    background-color: #ffffe7;
    font-size: larger;
    color: #121b22;;
}

/* eto yung kapag naka off yung mata sa pass */
.password-toggle input {
    width: calc(100% - 140px);
    display: inline-block;
    max-width: 100%;
    margin-top: 2%;
    padding-inline: 14px;
    padding-block: 22px;
    margin-bottom: 24px;
    border: none;
    border-radius: 16px;
    box-shadow: inset 0 3px 2px 1px rgba(0, 0, 0, 0.2), 0 3px 2px 1px rgba(0, 0, 0, 0.2);
    background-color: #ffffe7;
    font-size: larger;
    color: #121b22;;
}

/* autofill form css */
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
  transition: background-color 5000s;
  -webkit-text-fill-color: #fff !important;
  -webkit-text-fill-color:  #121b22 !important;
}

/* icon = eye for password */
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

/* Horizontal layout for Remember me and Forgot password */
.horizontal-layout {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Adjust spacing between elements */
    margin-top: 1%; /* Margin bottom adjusted */
    margin-bottom: 3%; /* Margin bottom adjusted */
    margin-right: 8%;
    margin-left: 8%;
}


.horizontal-layout .remeber-me {
    margin-right: auto; /* Adjust this value as needed */
}

.horizontal-layout .forgot-pass {
    margin-left: auto; /* Push "Forgot password" link to the right */
    font-weight: normal; /* Remove bold */
    padding-top: 2px;

}

#label-reg,
#forgot-pass,
#register-now{
    font-size: larger;
}


#forgot-pass,
#register-now{
    color: #4000FF;
    text-decoration: underline;
    font-size: larger;
}

#forgot-pass:hover,
#register-now:hover {
    color: #2f1187;
}
/* submit button */
.button {
    padding: 12px ;
    width:86%;
    border-radius: 30px;
    font-size: larger;
}
/* remeber-me css */
/* Hide the default checkbox */
#rememberMe {
    display: none;
    
  }
  
  /* Style for the custom checkbox */
  #rememberMe + label {
    position: relative;
    padding-left: 34px; /* Set padding to accommodate custom checkbox */
    cursor: pointer;
    font-size: larger;
  }
  
  /* Style for the custom checkbox box */
  #rememberMe + label:before {
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
  #rememberMe + label:after {
    content: '\2714'; /* Unicode checkmark symbol */
    position: absolute;
    left: 4px;
    top: 1px;
    font-size: 16px; /* Adjust font size as needed */
    color: transparent; /* Initially hide the checkmark */
    font-weight: bolder;
  }
  
  /* Style for the custom checkbox when checked */
  #rememberMe:checked + label:before {
    background-image: linear-gradient(#FFE690, #D9AA02);
    box-shadow: inset 0 2px 2px 1px rgba(0, 0, 0, 0.3);

}
  /* Show the checkmark when checkbox is checked */
#rememberMe:checked + label:after {
    color: #1E272E; /* Show the checkmark color */
  }
  

  /* register now */

  .register {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.register div {
    margin-right: 10px;
}

</style>

    <nav>
        <header>
            <div class="logo">
                <a href="">
                    <img src="images/phs-logo.png" alt="phs logo">
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

    <div class="login-form">
        <div class="main-text">
            Log In to iPHS
        </div>
        <form class="login-form" method="POST">
            <input type="email" class="text email-input" placeholder="Email" name="email" required>
            <div class="password-toggle">
                <input type="password" class="text" placeholder="Password" name="password" id="password" required>
                <span class="toggle-icon" onclick="togglePassword()"><i class="fas fa-eye" id="eye-icon"></i></span>
            </div>
            <div class="below-group">
                <div class="horizontal-layout">
                    <!-- <div class="remember-me">
                        <input type="checkbox" id="rememberMe" name="remember_me">
                        <label for="rememberMe">Remember me</label>
                    </div> -->
                    <div class="forgot-pass">
                        <a href="forgotpassword.php" id="forgot-pass" class="links">Forgot password</a>
                    </div>
                </div>
            </div>
            <input class="button" type="submit" name="login" value="Log In">
        </form>

        <div class="register">
            <div id="label-reg">Don't have an account yet?</div>
            <a href="register.php" id="register-now">Register Now</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");
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
