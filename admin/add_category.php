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
  <title> Protéger | Admin Add Category</title>
  <link rel="shortcut icon" type="image/jpg" href="../dist/img/favicon.png"/>
</head>
<?php
include'header.php';
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
<body class="hold-transition sidebar-mini layout-fixed">
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
              <h3 class="card-title">Add Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form action="../config/addDetailsCategory.php" method="post">
              <!-- <div class="form-group">
                <label for="id">Category ID</label>
                <input type="text" class="form-control" name="id" value="<?php

                    if(isset($CategoryID))
                      {
                        echo $CategoryID;
                      }
                      else
                      {
                        echo "";

                      }

               ?>"
               id="id" placeholder="Enter item ID" hidden>
              </div> -->
              <div class="form-group">
                <label for="itemName">Category Name</label>
                <input type="text" id="categoryname" placeholder="Enter your category name" name="categoryname" class="form-control" value="<?php

                    if(isset($categoryname))
                      {
                        echo $categoryname;
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
                <input type="textbox" class="form-control" name="category_desc" value="<?php

                    if(isset($categorydesc))
                      {
                        echo $categorydesc;
                      }
                      else
                      {
                        echo "";

                      }

               ?>" id="category_desc" placeholder="Enter your Category name" required>
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
