<?php 
include('owner_header.php');
$admin_dash=new owner;
$year = date("Y"); 
$month = date("m"); 

?>
<script type="text/javascript">
  console.log(<?php echo $this_month_sale; ?>);
</script>
<?php


$this_month_booking=$admin_dash->month_booking_count($month,$year,$_SESSION['owner']);
$last_month_booking=$admin_dash->month_booking_count($month-1,$year,$_SESSION['owner']);
$total_staff=$admin_dash->total_staff_count($_SESSION['owner']);
$total_earning=$admin_dash->total_earning($_SESSION['owner']);

$five_bookings=$admin_dash->show_five_booking($_SESSION['owner']);
$show_staffs=$admin_dash->show_five_staff($_SESSION['owner']);



$jan_sale=$admin_dash->month_booking_count(1,$year,$_SESSION['owner']);$feb_sale=$admin_dash->month_booking_count(2,$year,$_SESSION['owner']);
$mar_sale=$admin_dash->month_booking_count(3,$year,$_SESSION['owner']);$apr_sale=$admin_dash->month_booking_count(4,$year,$_SESSION['owner']);
$may_sale=$admin_dash->month_booking_count(5,$year,$_SESSION['owner']);$jun_sale=$admin_dash->month_booking_count(6,$year,$_SESSION['owner']);
$jul_sale=$admin_dash->month_booking_count(7,$year,$_SESSION['owner']);$aug_sale=$admin_dash->month_booking_count(8,$year,$_SESSION['owner']);
$sep_sale=$admin_dash->month_booking_count(9,$year,$_SESSION['owner']);$oct_sale=$admin_dash->month_booking_count(10,$year,$_SESSION['owner']);
$nov_sale=$admin_dash->month_booking_count(11,$year,$_SESSION['owner']);$dec_sale=$admin_dash->month_booking_count(12,$year,$_SESSION['owner']);
?>

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-1">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">This Month Bookings </h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $this_month_booking; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="ni ni-box-2"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Last Month Booking</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $last_month_booking; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Staff</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $total_staff; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="ni ni-tag"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Earning</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $total_earning['total']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Monthly Bookings </h2>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                      <!-- <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Month</span>
                        <span class="d-md-none">M</span>
                      </a> -->
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h2 class="mb-0">Total orders</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              
              <div class="chart">
                <canvas id="chart-orders" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Recent Bookings</h3>
                </div>
                <div class="col text-right">
                  <a href="owner_view_booking.php?id=<?php echo $_SESSION['owner']; ?>" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table id="" class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Event</th>

                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($five_bookings as $five_booking) {
                  ?>
                  <tr>
                    <th scope="row">
                      <?php echo $five_booking['date']; ?>
                    </th>
                    <td>
                      <?php echo $five_booking['event']; ?>
                    </td>
                    <td>
                      <?php echo $five_booking['start_time']; ?>
                    </td>
                    <td>
                      <?php echo $five_booking['end_time']; ?>
                    </td>
                    <td>
                      <?php echo $five_booking['status']; ?>
                    </td>
                  </tr>
                  <?php
                  } ?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Recent Staff</h3>
                </div>
                <div class="col text-right">
                  <a href="owner_view_staff.php" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Type</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($show_staffs as $show_staff) {
                  ?>
                  <tr>
                    <th scope="row">
                      <?php echo $show_staff['name']; ?>
                    </th>
                    <td>
                      <?php echo $show_staff['mobile']; ?>
                    </td>
                    <td>
                      <?php echo $show_staff['type']; ?>
                    </td>
                  </tr>

                  <?php
                  } ?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>  
      <!-- Footer -->


    
<?php 
include('footer.php');
?>

<script type="text/javascript">
// Sales chart
//

var SalesChart = (function() {

  // Variables

  var $chart = $('#chart-sales');


  // Methods

  function init($chart) {

    var salesChart = new Chart($chart, {
      type: 'line',
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              lineWidth: 1,
              color: Charts.colors.gray[900],
              zeroLineColor: Charts.colors.gray[900]
            },
            ticks: {
              callback: function(value) {
                if (!(value % 2)) {
                  return  value ;
                }
              }
            }
          }]
        },
        tooltips: {
          callbacks: {
            label: function(item, data) {
              var label = data.datasets[item.datasetIndex].label || '';
              var yLabel = item.yLabel;
              var content = '';

              if (data.datasets.length > 1) {
                content += '<span class="popover-body-label mr-auto">' + label + '</span>';
              }

              content += '<span class="popover-body-value">' + yLabel + '</span>';
              return content;
            }
          }
        }
      },
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Performance',
          data: [<?php echo $jan_sale; ?>,<?php echo $feb_sale; ?>,<?php echo $mar_sale; ?>,<?php echo $apr_sale; ?>,<?php echo $may_sale; ?>,<?php echo $jun_sale; ?>,<?php echo $jul_sale; ?>,<?php echo $aug_sale; ?>,<?php echo $sep_sale; ?>,<?php echo $oct_sale; ?>,<?php echo $nov_sale; ?>,<?php echo $dec_sale; ?>]
        }]
      }
    });

    // Save to jQuery object

    $chart.data('chart', salesChart);

  };


  // Events

  if ($chart.length) {
    init($chart);
  }

})();
</script>
