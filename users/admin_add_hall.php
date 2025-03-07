<?php 
include('admin_header.php');
include('classes/dbcon2.php');
$add_hall=new admin;


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
                  <h3 class="mb-0">ADD HALL</h3>
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
                    <form id="add_hall" method="post" enctype="multipart/form-data">
                      
                      <div class="pl-lg-4">
                        <div class="row">

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Hall Name</label>
                              <input type="text" name="name" class="form-control form-control-alternative" placeholder="Name" >
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Description</label>
                              <textarea class="form-control form-control-alternative" placeholder="Description" style="resize: none;" name="description" cols="5"></textarea>
                            </div>
                          </div>

                          <div class="col-12">
                            <h2 class="h3 my-4">Hall Photos</h2>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 1 : </label>
                              <input type="file" name="img1" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 2 : </label>
                              <input type="file" name="img2" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 3 : </label>
                              <input type="file" name="img3" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 4 : </label>
                              <input type="file" name="img4" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Image 5 : </label>
                              <input type="file" name="img5" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Thumbnail Image : </label>
                              <input type="file" name="thumb" accept="image/*" class="form-control">
                            </div>
                          </div>

                          <div class="col-12">
                            <h2 class="h3 my-4">More Information</h2>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Address</label>
                              <textarea class="form-control form-control-alternative" name="address" style="resize: none;" placeholder="Address" cols="5"></textarea>
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Location</label>
                              <input type="text" name="location" class="form-control form-control-alternative" placeholder="Location" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">People Capacity</label>
                              <input type="text" name="capacity" class="form-control form-control-alternative" placeholder="People Capacity" >
                            </div>
                          </div>

                          

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-first-name">Hall Status</label>
                              <select class="form-control"  name="status">
                                <option value="">Select Hall Status</option>
                                <option value="open">Open</option>
                                <option value="closed">Closed</option>
                                <option value="inmaintainance">In Maintainance</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-12">
                            <h2 class="h3 my-4">Hall Owner Information</h2>
                          </div>

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_name">Hall Owner Name</label>
                              <input type="text" name="owner_name" class="form-control form-control-alternative" placeholder="Hall Owner Name" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_username">Hall Owner Username</label>
                              <input type="text" name="owner_username" class="form-control form-control-alternative" placeholder="Hall Owner Username" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_password">Hall Owner Password</label>
                              <input type="text" name="owner_password" maxlength="6" class="form-control form-control-alternative" placeholder="Hall Owner Password" >
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
  $password=md5($_POST['owner_password']);
  $stmt=mysqli_query($con,"INSERT INTO `hall` (`name`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`, `thumb`, `address`, `location`, `capacity`, `status`, `owner_name` , `owner_username`, `owner_password`) VALUES ('".$_POST['name']."', '".$_POST['description']."', '".$_FILES['img1']['name']."', '".$_FILES['img2']['name']."', '".$_FILES['img3']['name']."', '".$_FILES['img4']['name']."', '".$_FILES['img5']['name']."', '".$_FILES['thumb']['name']."', '".$_POST['address']."', '".$_POST['location']."', '".$_POST['capacity']."', '".$_POST['status']."', '".$_POST['owner_name']."', '".$_POST['owner_username']."', '".$password."')");
      if ($stmt==TRUE) {
      $last_id = mysqli_insert_id($con);
      $dir=mkdir("uploaded_images/"."hall00".$last_id);
            $destination="uploaded_images/"."hall00".$last_id."/";

            move_uploaded_file($_FILES['img1']['tmp_name'],$destination.$_FILES['img1']['name']);
            move_uploaded_file($_FILES['img2']['tmp_name'],$destination.$_FILES['img2']['name']);
            move_uploaded_file($_FILES['img3']['tmp_name'],$destination.$_FILES['img3']['name']);
            move_uploaded_file($_FILES['img4']['tmp_name'],$destination.$_FILES['img4']['name']);
            move_uploaded_file($_FILES['img5']['tmp_name'],$destination.$_FILES['img5']['name']);
            move_uploaded_file($_FILES['thumb']['tmp_name'],$destination.$_FILES['thumb']['name']);         
        

      ?>
      <script type="text/javascript">
        alert('Hall inserted sucessfully');
        window.open('admin_show_hall.php','_self');
      </script>

      <?php
      }
}


 ?>


