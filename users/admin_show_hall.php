<?php 
include('admin_header.php');
$show_hall=new admin;
$halls=$show_hall->show_all_hall();

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
                  <h3 class="mb-0">All HALLS</h3>
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

      ?>
      <div class="col-lg-4 my-3">
          <div style="border: 1px solid rgb(210,205,205);border-radius: 10px;"><img class="img-fluid w-100" src="<?php echo $dest; ?>">
              <h4 class="mt-2 px-2"><?php echo $hall['name']; ?> , <?php echo $hall['location']; ?></h4>
              <p class="px-2"><strong>Description</strong> : <?php echo $long.".."; ?></p>
              <div class="my-3 px-1">
                <a class="btn btn-primary mx-1" href="admin_view_single_hall.php?id=<?php echo $hall['id']; ?>" type="button">View</a>
                <a class="btn btn-primary mx-1" href="admin_edit_hall.php?id=<?php echo $hall['id']; ?>" type="button">Update</a>
                <a class="btn btn-primary mx-1" href="admin_delete_hall.php?id=<?php echo $hall['id']; ?>" type="button">Delete</a>
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

