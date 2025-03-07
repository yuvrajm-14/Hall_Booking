<?php 
include('admin_header.php');
$view_staff=new admin;

$all_staffs=$view_staff->show_all_staff_type();
$staff_info=$view_staff->show_single_staff($_GET['id']);


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
                  <h3 class="mb-0">STAFF INFORMATION</h3>
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
                        <h3 class="mb-0">Staff Information</h3>
                      </div>
                      
                    </div>    
                  </div>
                  <div class="card-body" >
                    <form id="add_staff" method="post" enctype="multipart/form-data">
                      
                      <div class="pl-lg-4">
                        <div class="row">

                          <div class="col-12">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Name</label>
                              <input type="text" name="name" value="<?php echo $staff_info['name']; ?>" class="form-control form-control-alternative" placeholder="Name" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Mobile Number</label>
                              <input type="text" name="mobile" value="<?php echo $staff_info['mobile']; ?>" maxlength="10" class="form-control form-control-alternative" placeholder="Mobile Number" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Address</label>
                              <textarea class="form-control form-control-alternative" name="address" placeholder="Address" cols="5"><?php echo $staff_info['address']; ?></textarea>
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-first-name">Staff Type</label>
                              <select class="form-control"  name="staff_type">
                                <option value="">Select Staff Type</option>
                                <?php foreach ($all_staffs as $all_staff) {
                                ?>
                                <option <?php if($all_staff['name']==$staff_info['type']){ echo "selected=''";} ?> value="<?php echo $all_staff['name']; ?>"><?php echo $all_staff['name']; ?></option>

                                <?php
                                } ?>
                                
                              </select>
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Joining Date</label>
                              <input type="date" name="joining_date" value="<?php echo $staff_info['joining_date']; ?>" class="form-control form-control-alternative" placeholder="joining_date" >
                            </div>
                          </div>       
                          
   
                          
                        </div>
                        
                      </div>
                      
                      <div class="pl-lg-4 mt-4">
                      
                        <!-- <div class="row">
                          <div class="col text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          </div>
                          
                        </div> -->
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
$view_staff->edit_staff($_POST['name'],$_POST['mobile'],$_POST['staff_type'],$_POST['address'],$_POST['joining_date'],$_GET['id']);
}


 ?>


