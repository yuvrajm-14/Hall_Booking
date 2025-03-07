<?php 
include('owner_header.php');
include('classes/dbcon2.php');
$add_hall=new owner;

$hall=$add_hall->show_single_hall($_GET['id']);
$dest="uploaded_images/"."hall00".$hall['id']."/";


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
                  <h3 class="mb-0">EDIT HALL</h3>
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
                        <h3 class="mb-0">Hall Information</h3>
                      </div>
                      
                    </div>    
                  </div>
                  <div class="card-body" >
                    <form id="edit_hall" method="post" enctype="multipart/form-data">
                      
                      <div class="pl-lg-4">
                        <div class="row">

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Hall Name</label>
                              <input type="text" name="name" class="form-control form-control-alternative" value="<?php echo $hall['name']; ?>" placeholder="Name" >
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Description</label>
                              <textarea class="form-control form-control-alternative" placeholder="Description" style="resize:none;" name="description" cols="5"><?php echo $hall['description']; ?></textarea>
                            </div>
                          </div>

                          <div class="col-12">
                            <h2 class="h3 my-4">Hall Photos</h2>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 1 : </label>
                              <img class="img-fluid" src="<?php echo $dest.$hall['img1']; ?>">
                              <input type="file" name="img1" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 2 : </label>
                              <img class="img-fluid w-100" src="<?php echo $dest.$hall['img2']; ?>">
                              <input type="file" name="img2" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 3 : </label>
                              <img class="img-fluid w-100" src="<?php echo $dest.$hall['img3']; ?>">
                              <input type="file" name="img3" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 4 : </label>
                              <img class="img-fluid w-100" src="<?php echo $dest.$hall['img4']; ?>">
                              <input type="file" name="img4" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 5 : </label>
                              <img class="img-fluid w-100" src="<?php echo $dest.$hall['img5']; ?>">
                              <input type="file" name="img5" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Thumbnail Image : </label>
                              <img class="img-fluid w-100" src="<?php echo $dest.$hall['thumb']; ?>">
                              <input type="file" name="thumb" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-12">
                            <h2 class="h3 my-4">More Information</h2>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Address</label>
                              <textarea class="form-control form-control-alternative" name="address" placeholder="Address" cols="5"><?php echo $hall['address']; ?></textarea>
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Location</label>
                              <input type="text" name="location" class="form-control form-control-alternative" value="<?php echo $hall['location']; ?>" placeholder="Location" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">People Capacity</label>
                              <input type="text" name="capacity" class="form-control form-control-alternative" value="<?php echo $hall['capacity']; ?>" placeholder="People Capacity" >
                            </div>
                          </div>

                        

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-first-name">Hall Status</label>
                              <select class="form-control"  name="status">
                                <!-- <option value="">Select Hall Status</option> -->
                                <option value="open" <?php if ($hall['capacity']=="open") {echo "selected=''";} ?>>Open</option>
                                <option value="closed" <?php if ($hall['capacity']=="closed") {echo "selected=''";} ?>>Closed</option>
                                <option value="inmaintainance" <?php if ($hall['capacity']=="inmaintainance") {echo "selected=''";} ?>>In Maintainance</option>
                              </select>
                            </div>
                          </div>

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
                              <input type="text" name="owner_username" class="form-control form-control-alternative" readonly="" value="<?php echo $hall['owner_username']; ?>" placeholder="Hall Owner Username">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_password">Hall Owner Password</label>
                              <input type="password" name="owner_password"  class="form-control form-control-alternative" readonly="" value="<?php echo $hall['owner_password']; ?>" placeholder="Hall Owner Password" >
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




<!-- <script src="plugins/validate_js/jquery-2.1.3.min.js"></script> -->
<script src="plugins/validate_js/jquery.validate.min.js"></script>
<script src="plugins/validate_js/additional-methods.min.js"></script>
<script src="plugins/validate_js/validate.js"></script>



<?php 
if (isset($_POST['submit'])) {

  $stmt=mysqli_query($con,"UPDATE `hall` SET `name` = '".$_POST['name']."', `description` = '".$_POST['description']."', `address` = '".$_POST['address']."', `location` = '".$_POST['location']."', `capacity` = '".$_POST['capacity']."', `status` = '".$_POST['status']."', `owner_name` = '".$_POST['owner_name']."'  WHERE `hall`.`id` = '".$_GET['id']."'");
      if ($stmt==TRUE) {
      
            if (!empty($_FILES['img1']['name'])) {
                move_uploaded_file($_FILES['img1']['tmp_name'],$dest.$_FILES['img1']['name']);
                mysqli_query($con,"UPDATE `hall` SET `img1` = '".$_FILES['img1']['name']."' WHERE `hall`.`id` = '".$_GET['id']."' ");
            }
            if (!empty($_FILES['img2']['name'])) {
                move_uploaded_file($_FILES['img2']['tmp_name'],$dest.$_FILES['img2']['name']);
                mysqli_query($con,"UPDATE `hall` SET `img2` = '".$_FILES['img2']['name']."' WHERE `hall`.`id` = '".$_GET['id']."' ");
            }
            if (!empty($_FILES['img3']['name'])) {
                move_uploaded_file($_FILES['img3']['tmp_name'],$dest.$_FILES['img3']['name']);
                mysqli_query($con,"UPDATE `hall` SET `img3` = '".$_FILES['img3']['name']."' WHERE `hall`.`id` = '".$_GET['id']."' ");
            }
            if (!empty($_FILES['img4']['name'])) {
                move_uploaded_file($_FILES['img4']['tmp_name'],$dest.$_FILES['img4']['name']);
                mysqli_query($con,"UPDATE `hall` SET `img4` = '".$_FILES['img4']['name']."' WHERE `hall`.`id` = '".$_GET['id']."' ");
            }
            if (!empty($_FILES['img5']['name'])) {
                move_uploaded_file($_FILES['img5']['tmp_name'],$dest.$_FILES['img5']['name']);
                mysqli_query($con,"UPDATE `hall` SET `img5` = '".$_FILES['img5']['name']."' WHERE `hall`.`id` = '".$_GET['id']."' ");
            }
            if (!empty($_FILES['thumb']['name'])) {
                move_uploaded_file($_FILES['thumb']['tmp_name'],$dest.$_FILES['thumb']['name']);
                mysqli_query($con,"UPDATE `hall` SET `thumb` = '".$_FILES['thumb']['name']."' WHERE `hall`.`id` = '".$_GET['id']."' ");
            }
            // move_uploaded_file($_FILES['img1']['tmp_name'],$destination.$_FILES['img1']['name']);
            // move_uploaded_file($_FILES['img2']['tmp_name'],$destination.$_FILES['img2']['name']);
            // move_uploaded_file($_FILES['img3']['tmp_name'],$destination.$_FILES['img3']['name']);
            // move_uploaded_file($_FILES['img4']['tmp_name'],$destination.$_FILES['img4']['name']);
            // move_uploaded_file($_FILES['img5']['tmp_name'],$destination.$_FILES['img5']['name']);
            // move_uploaded_file($_FILES['thumb']['tmp_name'],$destination.$_FILES['thumb']['name']);         
        

      ?>
      <script type="text/javascript">
        alert('Hall updated sucessfully');
        window.open('owner_dashboard.php','_self');
      </script>

      <?php
      }
}


 ?>


