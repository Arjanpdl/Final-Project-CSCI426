<?php include('functions.php') ?>
<!-- Main page for login page can be found here written in HTML with bootstrap classes -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This is the title of the page -->
    <title>Sign In</title>
    <!-- This meta tag replace the existing character sets with its standard UTF -->
    <meta charset="UTF-8">
    <!-- This meta tag gives information to the browser about how the scaling should be done -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style sheet used in this page. You can find them in the our project folder -->
    <link rel="stylesheet" type="text/css" href="main.css">
    
</head>
<!-- Here is our main sign in page body begins. All the frontend is here -->
<body>
	<!-- This div here controls the whole page >>main.css -->
        <div class="limiter">
            <div class="container-login100" style="background-color: rgb(255, 255, 255);"> <!-- This controls the background and scaling of the sign in and sign up page >>main.css-->
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33"> <!-- This is a login box >>main.css -->
                    <form method="post" action="login.php" class="login100-form validate-form flex-sb flex-w"> <!-- This is for the form itself >>main.css -->
                        <span class="login100-form-title p-b-53"> <!-- Title of the form >>main.css -->
                            Sign In With
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
                        <?php echo display_error(); ?> <!-- I need CSS for error -->

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Username
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" id="username">
                            <span class="focus-input100"></span>
                        </div>
                        
                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Password
                            </span>
    
                            <a href="#" class="txt2 bo1 m-l-5">
                                <strong>Forgot?</strong>
                            </a>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" id="passwod">
                            <span class="focus-input100"></span>
                        </div>
    
                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" type="submit" name="login_btn">
                                Sign In
                            </button>
                        </div>
    
                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Not a member?
                            </span>

                            <!-- Sign up button link -->
    
                            <a href="signup.php" class="txt2 bo1">
                                <strong>Sign up now</strong>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>
</html>