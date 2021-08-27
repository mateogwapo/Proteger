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
 <title> Protéger | Admin</title>
  <link rel="shortcut icon" type="image/jpg" href="../dist/img/favicon.png"/>

  <!-- Google Font: Source Sans Pro -->
  
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
            <h1 class="m-0">Manage Items</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Item </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Items</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="project-actions text-right">
      <a href="add_item.php" class="btn btn-primary btn-sm">Add</a>
    </div>

        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 10%">
                          Item Category
                      </th>
                      <th style="width: 20%"class="text-center" >
                          Item Name
                      </th>
                      <th style="width: 30%" class="text-center">
                          Description
                      </th>
                      <th style="width: 5%" class="text-center">
                          Unit #
                      </th>
                      <th style="width: 30%" class="text-center">
                         Operation
                      </th>
                      
                      
                  </tr>
              </thead>

              <?php 

              $con=mysqli_connect("localhost","root","","db_system");

              //checking the connection
              if(mysqli_connect_errno())
                  {
                    echo "Unable to connect to the database : " .mysqli_connect_error();
                  }

                $query="SELECT * FROM tblitems";
                $run=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($run))
                  {
                    $id=$row['id'];
                    $itemid=$row['itemID'];
                    $itemcategory=$row['itemCategory'];
                    $itemname=$row['itemName'];
                    $itemdescription=$row['itemDescription'];
                    $itemstock=$row['item_stock'];
                    $Date=$row['date'];
      
      
                ?>


              <tbody>
                  <tr>
                      <td>
                          <?php echo $itemid; ?>
                      </td>
                      <td class="project-state">
                    
                          <?php echo $itemcategory; ?>
                        
                      </td>
                      <td>
                          <a>
                              <?php echo $itemname; ?>
                          </a>
                          <br/>
                          <small>
                              <?php echo $Date; ?>
                          </small>
                      </td>
                      <td class="project-state">
                          <?php echo $itemdescription; ?>
                      </td>

                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $itemstock; ?> pcs</span>
                      </td>
                     
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="update_item.php?updateid=<?php echo $id;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="../config/delete_item.php?deleteid=<?php echo $id; ?>" data-confirm="Are you sure you want to delete this item?">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              </tbody>
               <?php } ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
            <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
                    <div class="project-actions text-right">
      <a href="add_category.php" class="btn btn-primary btn-sm">Add</a>
    </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 10%">
                          Category Name
                      </th>
                      <th style="width: 30%" class="text-center">
                          Description
                      </th>
                      <th style="width: 15%" class="text-center">
                         Operation
                      </th>
                      
                      
                  </tr>
              </thead>

              <?php 

              $con=mysqli_connect("localhost","root","","db_system");

              //checking the connection
              if(mysqli_connect_errno())
                  {
                    echo "Unable to connect to the database : " .mysqli_connect_error();
                  }

                $query="SELECT * FROM tblcategoryforitems";
                $run=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($run))
                  {
                    $id=$row['id'];
                    $categoryname=$row['categoryname'];
                    $categorydesc=$row['category_desc'];
                    $Date=$row['date'];
      
      
                ?>


              <tbody>
                  <tr>
                      <td>
                          <?php echo $id; ?>
                      </td>
                      <td>
                          <a>
                              <?php echo $categoryname; ?>
                          </a>
                          <br/>
                          <small>
                              <?php echo $Date; ?>
                          </small>
                      </td>
                      
                      <td class="project-state">
                          <?php echo $categorydesc; ?>
                      </td>

                     
                     
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="update_category.php?updateid=<?php echo $id;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="../config/delete_category.php?deleteid=<?php echo $id; ?>" data-confirm="Are you sure you want to delete this item?">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
              </tbody>
               <?php } ?>
          </table>
        </div>
        <!-- /.card-body -->
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
      header("location:../login.php");    
    }
    else{
      header("location:../login.php");
    }
  }
?>
