<?php 
session_start();

include('users/classes/user_class.php');
$show_hall=new user;
$halls=$show_hall->show_all_hall();


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>All Halls</title>
    <!-- Favicon -->
    <link href="users/assets/img/brand/logo.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Mercury Hall</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="all_halls.php">Halls</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="booking.php">Booking</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>All Halls</h2>
                </div>
                <div class="row">
                    <?php 
                      foreach ($halls as $hall) {
                        // $destination="uploaded_images/"."hall00".$last_id."/";
                        $dest="users/uploaded_images/"."hall00".$hall['id']."/".$hall['thumb'];
                        $long=substr($hall['description'],0,150);

                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="view_single_hall.php?id=<?php echo $hall['id']; ?>"><img src="<?php echo $dest; ?>" alt="Card Image" class="card-img-top scale-on-hover"></a>
                            <div class="card-body">
                                <h6><a href="view_single_hall.php?id=<?php echo $hall['id']; ?>"><?php echo $hall['name']; ?> , <?php echo $hall['location']; ?></a></h6>
                                <p class="text-muted card-text"><b>Location :</b> <?php echo $hall['address']; ?></p>

                                <p class="text-muted card-text">Description : <?php echo $long.".."; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    }
                    ?>
                </div>
            </div>
            <hr>
            <div class="container pt-3">
                <div class="heading">
                    <h2 class="text-capitalize">Hall types we have</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img src="assets/img/Birthday3.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                            <div class="card-body">
                                <h6><a href="#">Party Hall</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img src="assets/img/Birthday6.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                            <div class="card-body">
                                <h6><a href="#">Seminar Hall</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0"><a href="#"><img src="assets/img/engagement2.jpg" alt="Card Image" class="card-img-top scale-on-hover"></a>
                            <div class="card-body">
                                <h6><a href="#">Wedding &amp; Engagement</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="about_us.php">About Us</a><a href="contact_us.php">Contact Us</a><a href="gallery.php">Gallery</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>