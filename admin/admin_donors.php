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
$role = $row['role']; 
$name = $row['lastname']; 
$username = $row['username'];
$email = $row['email'];
$FN = $row['firstname'];
$LN = $row['lastname'];
$address = $row['Address'];
$barangay = $row['Barangay'];
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
  <title> Protéger | Admin Donors</title>
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
              	<form class="formValidate" id="formValidate1" method="post" action="../config/user-router.php" novalidate="novalidate">
                <h3 class="card-title">Manage Donors</h3>
                  <div class="project-actions text-right">
      				<button class="btn btn-primary btn-sm" type="submit" name="action">Update</button>
    			  </div>
              </div>
              <!-- ./card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      
                      <th>Username</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Address</th>
                      <th>Barangay</th>
                      <th>City</th>
                      <th>Operation</th>
                    </tr>
                  </thead>

                  <tbody>
                       <?php
        $result = mysqli_query($con, "SELECT * FROM `users` WHERE role = 'User'");
        while($row = mysqli_fetch_array($result))

        {

          echo '<tr data-widget="expandable-table" aria-expanded="false">';
          echo '<td>'.$row["username"].'</td>'; 
          echo '<td>'.$row["email"].'</td>';  
          echo '<td>'.$row["contact"].'</td>';
          echo '<td>'.$row["Address"].'</td>';
          echo '<td>'.$row["Barangay"].'</td>';
          echo '<td>'.$row["City"].'</td>';                
          echo '<td><select id="test-dropdown" onchange="choice(this)" name="'.$row['id'].'_deleted">
                      <option value="1"'.($row['deleted'] ? 'selected' : '').'>Disabled</option>
                      <option value="0"'.(!$row['deleted'] ? 'selected' : '').'>Enabled</option>
                    </select></td>
                    <script>
                      function choice(select) {
                        alert("User is now " + select.options[select.selectedIndex].text);
                      }
                    </script>';
          echo "</tr>";
                
          echo '<tr class="expandable-body">';
          echo '<td colspan="5">';
          echo '<h4>Basic Information</h4>';
          echo '<p> First Name : ';
          	 			  echo $row["firstname"]; 
          echo '
          		<br>Last Name : ';
          	 			  echo $row["lastname"]; 
          echo '<br>Address : ';
          				  echo $row["Address"];
          echo '<br>Barangay : ';
                    echo $row["Barangay"];
          echo '<br>Contact Number : ';
          				  echo $row["contact"];
          echo '<br>City : ';
          				  echo $row["City"];
          echo '<br>Date Joined : ';
          				  echo $row["date"];
          echo '</p></br>';
          echo '</td>';
          echo '</tr>';

        }
        ?>
                  </tbody>
                </form>
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
