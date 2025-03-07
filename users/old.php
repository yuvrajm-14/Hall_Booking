<?php 
include('admin_header.php');
$add_qus=new admin;

?>
    <div class="container-fluid mt--7 " style="height: auto;">
      
      <div class="row mt-5">
        <div class="col-12 mb-5 ">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Add Questions</h3>
                  <h5 class="mt-2">Note : Select correct answer by selecting radio button at the start of the each options.</h5>
                </div>
              </div>
            </div>
            <!-- Your Content Start -->
            <form id="add_qus" method="post" style="background-color: #7466e4;">
            <div class="container mt-3 mb-7">
              <?php for ($i=1; $i<=30 ; $i++) {
              ?>
                <div class="row mb-4">
                  <div class="col-12">
                    <div class="card bg-secondary shadow">
                      <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                          <div class="col-8">
                            <h3 class="mb-0">Question <?php echo $i; ?></h3>
                          </div>
                          
                        </div>
                      </div>
                      <div class="card-body">
                          <div class="pl-lg-4">
                            <div class="row">
                              <div class="col-12">
                                <div class="form-group focused">
                                  <label class="form-control-label" for="input-username">Question</label>
                                  <textarea class="form-control" name="qus[<?php echo $i; ?>]" rows="3"></textarea>
                                </div>
                              </div>
                              
                            </div>
                            <div class="row">
                              <div class="col-lg-10">
                                <div class="form-group focused">
                                  <!-- <label class="form-control-label" for="input-last-name"></label>
                                  IG
                                  ans1
                                  q1op1
                                  q1op2
                                  q1op3
                                  q1op4
                                  q1op5

                                   -->

                                  <div class="custom-control custom-radio mb-3">
                                    <!-- Radio input op1 -->
                                    <input name="ans[<?php echo $i; ?>]" class="custom-control-input" value="1" id="q<?php echo $i; ?>op1" type="radio">
                                    <label class="custom-control-label" for="q<?php echo $i; ?>op1"></label>
                                    <!-- text input op1 -->
                                    <input type="text" name="q<?php echo $i; ?>op1[<?php echo $i; ?>]" class="form-control form-control-alternative" placeholder="Option One" >
                                  </div>

                                  <div class="custom-control custom-radio mb-3">
                                    <!-- Radio input op2 -->
                                    <input name="ans[<?php echo $i; ?>]" class="custom-control-input" value="2" id="q<?php echo $i; ?>op2" type="radio">
                                    <label class="custom-control-label" for="q<?php echo $i; ?>op2"></label>
                                    <!-- text input op2 -->
                                    <input type="text" name="q<?php echo $i; ?>op2[<?php echo $i; ?>]" class="form-control form-control-alternative" placeholder="Option Two" >
                                  </div>

                                  <div class="custom-control custom-radio mb-3">
                                    <!-- Radio input op3 -->
                                    <input name="ans[<?php echo $i; ?>]" class="custom-control-input" value="3" id="q<?php echo $i; ?>op3" type="radio">
                                    <label class="custom-control-label" for="q<?php echo $i; ?>op3"></label>
                                    <!-- text input op3 -->
                                    <input type="text" name="q<?php echo $i; ?>op3[<?php echo $i; ?>]" class="form-control form-control-alternative" placeholder="Option Three" >
                                  </div>

                                  <div class="custom-control custom-radio mb-3">
                                    <!-- Radio input op4 -->
                                    <input name="ans[<?php echo $i; ?>]" class="custom-control-input" value="4" id="q<?php echo $i; ?>op4" type="radio">
                                    <label class="custom-control-label" for="q<?php echo $i; ?>op4"></label>
                                    <!-- text input op4 -->
                                    <input type="text" name="q<?php echo $i; ?>op4[<?php echo $i; ?>]" class="form-control form-control-alternative" placeholder="Option Four" >
                                  </div>

                                  <div class="custom-control custom-radio mb-3">
                                    <!-- Radio input op5 -->
                                    <input name="ans[<?php echo $i; ?>]" class="custom-control-input" value="5" id="q<?php echo $i; ?>op5" type="radio">
                                    <label class="custom-control-label" for="q<?php echo $i; ?>op5"></label>
                                    <!-- text input op5 -->
                                    <input type="text" name="q<?php echo $i; ?>op5[<?php echo $i; ?>]" class="form-control form-control-alternative" placeholder="Option Five" >
                                  </div>

                                  
                                  
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!-- <div class="pl-lg-4 mt-4">
                            <div class="row">
                              <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div> 
                            </div>
                          </div> -->
                          
                      </div>
                    </div>
                  </div>
                </div>
              <?php 
              } ?>
              <div class="pl-lg-4 mt-4">
                <div class="row">
                  <div class="col text-center">
                    <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                  </div> 
                </div>
              </div>
              
              
            </div>
            </form>

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
  $qus=$_POST['qus'];
  $ans=$_POST['ans'];
  for ($j=1; $j <=30 ; $j++) {
    $op1=$_POST['q'.$j.'op1'];
    $op2=$_POST['q'.$j.'op2'];
    $op3=$_POST['q'.$j.'op3'];
    $op4=$_POST['q'.$j.'op4'];
    $op5=$_POST['q'.$j.'op5'];
    
    // print_r($_POST['qus']);
    // print_r($_POST['q'.$j.'op1']);
    $add_qus->add_qus(1,$j,$qus[$j],$op1[$j],$op2[$j],$op3[$j],$op4[$j],$op5[$j],$ans[$j]);
    
    
  }


  # code...
}


 ?>