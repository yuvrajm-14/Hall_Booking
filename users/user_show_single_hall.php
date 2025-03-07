<?php 
include('user_header.php');
$show_hall=new user;
$hall=$show_hall->show_single_hall($_GET['id']);
$dest="uploaded_images/"."hall00".$hall['id']."/";

?>
<style>
.dataTables_filter{
    float:right;
}
#datatable_wrapper{
  margin-bottom: 15px;
}

@media (min-width: 768px) {
  .main-content .container-fluid {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

</style>
<!-- img gallery only -->
<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">


    <div class="container-fluid mt--7 " style="height: auto;">
      
      <div class="row mt-5" >
        <div class="col-12 mb-5 ">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center" >
                <div class="col">
                  <h3 class="mb-0">BOOKED HALLS</h3>
                  <!-- <p class="text-muted mt-3">Note :  Your booking will be on pending untill you visit hall and pay your full payment. It will be cancel when anyone book hall at same time , so confirm your booking as soon as posible by visiting hall.</p> -->
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            
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
                        <div class="rating"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"></div>
                        <h4>Incredible hall best for wedding.</h4><span class="text-muted"><a href="#">Aryan Joshi</a>, 20 Sep 2020</span>
                        <p>This hall is amazing Because of the interior Design</p>
                    </div>
                </div>
                <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                    <div class="review-item">
                        <div class="rating"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"></div>
                        <h4>Incredible hall best for wedding.</h4><span class="text-muted"><a href="#">Aryan Joshi</a>, 20 Sep 2020</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                    <div class="review-item">
                        <div class="rating"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star-empty.svg"></div>
                        <h4>Incredible product</h4><span class="text-muted"><a href="#">John Smith</a>, 20 Jan 2018</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="reviews p-4 mb-3" style="border-radius: 20px;background-color: #edf7fa;box-shadow: 10px 10px 11px -9px rgba(0,0,0,0.75)">
                    <div class="review-item">
                        <div class="rating"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"><img width="30px" src="../assets/img/star.svg"></div>
                        <h4>Incredible hall best for wedding.</h4><span class="text-muted"><a href="#">Aryan Joshi</a>, 20 Sep 2020</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec augue nunc, pretium at augue at, convallis pellentesque ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                        
                  
        </div>
        </div>
    </div>
</div> 

            <!-- Your Content End -->


            
          </div>
        </div>
      </div>
    </div>  
      <!-- Footer -->


    
<?php 
include('footer.php');
?>
<script src="plugins/validate_js/jquery-2.1.3.min.js"></script>
<script src="plugins/validate_js/jquery.validate.min.js"></script>
<script src="plugins/validate_js/additional-methods.min.js"></script>
<script src="plugins/validate_js/validate.js"></script>

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