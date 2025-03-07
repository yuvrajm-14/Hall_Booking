<?php 
include('owner_header.php');
$show_hall=new owner;
$hall=$show_hall->show_single_hall($_GET['id']);
$booking=$show_hall->show_single_booking($_GET['bid']);
$user_info=$show_hall->show_single_user($booking['user']);
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
                  <h3 class="mb-0">Hall Booking Information</h3>
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
    <!-- <div class="row">
        <div class="col-12">
            <h5 class="display-4 my-4" style="font-size: 25px;">More Images</h5>
        </div>
        
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
        </div>
    </div> -->
    <form method="post">
    <div class="row my-4">
        <div class="col-12">
            <h5 class="display-4 my-4" style="font-size: 25px;">Booking Information </h5>
        </div>
        <div class="col-12 my-3">
            <label for="sel_date">Customer Name And Number </label>
            <input class="form-control" type="text" readonly="" value="<?php echo $user_info['name']. " | ".$user_info['mobile']. " | ".$user_info['alt_mobile'] ; ?>" >
                            
        </div>
        <div class="col-4">
            <div class="form-group"><label for="subject">Event *</label>
                <select class="form-control" name="event" id="event" disabled="" required="">
                    <option value="wedding" <?php if($booking['event']=='wedding'){echo "selected='' ";} ?> >Wedding</option>
                    <option value="engagement" <?php if($booking['event']=='engagement'){echo "selected='' ";} ?> >Engagement</option>
                    <option value="seminar" <?php if($booking['event']=='seminar'){echo "selected='' ";} ?> >Seminar</option>
                    <option value="party" <?php if($booking['event']=='party'){echo "selected='' ";} ?> >Party</option>
                    <option value="other" <?php if($booking['event']=='other'){echo "selected='' ";} ?> >Other</option>

                </select>
            </div>
        </div>
        <div class="col-4">
            <label for="sel_date">Date *</label>
            <input class="form-control" type="date" name="date" id="sel_date" value="<?php echo $booking['date']; ?>" readonly="" required="">
                            
        </div>
        <div class="col-4">
            <label for="start_time">Start Time *</label>
            <select class="form-control" name="start_time"  id="start_time"  disabled="" >
                <!-- <option value="" selected="">Choose Time</option> -->
                <option value="5" <?php if($booking['start_time']==5){echo "selected='' ";} ?> >5 AM</option>
                <option value="6" <?php if($booking['start_time']==6){echo "selected='' ";} ?> >6 AM</option>
                <option value="7" <?php if($booking['start_time']==7){echo "selected='' ";} ?> >7 AM</option>
                <option value="8" <?php if($booking['start_time']==8){echo "selected='' ";} ?> >8 AM</option>
                <option value="9" <?php if($booking['start_time']==9){echo "selected='' ";} ?> >9 AM</option>
                <option value="10" <?php if($booking['start_time']==10){echo "selected='' ";} ?> >10 AM</option>
                <option value="11" <?php if($booking['start_time']==11){echo "selected='' ";} ?> >11 AM</option>
                <option value="12" <?php if($booking['start_time']==12){echo "selected='' ";} ?> >12 PM</option>
                <option value="13" <?php if($booking['start_time']==13){echo "selected='' ";} ?> >1 PM</option>
                <option value="14" <?php if($booking['start_time']==14){echo "selected='' ";} ?> >2 PM</option>
                <option value="15" <?php if($booking['start_time']==15){echo "selected='' ";} ?> >3 PM</option>
                <option value="16" <?php if($booking['start_time']==16){echo "selected='' ";} ?> >4 PM</option>
                <option value="17" <?php if($booking['start_time']==17){echo "selected='' ";} ?> >5 PM</option>
                <option value="18" <?php if($booking['start_time']==18){echo "selected='' ";} ?> >6 PM</option>
                <option value="19" <?php if($booking['start_time']==19){echo "selected='' ";} ?> >7 PM</option>
                <option value="20" <?php if($booking['start_time']==20){echo "selected='' ";} ?> >8 PM</option>
                <option value="21" <?php if($booking['start_time']==21){echo "selected='' ";} ?> >9 PM</option>
                <option value="22" <?php if($booking['start_time']==22){echo "selected='' ";} ?> >10 PM</option>
                <option value="23" <?php if($booking['start_time']==23){echo "selected='' ";} ?> >11 PM</option>
            </select>
        </div>
        <div class="col-4">
            <label for="end_time">End Time *</label>
            <select class="form-control" name="end_time" id="end_time" disabled="" >
                <!-- <option value="" selected="">Choose Time</option> -->
                <option value="5" <?php if($booking['end_time']==5){echo "selected='' ";} ?> >5 AM</option>
                <option value="6" <?php if($booking['end_time']==6){echo "selected='' ";} ?> >6 AM</option>
                <option value="7" <?php if($booking['end_time']==7){echo "selected='' ";} ?> >7 AM</option>
                <option value="8" <?php if($booking['end_time']==8){echo "selected='' ";} ?> >8 AM</option>
                <option value="9" <?php if($booking['end_time']==9){echo "selected='' ";} ?> >9 AM</option>
                <option value="10" <?php if($booking['end_time']==10){echo "selected='' ";} ?> >10 AM</option>
                <option value="11" <?php if($booking['end_time']==11){echo "selected='' ";} ?> >11 AM</option>
                <option value="12" <?php if($booking['end_time']==12){echo "selected='' ";} ?> >12 PM</option>
                <option value="13" <?php if($booking['end_time']==13){echo "selected='' ";} ?> >1 PM</option>
                <option value="14" <?php if($booking['end_time']==14){echo "selected='' ";} ?> >2 PM</option>
                <option value="15" <?php if($booking['end_time']==15){echo "selected='' ";} ?> >3 PM</option>
                <option value="16" <?php if($booking['end_time']==16){echo "selected='' ";} ?> >4 PM</option>
                <option value="17" <?php if($booking['end_time']==17){echo "selected='' ";} ?> >5 PM</option>
                <option value="18" <?php if($booking['end_time']==18){echo "selected='' ";} ?> >6 PM</option>
                <option value="19" <?php if($booking['end_time']==19){echo "selected='' ";} ?> >7 PM</option>
                <option value="20" <?php if($booking['end_time']==20){echo "selected='' ";} ?> >8 PM</option>
                <option value="21" <?php if($booking['end_time']==21){echo "selected='' ";} ?> >9 PM</option>
                <option value="22" <?php if($booking['end_time']==22){echo "selected='' ";} ?> >10 PM</option>
                <option value="23" <?php if($booking['end_time']==23){echo "selected='' ";} ?> >11 PM</option>
            </select>
        </div>
        <div class="col-4">
            <div class="form-group"><label for="subject">Status *</label>
                <select class="form-control" name="status"   required="">
                    <option value="pending" <?php if($booking['status']=='pending'){echo "selected='' ";} ?> >Pending</option>
                    <option value="confirm" <?php if($booking['status']=='confirm'){echo "selected='' ";} ?> >Confirm</option>
                    <option value="cancel" <?php if($booking['status']=='cancel'){echo "selected='' ";} ?> >Cancel</option>
                    

                </select>
            </div>
        </div>
        <div class="col-4">
            <label for="sel_date">Paid Amount *</label>
            <input class="form-control" type="text" name="paid_amount" placeholder="Paid Amount" value="<?php echo $booking['paid_amount']; ?>" required="">
                            
        </div>
        <div class="col-12">
            <label for="subject">More Details </label>
            <textarea class="form-control" name="more_details"  rows="5"><?php echo $booking['more_details']; ?></textarea>
        </div>
    </div>
    <div class="row mb-5">
      <div class="col text-center">
        <?php 
        if (!isset($_GET['view'])) {
        ?>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            
        <?php
        }
         ?>
      </div>
      
    </div>
    </form>
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
<!-- <script src="plugins/validate_js/jquery-2.1.3.min.js"></script> -->
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


<?php if (isset($_POST['submit'])) {
    $show_hall->edit_booking_info($_POST['status'],$_POST['paid_amount'],$_POST['more_details'],$_GET['bid'],$_GET['id']);
} ?>

