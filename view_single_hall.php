<?php 
session_start();

include('users/classes/user_class.php');
$show_hall=new user;
$hall=$show_hall->show_single_hall($_GET['id']);
$dest="users/uploaded_images/"."hall00".$hall['id']."/";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Hall</title>
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


<!-- img gallery only -->
<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">

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
                <div class="row">
                    <div class="col-6"><img class="img-fluid" src="<?php echo $dest.$hall['thumb']; ?>"></div>
                    <div class="col">
                        <h1><?php echo $hall['name']; ?></h1>
                        <h5 class="text-secondary"><?php echo $hall['location']; ?></h5>
                        <p><?php echo $hall['description']; ?></p>
                        <p class="mt-3">Address : <?php echo $hall['address']; ?>.</p>
                        <p class="text-primary mt-3">People Capacity : <?php echo $hall['capacity']; ?></p>
                        <p class="text-primary mt-3">Hall Owner : <?php echo $hall['owner_name']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5 class="display-4 my-4" style="font-size: 25px;">More Images</h5>
                    </div>
                    <!-- <div class="col-3 my-3"><img class="img-fluid" src="<?php echo $dest.$hall['img1']; ?>"></div>
                    <div class="col-3 my-3"><img class="img-fluid" src="<?php echo $dest.$hall['img2']; ?>"></div>
                    <div class="col-3 my-3"><img class="img-fluid" src="<?php echo $dest.$hall['img3']; ?>"></div>
                    <div class="col-3 my-3"><img class="img-fluid" src="<?php echo $dest.$hall['img4']; ?>"></div>
                    <div class="col-3 my-3"><img class="img-fluid" src="<?php echo $dest.$hall['img5']; ?>"></div> -->
                    <div class="col-12">
                      <div class="demo-gallery">
                        <ul id="lightgallery" class="list-unstyled row">
                            
                            <li class="col-3 my-3" data-responsive="<?php echo $dest.$hall['img1']; ?> 375, <?php echo $dest.$hall['img1']; ?> 480, <?php echo $dest.$hall['img1']; ?> 800" data-src="<?php echo $dest.$hall['img1']; ?>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive img-fluid" src="<?php echo $dest.$hall['img1']; ?>" alt="Thumb-1">
                                </a>
                            </li>

                            <li class="col-3 my-3" data-responsive="<?php echo $dest.$hall['img2']; ?> 375, <?php echo $dest.$hall['img2']; ?> 480, <?php echo $dest.$hall['img2']; ?> 800" data-src="<?php echo $dest.$hall['img2']; ?>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive img-fluid" src="<?php echo $dest.$hall['img2']; ?>" alt="Thumb-1">
                                </a>
                            </li>

                            <li class="col-3 my-3" data-responsive="<?php echo $dest.$hall['img3']; ?> 375, <?php echo $dest.$hall['img3']; ?> 480, <?php echo $dest.$hall['img3']; ?> 800" data-src="<?php echo $dest.$hall['img3']; ?>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive img-fluid" src="<?php echo $dest.$hall['img3']; ?>" alt="Thumb-1">
                                </a>
                            </li>

                            <li class="col-3 my-3 " data-responsive="<?php echo $dest.$hall['img4']; ?> 375, <?php echo $dest.$hall['img4']; ?> 480, <?php echo $dest.$hall['img4']; ?> 800" data-src="<?php echo $dest.$hall['img4']; ?>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive img-fluid" src="<?php echo $dest.$hall['img4']; ?>" alt="Thumb-1">
                                </a>
                            </li>

                            <li class="col-3 my-3 " data-responsive="<?php echo $dest.$hall['img5']; ?> 375, <?php echo $dest.$hall['img5']; ?> 480, <?php echo $dest.$hall['img5']; ?> 800" data-src="<?php echo $dest.$hall['img5']; ?>" data-pinterest-text="Pin it1" data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive img-fluid" src="<?php echo $dest.$hall['img5']; ?>" alt="Thumb-1">
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                    <div class="col-12 mt-4">
                        <h2 class="h2">Reviews</h2>
                            <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                                <div class="review-item">
                                    <div class="rating"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"></div>
                                    <h4>Incredible hall best for wedding.</h4><span class="text-muted"><a href="#">Aryan Joshi</a>, 20 Sep 2020</span>
                                    <p>This Hall is Amazing Because of the Interior Design</p>
                                </div>
                            </div>
                            <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                                <div class="review-item">
                                    <div class="rating"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"></div>
                                    <h4>Incredible hall best for wedding.</h4><span class="text-muted"><a href="#">Aryan Joshi</a>, 20 Sep 2020</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                                <div class="review-item">
                                    <div class="rating"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star-empty.svg"></div>
                                    <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                                <div class="review-item">
                                    <div class="rating"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"><img width="30px" src="assets/img/star.svg"></div>
                                    <h4>Incredible hall best for wedding.</h4><span class="text-muted"><a href="#">Aryan Joshi</a>, 20 Sep 2020</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
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

    <!-- for image gallery -->
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <!-- <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script> -->
    <script>
        lightGallery(document.getElementById('lightgallery'));
    </script>
</body>

</html>