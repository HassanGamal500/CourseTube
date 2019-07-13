<!DOCTYPE html>
<html>
    <head>
        <title>CourseTube</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/signup.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic">
    </head>
    <body>
        <?php
            include "signup2.php";
        ?>
        <div class="navbar">
            <div class="float">
                <img src="image/course.png">
                <p>CourseTube</p>
            </div>
        </div>
        <div class="clear"></div>
        <div class="sign">
            <div class="button">
                <button>SIGN UP</button>
                <button>SIGN IN</button>
            </div>
            <div class="container">
                <div class="up">
                    <div class="container-2">
                        <h1>Create your student account</h1>
                        <p>Your student account is your portal to all things Udacity: your classroom, projects, forums, career resources, and more!</p>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="text" name="firstname" placeholder="First Name*">
                            <input type="text" name="lastname" placeholder="Last Name*">
                            <input type="email" name="email" placeholder="Email Address*">
                            <input type="password" name="password" placeholder="Password*">
                            <br>
                            <input type="submit" value="SIGN UP" name="save">
                        </form>
                        <hr>
                        <p>or sign up with Goolge</p>
                        <div class="google-up">
                            <?php echo $output; ?>
                            <!--
                            <button>
                                <a href="<?php echo filter_var($authUrl, FILTER_SANITIZE_URL) ?>">
                                    <img src="image/google/search.png">
                                    <p>Google</p>
                                </a>
                            </button>
                        -->
                        </div>
                    </div>
                </div>
                <div class="in">
                    <div class="container-2">
                        <h1>Sign in to your account</h1>
                        <p>Your student account is your portal to all things Udacity: your classroom, projects, forums, career resources, and more!</p>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="email" name="email" placeholder="Email Address">
                            <input type="password" name="password" placeholder="Password">
                            <input type="submit" value="SIGN UP" name="log-in">
                            <br>
                            <a href="#">Forgot your password?</a>
                            <hr>
                            <p>or sign in with Google</p>
                            <div class="google-in">
                                <button>
                                    <img src="image/google/search.png">
                                    <p>Google</p>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/custom2.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
    </body>
</html>