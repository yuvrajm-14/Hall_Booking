<?php 
include('admin_header.php');
$add_retailer=new admin;
$retailers=$add_retailer->show_retailer();

if (isset($_GET['deleteid'])) {
$add_retailer->delete_retailer($_GET['deleteid']);
}

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
                  <h3 class="mb-0">ADD RETAILER</h3>
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
                        <h3 class="mb-0">Retailer Information</h3>
                      </div>
                      
                    </div>    
                  </div>
                  <div class="card-body" >
                    <form id="add_paper" method="post">
                      
                      <div class="pl-lg-4">
                        <div class="row justify-content-center">
                          <div class="col-6">
                            <div class="form-group focused">
                              <label class="form-control-label" for="input-username">Retailer Name</label>
                              <input type="text" id="input-username" name="name" class="form-control form-control-alternative" placeholder="Retailer Name" >
                            </div>
                          </div>

                       
                          
                        </div>
                        
                      </div>
                      
                      <div class="pl-lg-4 mt-4">
                      
                        <div class="row">
                          <div class="col text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                          </div>
                          
                        </div>
                      </div>
         
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 my-5">
                <table id="datatable" class="table align-items-center table-flush mb-3 table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <?php 
                    foreach ($retailers as $retailer ) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $retailer['rid']; ?>
                      </td>
                      <td>
                        <?php echo $retailer['name']; ?>
                      </td>
                      
                      
                      <td class="text-right">
                        <div class="dropdown">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="admin_edit_retailer.php?id=<?php echo $retailer['rid']; ?>">View</a>
                            <a class="dropdown-item" href="admin_edit_retailer.php?id=<?php echo $retailer['rid']; ?>">Update</a>
                            <a class="dropdown-item" href="admin_add_retailer.php?deleteid=<?php echo $retailer['rid']; ?>">Delete</a>
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
  $add_retailer->add_retailer($_POST['name']);
}


 ?>