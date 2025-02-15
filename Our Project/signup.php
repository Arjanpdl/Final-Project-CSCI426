<?php include('functions.php') ?>
<!-- Main page for sign up page can be found here written in HTML with bootstrap classes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This is the title of the page -->
    <title>Sign Up</title>
    <!-- This meta tag replace the existing character sets with its standard UTF -->
    <meta charset="UTF-8">
    <!-- This meta tag gives information to the browser about how the scaling should be done -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style sheet used in this page. You can find them in the our project folder -->
    <link rel="stylesheet" type="text/css" href="main.css">
    
</head>
<!-- Here is our main sign up page body begins. All the frontend is here -->
<body>
	<!-- This div here controls the whole page >>main.css -->
        <div class="limiter">
            <div class="container-login100"> <!-- This controls the background and scaling of the sign in and sign up page >>main.css-->
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33"> <!-- This is a login box >>main.css -->
                    <form method="post" class="login100-form validate-form flex-sb flex-w" action="signup.php"> <!-- This is for the form itself >>main.css -->
                        <span class="login100-form-title p-b-53"> <!-- Title of the form >>main.css -->
                            Sign Up
                        </span>
    
                        <!-- Facebook and Google link button -->
                        <a href="#" class="btn-face m-b-20">
                            <i class="fa fa-facebook-official"></i>
                            Facebook
                        </a>
    
                        <a href="#" class="btn-google m-b-20">
                            <img src="icon-google.png" alt="GOOGLE">
                            Google
                        </a>

                        <!-- Field lables and input contents -->
                        
                        <?php echo display_error(); ?> <!--  I need CSS for Error Display-->
                        
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                First Name
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "First Name is required">
                            <input class="input100" type="text" name="fname" value="<?php echo $fname; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Last Name
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Last Name is required">
                            <input class="input100" type="text" name="lname" value="<?php echo $lname; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                UserName
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" value="<?php echo $username; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                E-Mail
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "E-Mail is required">
                            <input class="input100" type="text" name="email" value="<?php echo $email; ?>">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Confirm Password
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Confirm your Password">
                            <input class="input100" type="password" name="cpass">
                            <span class="focus-input100"></span>
                        </div>
    
                        <!-- Sign up button link -->
                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" type="submit" name="signup_btn">
                                Sign Up
                            </button>
                        </div>
    
                        
                    </form>
                </div>
            </div>
        </div>
</body>
</html>