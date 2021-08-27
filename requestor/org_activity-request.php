<?php
  include '../config/connect.php';
  $user_id = $_SESSION['user_id'];

$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['lastname']. ", " .$row['firstname']; 
$username = $row['username'];
$email = $row['email'];
$Contact = $row['contact'];
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

}



  if($_SESSION['user_sid']==session_id())
  {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Activity</title>
  <link rel="shortcut icon" type="image/jpg" href="../dist/img/favicon.png"/>
</head>
<?php
include 'header.php';
?>

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
    <img class="animation__shake" src="../dist/img/blue.png" alt="AdminLTELogo" height="60" width="200">
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
<?php 
include'navbar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Request</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Transaction Number</th>
                      <th>Item ID No.</th>
                      <th>Health Center Name</th>
                      <th>Email</th>
                      <th>Date of Request</th>
                      <th>Request Status</th>
                      <th>Operation</th>
                    </tr>
                  </thead>

                  <?php
                    $con=mysqli_connect("localhost", "root", "", "db_system");

                    if (mysqli_connect_errno()) {
                      echo "Unable to connect to the database : " .mysqli_connect_errno();
                    }

                    $query="SELECT * FROM tblorganization";
                    $run=mysqli_query($con,$query);
                    while ($row=mysqli_fetch_array($run)) {
                      $id=$row['id'];
                      $firstName=$row['orgID'];
                      $lastName=$row['organizationName'];
                      $email=$row['Email'];
                      $Date=$row['Date'];
                    ?>

                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                      <td><?php echo $id; ?></td>
                      <td><?php echo $firstName; ?></td>
                      <td><?php echo $lastName; ?></td>
                      <td><?php echo $email; ?></td>
                       <td><?php echo $Date; ?></td>
                       <td class="text-center"><a class="badge badge-success delme">Approved</a></td>
                      <td><a href="../config/delete-request.php?deleteid=<?php echo $id; ?>" class="badge badge-danger delme" data-confirm="Are you sure you want to delete this item?">Pull-out request</a>
                      </td>

                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <h5>Information</h5>
                          <p><b> ID:</b> <?php echo $id; ?><br>
                          <b>Request ID: </b> <?php echo $firstName; ?><br>
                          <b>Health Center Branch: </b> <?php echo $lastName; ?><br>
                          <b>Email:</b> <?php echo  $email; ?><br>
                          <b>Date Requested:</b> <?php echo $Date; ?></p><br>    
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
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
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
  else
  {
    if($_SESSION['admin_sid']==session_id())
    {
      header("location:../login.php");    
    }
    else{
      header("location:../login.php");
    }
  }
?>