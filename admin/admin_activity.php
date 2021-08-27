<?php
  include '../config/connect.php';
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
  <title> Protéger | Admin Results</title>
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
include 'navbar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Matching Result</h3>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>

                      <th>Donor Name</th>
                      <th>Donated Item</th>
                      <th>Quantity Donated</th>
                      &nbsp;
                      <th>Health Center Name</th>
                      <th>Requested Item</th>
                      <th>Quantity Needed</th>
                      <th>Status</th>
                    </tr>
                  </thead>

                  <?php
					$con=mysqli_connect("localhost","root","","db_system");
					$query="SELECT distinct a.*, b.*
from (select distinct aa.id, aa.donorName, ab.donateID, ab.goods, ab.quantit
    from tbldonor aa, tbldonated ab
    where aa.id = ab.donateID
    and aa.donorID 
    and ab.donateID ) a,
(select distinct ac.id, ac.organizationName, ad.goods, ad.quantity
from tblorganization ac, tblrequest ad
where ac.id = ad.requestID
) b
where a.goods = b.goods
and a.quantit <= b.quantity";
					$run=mysqli_query($con,$query);
					                while($row=mysqli_fetch_array($run))
					                  {
					                  	$id=$row['donateID'];
					                    $donorid=$row['donateID'];
					                    $donor=$row['donorName'];
					                    $donorid=$row['donateID'];
					                    $good=$row['goods'];
					                    $quantit=$row['quantit'];

					                    $id2=$row['id'];
					                    $org=$row['organizationName'];
					                    $goods=$row['goods'];
					                    $quantity=$row['quantity'];
                    ?>

                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">                    
                      <td>                  
                          <?php echo $donor; ?>
                      </td>
                      <td>                  
                          <?php echo $good; ?>
                      </td>
                      <td>                  
                          <?php echo $quantit; ?>
                      </td>
                      <td>                  
                          <?php echo $org; ?>
                      </td>
                      <td>                  
                          <?php echo $goods; ?>
                      </td>
                      <td>                  
                          <?php echo $quantity; ?>
                      </td>
                      <td><a class="badge badge-primary delme" data-confirm="Are you sure you want to delete this item?" disabled>Not yet recieved</a></td>
                    </tr>
                    <tr class="expandable-body">
                      <td colspan="7">
                        <p>
                        </p>
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
}
  else
  {
    if($_SESSION['user_sid']==session_id())
    {
      header("location:../login.php");    
    }
    else{
      header("location:../login.php");
    }
  }
?>
