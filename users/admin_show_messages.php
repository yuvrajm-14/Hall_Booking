<?php 
include('admin_header.php');
$show_message=new admin;
$show_messages=$show_message->show_all_contact();
// $products=$show_sale->show_product();

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
                  <h3 class="mb-0">All Messages</h3>
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            
             
              <div class="col-12 my-5">
                <table id="datatable"  class="table  table-flush mb-3 " style="width: 100%">
                  <thead class="thead-light">
                    <tr >
                      <th scope="col">ID</th>
                      <th scope="col">Email</th>
                      <th scope="col">Number</th>
                      <th scope="col">Message</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <?php 
                    foreach ($show_messages as $show_message_mon ) {
                    ?>
                    <tr>
                      
                      <td>
                        <?php echo $show_message_mon['id']; ?>
                      </td>
                      <td>
                        <?php echo $show_message_mon['email']; ?>
                      </td>
                      <td>
                        <?php echo $show_message_mon['mobile']; ?>
                      </td>
                      <td>
                        <?php echo $show_message_mon['message']; ?>
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