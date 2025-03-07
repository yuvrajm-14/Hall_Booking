<?php 
include('session/user_session.php');
include('classes/user_class.php');
error_reporting(0);

$aash=new user;
$user_info=$aash->show_user_info($_SESSION['user']);


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Hall Portal
  </title>
  <!-- Favicon -->
  <link href="assets/img/brand/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />

  <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
  <!-- Responsive datatable examples -->
  <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
   <!-- Content Wrapper. Contains page content -->
  <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"> 
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- Alertify css -->
  <link href="plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="./assets/img/brand/logo.png" class="navbar-brand-img "  alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <!-- <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a> -->
            <div class="dropdown-divider"></div>
            <a href="user_edit_profile.php" class="dropdown-item">
              <i class="ni ni-badge"></i>
              <span>Profile</span>
            </a>
            <a href="user_logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!-- <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form> -->
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="user_show_hall.php">
              <i class="ni ni-tag text-primary"></i> Bookings
            </a>
          </li>
          <li class="nav-item  active ">
            <a class="nav-link  active " href="user_show_hall_for_booking.php">
              <i class="ni ni-square-pin text-primary"></i> Book More Halls
            </a>
          </li>

          <li class="nav-item  active ">
            <a class="nav-link  active " href="user_logout.php">
              <i class="ni ni-button-power text-primary"></i> Log Out
            </a>
          </li>

          <!-- <li class="nav-item  active ">
            <a class="nav-link  active " href="owner_edit_hall.php?id=<?php echo $_SESSION['owner']; ?>">
              <i class="ni ni-tv-2 text-primary"></i> Edit Hall
            </a>
          </li> -->
          
         
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#navbar-staff" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-staff">
              <i class="ni ni-chart-bar-32 text-blue"></i>
              <span class="nav-link-text">Staff</span>
            </a>
            <div class="collapse" id="navbar-staff" style="">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="owner_add_staff.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-blue"></i>
                    <span class="sidenav-normal"> Add Staff</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="owner_view_staff.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-blue"></i>
                    <span class="sidenav-normal"> View Staff </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#navbar-purchase" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-purchase">
              <i class="ni ni-cart text-blue"></i>
              <span class="nav-link-text">Purchase</span>
            </a>
            <div class="collapse" id="navbar-purchase" style="">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="admin_add_purchase.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-blue"></i>
                    <span class="sidenav-normal"> Add Purchase</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="admin_show_purchase.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-blue"></i>
                    <span class="sidenav-normal"> View Purchase</span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#navbar-product" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-product">
              <i class="ni ni-tag text-blue"></i>
              <span class="nav-link-text">Products</span>
            </a>
            <div class="collapse" id="navbar-product" style="">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="admin_add_product.php" class="nav-link">
                    <i class="ni ni-tag text-blue"></i>
                    <span class="sidenav-normal"> Product</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_add_product_type.php" class="nav-link">
                    <i class="ni ni-tag text-blue"></i>
                    <span class="sidenav-normal"> Product Type </span>
                  </a>
                </li>

               
                
              </ul>
            </div>
          </li> -->
         <!--  <li class="nav-item">
            <a class="nav-link " href="admin_add_retailer.php">
              <i class="ni ni-circle-08 text-blue"></i> Retailer
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link " href="admin_add_inventory.php">
              <i class="ni ni-box-2 text-blue"></i> Inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="admin_wallet.php">
              <i class="ni ni-credit-card text-orange"></i> Wallet
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link " href="./examples/icons.html">
              <i class="ni ni-tag text-blue"></i> Icons
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
              <i class="ni ni-bullet-list-67 text-blue"></i>
              <span class="nav-link-text">Papers</span>
            </a>
            <div class="collapse" id="navbar-maps" style="">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="admin_add_paper.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-blue"></i>
                    <span class="sidenav-normal"> Add Paper </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="admin_view_paper.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-blue"></i>
                    <span class="sidenav-normal"> View Paper </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="#navbar-student" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-student">
              <i class="ni ni-single-02 text-yellow"></i>
              <span class="nav-link-text">Student</span>
            </a>
            <div class="collapse" id="navbar-student" style="">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a href="admin_add_student.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-yellow"></i>
                    <span class="sidenav-normal"> Add Student </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="admin_view_student.php" class="nav-link">
                    <i class="ni ni-bullet-list-67 text-yellow"></i>
                    <span class="sidenav-normal"> View Student </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="./examples/maps.html">
              <i class="ni ni-pin-3 text-orange"></i> Maps
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/profile.html">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./examples/tables.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Tables
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li> -->
        </ul>
        <!-- Divider -->
        <!-- <hr class="my-3"> -->
        <!-- Heading -->
        
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Mercury Hall</a>
        <!-- Form -->
        <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form> -->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $user_info['name']; ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <!-- <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="user_edit_profile.php" class="dropdown-item">
	              <i class="ni ni-badge"></i>
	              <span>Profile</span>
	          </a>
              <a href="user_logout.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <div class="header bg-gradient-primary pb-3 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <!-- <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  