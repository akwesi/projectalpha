<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AlphaSight</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Survey Analysis
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Overview</p>
                </a>
              </li>
              <li class="nav-item" >
                <a href="sub-overview.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-overview</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Health check</p>
                </a>
              </li>

            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header ">
                          <h3 class="card-title">Administration</h3></div>
                      <!-- /.card-header -->
                      <div class="card-body">


                          <div class="row">
                              <!--start of first column-->
                              <div class="col-sm-12">
                                  <div class="chart text-center">
                                 <center><input  type="text" class="knob" id="dial_administration" data-readonly="true" value="0" data-step=".01" data-max="5" data-width="150" data-height="150">
                                 </center>    </div>
                              </div>


                          </div>
                          <!--End of first column in row-->
                      </div>
                  </div>
              </div>
          </div>
<!--eND OF FIRST CARD-->

<!--start of 2nd card-->
          <div class="row">
              <div class="col-md-12 d-none d-md-block" style="padding-top:5px">
                  <div class="card">
                      <div class="card-header ">
                          <h3 class="card-title">Quarterly Overview</h3><div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                          </div>
                      </div>
                      <div class="card-body">


                              <table class="table table-bordered table-hover table-responsive">
                                  <thead class="bg-gray-light">
                                  <tr>
                                      <th rowspan="2" class=" ">SUB-FUNCTION</th>
                                      <th colspan="4" class="text-center">AVERAGE BUSINESS HEALTH SCORE</th>

                                      <th rowspan="2" class="">SUB-FUNCTION</th>
                                      <th colspan="4" class="text-center">AVERAGE BUSINESS HEALTH SCORE</th>
                                  </tr>
                                  <tr>
                                      <th >Q1</th>
                                      <th >Q2</th>
                                      <th >Q3</th>
                                      <th >Q4</th>

                                      <th >Q1</th>
                                      <th >Q2</th>
                                      <th >Q3</th>
                                      <th >Q4</th>
   </tr>

                                  </thead>

                                  <tr>
                                      <td >Internal and external correspondence</td>
                                      <td class="internal_external"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                      <td >Front desk management</td>
                                      <td  class="front_desk"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>

                                  <tr>
                                      <td >Scheduling of meetings and appointments</td>
                                      <td class="scheduling_meetings"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                      <td >Meeting minutes and action follow ups</td>
                                      <td  class="meeting_minutes"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>


                                  </tr>

                                  <tr>
                                      <td >Office supplies/logistics management</td>
                                      <td  class="office_supplies"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                      <td >Files and record management</td>
                                      <td class="files_record"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                  </tr>

                                  <tr>
                                      <td >Office sanitation</td>
                                      <td  class="office_sanitation"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                      <td >Printing and publications</td>
                                      <td  class="printing_publications"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Travel and transport management</td>
                                      <td  class="travel_transport"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                      <td >Administrative staff management</td>
                                      <td  class="admin_staff"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Office project coordination</td>
                                      <td  class="office_project"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>

                                  

                                  </tbody>

                              </table>
                          </div>

                      </div>
                      <!-- /.card-body -->

                  </div>

              </div>



          <!--end of 2nd card-->


<!--start of 3rd card-->
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header ">
                          <h3 class="card-title">Chart Overview</h3><div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="chart">
                              <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <!-- /.card-body -->

                  </div>

              </div>
          </div>


          <!--end of 3rd card-->

<!--start of 4th card-->
          <div class="row  d-sm-block d-md-none ">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-header ">
                          <h3 class="card-title">Chart Overview</h3><div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                          </div>
                      </div>
                      <div class="card-body">



                          <table class="table table-bordered table-hover table-responsive">
                                  <thead class="bg-gray-light">
                                  <tr>
                                      <th rowspan="2" class="align-middle">SUB-FUNCTION</th>
                                      <th colspan="4">AVERAGE BUSINESS HEALTH SCORE</th>
                                  </tr>
                                  <tr>
                                      <th >Q1</th>
                                      <th >Q2</th>
                                      <th >Q3</th>
                                      <th >Q4</th>
                                  </tr>

                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td >Internal and external correspondence</td>
                                      <td class="internal_external"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Front desk management</td>
                                      <td  class="front_desk"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>

                                  <tr>
                                      <td >Scheduling of meetings and appointments</td>
                                      <td class="scheduling_meetings"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Meeting minutes and action follow ups</td>
                                      <td  class="meeting_minutes"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                  </tr>

                                  <tr>
                                      <td >Office supplies/logistics management</td>
                                      <td  class="office_supplies"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Files and record management</td>
                                      <td class="files_record"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>

                                  </tr>

                                  <tr>
                                      <td >Office sanitation</td>
                                      <td  class="office_sanitation"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Printing and publications</td>
                                      <td  class="printing_publications"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Travel and transport management</td>
                                      <td  class="travel_transport"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Administrative staff management</td>
                                      <td  class="admin_staff"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                  <tr>
                                      <td >Office project coordination</td>
                                      <td  class="office_project"></td>
                                      <td ></td>
                                      <td ></td>
                                      <td ></td>
                                  </tr>
                                


                                  </tbody>

                              </table>
                      </div>


                      </div>
                      <!-- /.card-body -->

                  </div>

              </div>
          </div>


          <!--end of 4th card-->


        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



    <footer class="main-footer text-center">
        <strong><?php echo "Copyright &copy ".Date('Y');?> <a href="#"> AlphaSight </a></strong>
        All rights reserved.

    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>

<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- datatables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="result_calculations.js"></script>

<script>
    $(function () {

        var   administration_data = [];
        var   administration_label= [];

          administration_data = JSON.parse(sessionStorage.getItem('administration_data'));

        administration_label = ['internal external','front desk','scheduling meetings','meeting minutes',
           'office supplies','files record','office sanitation','printing publications','travel transport',
           'admin staff','office project'];

        //  alert(procurement_data);
       var areaChartData = {
            labels  :   administration_label,
            datasets: [
                {
                    label               : 'Rating',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#010aba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                :  administration_data
                }

            ]
        };

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d');

    var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    max:5,
                    stepSize:1
                }
            }]
        }

    };


    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data:  areaChartData,
        options: barChartOptions
    })

    });
</script>

</body>
</html>
