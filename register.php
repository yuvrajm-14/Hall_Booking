<?php 
session_start();
include('users/classes/user_class.php');
$register=new user;

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign Up</title>
    <!-- Favicon -->
    <link href="users/assets/img/brand/logo.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>
<style type="text/css">
    .error{
        color: red;
    }
</style>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Mercury Hall</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="all_halls.php">Halls</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="booking.php">Booking</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div></div>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;assets/img/whall26.jpg&quot;);"></div>
            <form method="post" id="register_form">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control" type="text" maxlength="10" name="mobile" placeholder="Mobile Number"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group">
                	<button class="btn btn-primary btn-block" name="submit" type="submit">Sign Up</button>
                </div><a href="login.php" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="about_us.html">About Us</a><a href="contact_us.html">Contact Us</a><a href="gallery.html">Gallery</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/theme.js"></script>

    <!-- <script src="users/plugins/validate_js/jquery-2.1.3.min.js"></script> -->
    <script src="users/plugins/validate_js/jquery.validate.min.js"></script>
    <script src="users/plugins/validate_js/additional-methods.min.js"></script>
    <script src="users/plugins/validate_js/validate.js"></script>
</body>

</html>

<?php 
if (isset($_POST['submit'])) {
	$register->user_register($_POST['name'],$_POST['mobile'],$_POST['email'],$_POST['password']);
}
 ?>