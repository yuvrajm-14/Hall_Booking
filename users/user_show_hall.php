<?php 
include('user_header.php');
$show_hall=new user;
$halls=$show_hall->show_all_booked_hall($_SESSION['user']);

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
    <div class="container-fluid mt--7 " style="height: auto;">
    <meta http-equiv="refresh" content="20">
      <div class="row mt-5" >
        <div class="col-12 mb-5 ">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center" >
                <div class="col">
                  <h3 class="mb-0">BOOKED HALLS</h3>
                  <p class="text-muted mt-3">Note :  Your booking will be on pending untill you visit hall and pay your full payment. It will be cancel when anyone book hall at same time , so confirm your booking as soon as posible by visiting hall.</p>
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            
<div class="container">
    <div class="row">
      <?php 
      foreach ($halls as $hall) {
        // $destination="uploaded_images/"."hall00".$last_id."/";
        $dest="uploaded_images/"."hall00".$hall['id']."/".$hall['thumb'];
        $long=substr($hall['description'],0,150);
        $booking_details=$show_hall->show_all_booking_detail_hall($hall['id'],$_SESSION['user']);
        

      ?>
      <div class="col-lg-4 my-3">
          <div style="border: 1px solid rgb(210,205,205);border-radius: 10px;"><img class="img-fluid w-100" src="<?php echo $dest; ?>">
              <h4 class="mt-2 px-2"><?php echo $hall['name']; ?> , <?php echo $hall['location']; ?></h4>
              <p class="px-2"><strong>Description</strong> : <?php echo $long.".."; ?></p>
              <p class="px-2"><strong>Status</strong> : <?php echo $booking_details['status']; ?></p>
              <p class="px-2"><strong>Booked Date: </strong> : <?php echo $booking_details['date']; ?></p>
              <?php 
              if ($booking_details['start_time']>12) {
               $st_time=$booking_details['start_time']." PM ";
              }else{
                $st_time=$booking_details['start_time']." AM ";
              } 

              if ($booking_details['end_time']>12) {
               $en_time=$booking_details['end_time']." PM ";
              }else{
                $en_time=$booking_details['end_time']." AM ";
              } 





              ?>
              <p class="px-2"><strong>Timing: </strong> : <?php echo $st_time." - ".$en_time; ?></p>


              <div class="my-3 px-1">
                <!-- <a class="btn btn-primary mx-1" href="admin_view_single_hall.php?id=<?php echo $hall['id']; ?>" type="button">View</a>
                <a class="btn btn-primary mx-1" href="admin_edit_hall.php?id=<?php echo $hall['id']; ?>" type="button">Update</a> -->
                <a class="btn btn-primary mx-1" href="user_delete_hall_booking.php?id=<?php echo $booking_details['id']; ?>" type="button" onclick="return confirm('Are you sure to cancel your booking ?')">Cancel Booking</a>
                <a class="btn btn-primary mx-1" href="user_show_single_hall.php?id=<?php echo $hall['id']; ?>" type="button" >View</a>
              </div>
          </div>
      </div>
      <?php
      }
      ?>
        
        
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
<!-- <script src="plugins/validate_js/jquery-2.1.3.min.js"></script> -->
<script src="plugins/validate_js/jquery.validate.min.js"></script>
<script src="plugins/validate_js/additional-methods.min.js"></script>
<script src="plugins/validate_js/validate.js"></script>

