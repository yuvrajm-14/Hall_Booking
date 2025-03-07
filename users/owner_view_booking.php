<?php 
include('owner_header.php');
$booking=new owner;
$all_bookings=$booking->show_all_booking($_SESSION['owner']);

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
                  <h3 class="mb-0">All BOOKINGS</h3>
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            
             
              <div class="col-12 my-5">
                <table id="datatable"  class="table  table-flush mb-3 " style="width: 100%">
                  <thead class="thead-light">
                  <meta http-equiv="refresh" content="5">
                    <tr >
                      <th scope="col">ID</th>
                      <th scope="col">Date</th>
                      <th scope="col">Event</th>
                      <th scope="col">Start Time</th>
                      <th scope="col">End Time</th>
                      <th scope="col">Status</th>

                      
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <?php 
                    foreach ($all_bookings as $all_booking ) {
                    ?>
                    <tr>
                      
                      <td>
                        <?php echo $all_booking['id']; ?>
                      </td>
                      <td>
                        <?php echo $all_booking['date']; ?>
                      </td>
                      <td>
                        <?php echo $all_booking['event']; ?>
                      </td>
                      <td>
                        <?php echo $all_booking['start_time']; ?>
                      </td>
                      <td>
                        <?php echo $all_booking['end_time']; ?>
                      </td>
                      <td>
                        <?php echo $all_booking['status']; ?>
                      </td>
                      
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="owner_booking_change_status.php?id=<?php echo $all_booking['hall']; ?>&bid=<?php echo $all_booking['id']; ?>&view=1">View</a>
                            <a class="dropdown-item" href="owner_booking_change_status.php?id=<?php echo $all_booking['hall']; ?>&bid=<?php echo $all_booking['id']; ?> ">Change Status</a>
                            <!-- <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a> -->
                          </div>
                        </div>
                      </td>

                      
                      
                    </tr>
                    <?php
                    }
                     ?>
                    


                  </tbody>
                </table>
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

<?php 



 ?>