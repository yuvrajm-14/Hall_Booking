<?php 
include('user_header.php');
$booking=new user;
$halls=$booking->show_all_hall();

$date = date('Y-m-d'); 
$next = date('Y-m-d', strtotime('+1 day', strtotime($date)));
$next_3month_date = date('Y-m-d', strtotime('+3 month'));


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
      
      <div class="row mt-5" >
        <div class="col-12 mb-5 ">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center" >
                <div class="col">
                  <h3 class="mb-0">BOOKED HALLS</h3>
                  
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            
<div class="container">
    <div class="heading">
        <!-- <h2 class="text-capitalize">Booking Details</h2> -->
    </div>
    <form method="post" id="booking_form">
        <div class="form-group"><label for="subject">Event *</label>
            <select class="form-control" name="event" id="event" required="">
                <option value="" selected="">Select Event</option>
                <option value="wedding">Wedding</option>
                <option value="engagement">Engagement</option>
                <option value="seminar">Seminar</option>
                <option value="party">Party</option>
                <option value="other">Other</option>

            </select>
        </div>
        <div
            class="form-group"><label for="hall">Hall you want to book *</label>
            <select class="form-control" id="hall" name="hall"  required="">
                <option value=""  selected="">Select Hall</option>
                <?php 
                foreach ($halls as $hall) {
                ?>
                <option value="<?php echo $hall['id'] ?>" ><?php echo $hall['address']; ?></option>
                <!-- <option value="<?php echo $hall['id'] ?>" ><?php echo $hall['name']. " , ".$hall['location']; ?></option> -->

                
                <?php
                }

                 ?>
            </select>
        </div>
        <!-- <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" id="email"></div>
        <div class="form-group"><label for="email">Mobile *</label><input class="form-control" type="text"></div>
        <div class="form-group"><label for="message">Message</label><textarea class="form-control" id="message"></textarea></div> -->
        <div class="form-group" id="check_feild">
        <div class="form-row">
            <div class="col-md-4">
                <label for="sel_date">Date *</label>
                <input class="form-control" type="date" min="<?php echo $next; ?>" max="<?php echo $next_3month_date; ?>" name="date" id="sel_date" required="">
                
            </div>
            <div class="col-md-4">
                <label for="start_time">Start Time *</label>
                <!-- <input class="form-control" type="time" id="start_time" value="10:00"> -->
                <select class="form-control" name="start_time"  id="start_time"  required="">
                     <option value="" selected="">Choose Time</option> 
                    <option value="5">5 AM</option>
                    <option value="6">6 AM</option>
                    <option value="7">7 AM</option>
                    <option value="8">8 AM</option>
                    <option value="9">9 AM</option>
                    <option value="10">10 AM</option>
                    <option value="11">11 AM</option>
                    <option value="12">12 PM</option>
                    <option value="13">1 PM</option>
                    <option value="14">2 PM</option>
                    <option value="15">3 PM</option>
                    <option value="16">4 PM</option>
                    <option value="17">5 PM</option>
                    <option value="18">6 PM</option>
                    <option value="19">7 PM</option>
                    <option value="20">8 PM</option>
                    <option value="21">9 PM</option>
                    <option value="22">10 PM</option>
                    <option value="23">11 PM</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="end_time">End Time *</label>
                <!-- <input class="form-control" type="time" id="end_time" name="date" value="10:05"> -->
                <select class="form-control" name="end_time" id="end_time" required="">
                     <option value="" selected="">Choose Time</option>
                    <option value="5">5 AM</option>
                    <option value="6">6 AM</option>
                    <option value="7">7 AM</option>
                    <option value="8">8 AM</option>
                    <option value="9">9 AM</option>
                    <option value="10">10 AM</option>
                    <option value="11">11 AM</option>
                    <option value="12">12 PM</option>
                    <option value="13">1 PM</option>
                    <option value="14">2 PM</option>
                    <option value="15">3 PM</option>
                    <option value="16">4 PM</option>
                    <option value="17">5 PM</option>
                    <option value="18">6 PM</option>
                    <option value="19">7 PM</option>
                    <option value="20">8 PM</option>
                    <option value="21">9 PM</option>
                    <option value="22">10 PM</option>
                    <option value="23">11 PM</option>
                </select>
            </div>
            <div class="col-md-6 button">
                <button class="btn btn-primary btn-block mt-4" id="check" type="button">Check Availablity</button>
                <button class="btn btn-success btn-block mt-4 d-none" id="sub_form" name="submit" type="submit">Book The Hall</button>
            </div>
            <div class="col-md-6 text-center"><h4  class="text-primary" style="margin-top: 35px" id="responce"></h4></div>
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
<script src="plugins/validate_js/jquery-2.1.3.min.js"></script>
<!-- <script src="plugins/validate_js/jquery.validate.min.js"></script>
<script src="plugins/validate_js/additional-methods.min.js"></script>
<script src="plugins/validate_js/validate.js"></script> -->

<script>
$(document).ready(function(){
    $('#check').on("click",function(){
        var sel_date = $('#sel_date').val();

        var start_time = $('#start_time').val();
        var end_time = $('#end_time').val();
        var hall = $('#hall').val();

        
        // console.log(start_time+"  "+end_time);

    if (parseInt(start_time)  < parseInt(end_time) || hall !='' ) {
        $.ajax({
          type:'POST',
          url:'ajax/booking_check_ajax.php',
          data:{    
            'date': sel_date,
            'start_time': start_time,
            'end_time': end_time,
            'hall': hall

          },
          success:function(html){
            $('#responce').html(html);
            var res=html;
            if (res.length<=11) {
                
                $('#check').addClass('d-none');
                $('#sub_form').removeClass('d-none');

                $('#start_time').attr('readonly','readonly');
                $('#end_time').attr('readonly','readonly');
                $('#sel_date').attr('readonly','readonly');
                $('#hall').attr('readonly','readonly');



                

            }

          }
        });
    }else{
        alert("Please select Hall , Date and start time and End time properly");
    }



    });
});
</script>

<?php 
if (isset($_POST['submit'])) {
    $_SESSION['event']=$_POST['event'];
    $_SESSION['hall']=$_POST['hall'];
    $_SESSION['date']=$_POST['date'];
    $_SESSION['start_time']=$_POST['start_time'];
    $_SESSION['end_time']=$_POST['end_time'];

    $booking->hall_booking($_POST['event'],$_POST['date'],$_POST['hall'],$_POST['start_time'],$_POST['end_time'],$_SESSION['user']);

    
    ?>
    <script type="text/javascript">
        window.open('user_show_hall.php','_self');
    </script>
    <?php
    
}


 ?>
