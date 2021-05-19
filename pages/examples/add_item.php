<?php
  include '../../connect.php';
  $user_id = $_SESSION['user_id'];







  if($_SESSION['admin_sid']==session_id())
  {
    ?>

<!DOCTYPE html>
<html>
<?php
$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['lastname']; 
$username = $row['username'];
$email = $row['email'];
$FN = $row['firstname'];
$LN = $row['lastname'];
$address = $row['Address'];
$city = $row['City'];
$country = $row['Country'];
$postal = $row['Postal'];
$occupation = $row['Occupation'];
$title = $row['Title'];
$workplace = $row['Workplace'];
$pic = $row['pic_location'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Protéger | Admin Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
</head>

<style>
 [class*=sidebar-light-] {
    background-color: white !important;
  }

  [class*=sidebar-light-] .sidebar a {
    color: #05386b;

  }

  .navbar-white {
    background-color: #379683;
    color:#1f2d3d;
  }

  .navbar-light .navbar-nav .nav-link {
    color: white;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/blue.png" alt="AdminLTELogo" height="60" width="200">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
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
      <img src="../../dist/img/Favicon.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">Proteger</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image"><img src="../../dist/img/AdminLTELogo.png" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="pages/examples/org_profile.php" class="d-block"><?php echo $username;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
<!--       <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="../../admin_dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">ACTIVITY</li>
          <li class="nav-item">
            <a href="org_activity.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Matching Results
              </p>
            </a>
          </li>

          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <li class="nav-header"></li>
          <br>




          <li class="nav-item">
            <a href="../../logout-router.php" class="nav-link bg-danger">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Log-out</p>
            </a>
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
            <h1 class="m-0">Item Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Item Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Item</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form action="../../addDetails.php" method="post">
              <div class="form-group">
                <label for="itemID">Item ID</label>
                <input type="text" class="form-control" name="itemID" value="<?php

                    if(isset($itemid))
                      {
                        echo $itemid;
                      }
                      else
                      {
                        echo "";

                      }

               ?>"
               id="itemID" placeholder="Enter item ID">
              </div>
              <div class="form-group">
                <label for="itemName">Item Name</label>
                <input type="text" id="itemName" placeholder="Enter your item name" name="itemName" class="form-control" value="<?php

                    if(isset($itemname))
                      {
                        echo $itemname;
                      }
                      else
                      {
                        echo "";

                      }

               ?>"
               required>
              </div>
              <div class="form-group">
                <label for="itemDescription">Item Description</label>
                <input type="textbox" class="form-control" name="itemDescription" value="<?php

                    if(isset($itemdescription))
                      {
                        echo $itemdescription;
                      }
                      else
                      {
                        echo "";

                      }

               ?>" id="itemDescription" placeholder="Enter your item name" required>
                <!-- <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option selected>Success</option>
                </select> -->
              </div>
              <div class="form-group">
                <label for="itemCategory">Item Category</label>
                <div class="form-control custom-select">
                <?php
        $result1 = mysqli_query($con, "SELECT * FROM tblcategoryforitems;");
        ?>
        <select  name="category">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1['categoryname'];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
              </div>
            </div>
            <div class="form-group">
                <label for="itemStock">Item Stock</label>
                <input type="textbox" class="form-control" name="item_stock" value="<?php

                    if(isset($itemstock))
                      {
                        echo $itemstock;
                      }
                      else
                      {
                        echo "";

                      }

               ?>" id="item_stock" placeholder="Enter Item Stock" required>
                <!-- <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option selected>Success</option>
                </select> -->
              </div>
        <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" name="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
<!--     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> -->
<!--     All rights reserved. -->
    <div class="float-right d-none d-sm-inline-block">
 <!--      <b>Version</b> 3.1.0 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>

</body>
</html>



<script>
   $(function() {
        $("#uploadPhotos").change(function() {
            var input = this;
            var url = $(this).val();
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();

            if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(".previewPic").attr("src", e.target.result);
                    console.log(url);
                }
                reader.readAsDataURL(input.files[0]);

            } else {

                $(".previewPic").attr("src", "");
                console.log(url);
            }


        });
    });
</script>

<?php
  
} 
}
  else
  {
    if($_SESSION['user_sid']==session_id())
    {
      header("location:../../login.php");    
    }
    else{
      header("location:../../login.php");
    }
  }
?>
