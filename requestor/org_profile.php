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
$barangay = $row['Barangay'];
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
  <title>AdminLTE 3 | Org Profile</title>
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
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
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
 include'navbar.php'  
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <a href="#" onclick="$('#uploadPhoto').modal('show')">
                                        <!-- <img src="../assets/img/theme/team-4.jpg" class="rounded-circle"> -->
                                        <?php
                                        if ($pic != "") {

                                        ?>
                                            <img src="data:image/jpeg;base64,<?php echo $pic ?>" class='profile-user-img img-fluid img-circle'>

                                        <?php
                                        } else {

                                        ?>

                                            <img src="../../dist/img/avatar6.png" class="profile-user-img img-fluid img-circle">
                                        <?php
                                        }

                                        ?>
                                    </a>
                </div>

                <h3 class="profile-username text-center"><?php echo $username;?></h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email: </b> <a class="float-right"><?php echo $email;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact: </b> <a class="float-right"><?php echo $Contact;?></a>
                  </li>
                </ul>

         <!--        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="post" action="../config/details-router-org.php" novalidate="novalidate">
                      <div class="form-group row">
                        <label for="input-username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-username" placeholder="Name" name="username" value="<?php echo $username;?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="input-email" placeholder="Email" name="email" value="<?php echo $email;?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-email" class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-10">
                          <input type="contact" class="form-control" id="input-contact" placeholder="contact" name="contact" value="<?php echo $Contact;?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-first-name" class="col-sm-2 col-form-label">Barangay Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-first-name" placeholder="(Optional)" name="firstname" value="<?php echo $FN;?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-address" placeholder="Address" name="Address" value="<?php echo $address;?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-address" class="col-sm-2 col-form-label">Barangay</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-barangay" placeholder="Barangay" name="Barangay" value="<?php echo $barangay;?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-address" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-city" placeholder="City" name="City" value="<?php echo $city;?>"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="action" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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

<div class="modal fade" id="uploadPhoto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Upload Photo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../changeProfile_org.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $user_id; ?>">
                <div class="modal-body">
                    <div class="form-row">
                        <label class="col-lg-3">Upload Photo</label>
                        <div class="col-lg-8">
                            <input type="file" name="photo" id="uploadPhotos" accept="image/jpeg">
                        </div>
                    </div>
                    <div class="form-row py-1">
                        <label class="col-lg-3">Preview</label>
                        <div class="col-lg-8">
                            <img src="" class="previewPic" style="width: 150px; height: 150px;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary float-right">Change Profile Picture</button>
                </div>
            </form>
        </div>
    </div>
</div>

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