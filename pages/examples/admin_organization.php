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
  <title>AdminLTE 3 | User Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
<body class="hold-transition sidebar-mini">
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
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/Favicon.png" alt="AdminLTE Logo" class="brand-image img-circle " style="opacity: .8">
      <span class="brand-text font-weight-light">Proteger</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image"><img src="../../dist/img/AdminLTELogo.png" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $username;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="../../admin_dashboard.php" class="nav-link">
              <i class="nav-icon fab fa-dashcube"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">ACTIVITY</li>
          <li class="nav-item">
            <a href="admin_activity.php" class="nav-link">
              <i class=" nav-icon fas fa-poll-h"></i>
              <p>
                Matching Results
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_itemsnew.php" class="nav-link">
              <i class=" nav-icon fas fa-box-open"></i>
              <p>
                Manage Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_users.php" class="nav-link">
              <i class=" nav-icon fas fa-users-cog"></i>
              <p>
                Manage Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_organization.php" class="nav-link">
              <i class=" nav-icon fas fa-hospital"></i>
              <p>
                Manage Requests
              </p>
            </a>
          </li>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
         
          




          <li class="nav-item">
            <a href="../../logout-router.php" class="nav-link bg-danger">
              <i class="nav-icon fas fa-sign-out-alt"></i>

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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Manage Requests</h3>
                  <div class="project-actions text-right">
    			  </div>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>

      

                    <tr>
                      <th>ID</th>
                      <th>Health Center</th>
                      <th>Request</th>
                      <th>Quantity</th>
                      <th>Date Requested</th>
                      <th>Operation</th>
                    </tr>
                  </thead>




 <?php 

              $con=mysqli_connect("localhost","root","","db_system");

              //checking the connection
              if(mysqli_connect_errno())
                  {
                    echo "Unable to connect to the database : " .mysqli_connect_error();
                  }

                $query="SELECT * FROM tblorganization";
                $run=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($run))
                  {
                    $id=$row['organizationID'];
                    $organizationname=$row['organizationName'];
                    $Address=$row['Address'];
                    $city=$row['City'];
                    $goods=$row['Goods'];
                    $qty=$row['Quantity'];
                    $Date=$row['Date'];
      
      
                ?>
                
                  <tbody>
         <tr data-widget="expandable-table" aria-expanded="false">

         <td><?php echo $id; ?></td>                
          <td><?php echo $organizationname; ?></td>
          <td><?php echo $goods; ?></td>
           <td><?php echo $qty; ?></td>
          <td><?php echo $Date; ?></td>
          <td class="project-actions text-right">
          <a class="btn btn-danger btn-sm" href="../../delete_request.php?deleteid=<?php echo $id; ?>" data-confirm="Are you sure you want to delete this item?">
          <i class="fas fa-trash"></i> Delete</a>
          </td>
        </tr>
                
          <tr class="expandable-body">
           <td colspan="5">
           <p> Health Center : 
          	 			 <?php echo $organizationname; ?>
          <br>
          Address : 
          				  <?php echo $Address; ?>
          <br>
          City : 
          				  <?php echo $city; ?>
          <br>
          Date Joined : 
                    <?php echo $Date; ?>

          				  
          </p>
          </br>
          </td>
         </tr>

        
                  </tbody>
                  <?php } ?>
                
                </table>
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script>

    $('A[data-confirm]').on("click", function (e) 
    {
      e.preventDefault();

      var choice = confirm($(this).attr('data-confirm'));

      if (choice)
       {
        window.location.href = $(this).attr('href');
       }
    });

    </script>


        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
<!--     <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. -->
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
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
      header("location:login.php");    
    }
    else{
      header("location:login.php");
    }
  }
?>
