<?php 
include('admin_header.php');
include('classes/dbcon2.php');
$add_hall=new admin;

$hall=$add_hall->show_single_hall($_GET['id']);


?>
<style>
.dataTables_filter{
    float:right;
}
#datatable_wrapper{
  margin-bottom: 15px;
}
</style>
    <div class="container-fluid mt--7 " style="height: auto;">
      
      <div class="row mt-5" >
        <div class="col-12 mb-5 ">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center" >
                <div class="col">
                  <h3 class="mb-0">EDIT HALL OWNER</h3>
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            <div class="container mt-3 mb-7" >
            <div class="row">
              <div class="col-12" >
                <div class="card bg-secondary shadow">
                  <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h3 class="mb-0">Hall Owner Information</h3>
                      </div>
                      
                    </div>    
                  </div>
                  <div class="card-body" >
                    <form id="edit_hall" method="post" enctype="multipart/form-data">
                      
                      <div class="pl-lg-4">
                        <div class="row">

                          

                          <div class="col-12">
                            <h2 class="h3 my-4">Hall Owner Information</h2>
                          </div>

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_name">Hall Owner Name</label>
                              <input type="text" name="owner_name" class="form-control form-control-alternative" value="<?php echo $hall['owner_name']; ?>" placeholder="Hall Owner Name" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_username">Hall Owner Username</label>
                              <input type="text" name="owner_username" class="form-control form-control-alternative" value="<?php echo $hall['owner_username']; ?>" placeholder="Hall Owner Username" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_password">Hall Owner Password</label>
                              <input type="password" name="owner_password"  class="form-control form-control-alternative" value="<?php echo $hall['owner_password']; ?>" placeholder="Hall Owner Password" >
                            </div>
                          </div>
                                               
   
                          
                        </div>
                        
                      </div>
                      
                      <div class="pl-lg-4 mt-4">
                      
                        <div class="row">
                          <div class="col text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          </div>
                          
                        </div>
                      </div>
         
                    </form>
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




<!-- <script src="plugins/validate_js/jquery-2.1.3.min.js"></script> --->
<script src="plugins/validate_js/jquery.validate.min.js"></script>
<script src="plugins/validate_js/additional-methods.min.js"></script>
<script src="plugins/validate_js/validate.js"></script>



<?php 
if (isset($_POST['submit'])) {
  $password=md5($_POST['owner_password']);
  $stmt=mysqli_query($con,"UPDATE `hall` SET `owner_name` = '".$_POST['owner_name']."', `owner_username` = '".$_POST['owner_username']."', `owner_password` = '".$password."' WHERE `hall`.`id` = '".$_GET['id']."'");
      if ($stmt==TRUE) {

      ?>
      <script type="text/javascript">
        alert('Hall Owner Information updated sucessfully');
        window.open('admin_show_hall_owners.php','_self');
      </script>

      <?php
      }
}


 ?>


