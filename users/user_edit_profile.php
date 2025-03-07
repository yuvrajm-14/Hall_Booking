<?php 
include('user_header.php');
$view_profile=new user;

$profile=$view_profile->show_user_info($_SESSION['user']);



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
                  <h3 class="mb-0">Your Profile</h3>
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
                        <h3 class="mb-0">Your Information</h3>
                      </div>
                      
                    </div>    
                  </div>
                  <div class="card-body" >
                    <form method="post" enctype="multipart/form-data">
                      
                      <div class="pl-lg-4">
                        <div class="row">

                          

                         

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_name">Name</label>
                              <input type="text" disabled="" name="name" class="form-control form-control-alternative" value="<?php echo $profile['name']; ?>" placeholder="Name" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_username">Mobile</label>
                              <input type="text" disabled="" name="mobile" class="form-control form-control-alternative" value="<?php echo $profile['mobile']; ?>"  placeholder="Mobile Number" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_username">Alternate Mobile</label>
                              <input type="text" name="alt_mobile" class="form-control form-control-alternative" value="<?php echo $profile['alt_mobile']; ?>"  placeholder="Mobile Number" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_password">Email</label>
                              <input type="email" name="email" class="form-control form-control-alternative" value="<?php echo $profile['email']; ?>" placeholder="Email Address" >
                            </div>
                          </div>

                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="owner_password">Password</label>
                              <input type="password" name="password" class="form-control form-control-alternative" value="<?php echo $profile['password']; ?>" placeholder="Password" >
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
$view_profile->update_profile($_POST['email'],$profile['password'],$_POST['password'],$_SESSION['user'],$_POST['alt_mobile']);

}


 ?>


