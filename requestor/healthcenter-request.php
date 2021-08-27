<?php
  include '../config/connect.php';
  $user_id = $_SESSION['user_id'];







  if($_SESSION['user_sid']==session_id())
  {
    ?>

<!DOCTYPE html>
<html>
<?php
$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['lastname']. ", " .$row['firstname']; 
$username = $row['username'];
$email = $row['email'];
$FN = $row['firstname'];
$LN = $row['lastname'];
$address = $row['Address'];
$barangay = $row['Barangay'];
$contact = $row['contact'];
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
  <title> Protéger | Request Result</title>
    <link rel="shortcut icon" type="image/jpg" href="dist/img/favicon.png"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
</head>
<style>
  

     

    /*waves****************************/


    .box {
      position: fixed;
      top: 0;
      transform: rotate(60deg);
      left: 0;
    }

    .wave {
      position: fixed;
      top: 0;
      left: 0;
      position: absolute;
      top: 5%;
      left: 20%;
      background: #2ac06e;
      width: 1500px;
      height: 1300px;
      margin-left: -800px;
      margin-top: -900px;
      transform-origin: 50% 48%;
      border-radius: 43%;
      animation: drift 30000ms infinite linear;
    }

    .wave.-three {
      animation: drift 15000ms infinite linear;
      position: fixed;
       opacity: .7;
      background-color: #32d27a;
    }

    .wave.-two {
      animation: drift 3000ms infinite linear;
      opacity: .5;
      background: #32d27a;
      position: fixed;
    }


     .invwave {
      position: fixed;
      top: 0;
      left: 0;
      position: absolute;
      bottom: 5%;
      right: 20%;
      background: #5cdb8a;
      width: 1500px;
      height: 1300px;
      margin-left: 800px;
      margin-top: 400px;

      transform-origin: 50% 48%;
      border-radius: 43%;
      animation: drift 30000ms infinite linear;
    }

    .invwave.-three {
      animation: drift 15000ms infinite linear;
      position: fixed;
       opacity: .9;
      background-color: #5cdb8a;
    }



    .box:after {
      content: '';
      display: block;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 11;
      transform: translate3d(0, 0, 0);
    }

    @keyframes drift {
      from { transform: rotate(0deg); }
      from { transform: rotate(360deg); }
    }


    /*Animation*/

    @-webkit-keyframes anim{
      0% {
        -webkit-transform: scale(0,0) rotateZ(-90deg);
        transform: scale(0,0) rotateZ(-90deg);opacity:0
      }
      30% {
        -webkit-transform: scale(1,1) rotateZ(0deg);
        transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      50% {
        -webkit-transform: scale(1,1) rotateZ(0deg);
        transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      80% {
        -webkit-transform: scale(0,0) rotateZ(90deg);
        transform: scale(0,0) rotateZ(90deg);opacity:0
      }
    }

    @keyframes anim{
      0% {
        -webkit-transform: scale(0,0) rotateZ(-90deg);
        transform: scale(0,0) rotateZ(-90deg);opacity:0
      }
      30% {
        -webkit-transform: scale(1,1) rotateZ(0deg);transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      50% {
        -webkit-transform: scale(1,1) rotateZ(0deg);
        transform: scale(1,1) rotateZ(0deg);opacity:1
      }
      80% {
        -webkit-transform: scale(0,0) rotateZ(90deg);
        transform: scale(0,0) rotateZ(90deg);opacity:0
      }
    }
  

</style>
  <!-- Preloader -->
 <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/blue.png" alt="AdminLTELogo" height="60" width="200">
  </div>

<body class="hold-transition login-page">
<body style="background-color: #5cdb94; ">
  <!-- Animation -->
  <div class="box animated tada">
    <div class="wave -three"></div>
        <div class="wave -two"></div>
    <div class="wave -one">
      <div id="particles-js">
        <canvas class="particles-js-canvas-el" width="1500" height="750" style="width: 100%; height: 100%;">
    </div>
  </div>
    <div class="inwave -three"></div>
    <div class="inwave -one">
      <div id="particles-js">
        <canvas class="particles-js-canvas-el" width="1500" height="750" style="width: 100%; height: 100%;">
    </div>
    </div>
    ::after
  </div>
<body class="bg-default" onload="disableSubmit()">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a class="h1"><b>Request Sent</b></a>
    </div>
    <div class="card-body">
      <div class="justify-content-center text-center">
                                <img src="../dist/img/checked.png" class="text-center" style="width: 35%;">
                            </div>

          <br>  <p class="login-box-msg"></p>

                    <?php 

              $con=mysqli_connect("localhost","root","","db_system");

              //checking the connection
              if(mysqli_connect_errno())
                  {
                    echo "Unable to connect to the database : " .mysqli_connect_error();
                  }

                $query="SELECT * FROM users where id = $user_id";
                $run=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($run))
                  {
                    $id=$row['id'];
                    $username=$row['firstname'];
                    
      
      
                ?>


        <div class="input-group mb-3 ">
          <p class="text-center">Thank you for requesting your needed PPE. We prioritize your safety
to give protection to your community. The goal of
Proteger is to protect ourselves so that we can continue to help others. Stay safe!</p>
        </div>
      <?php } ?>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col">
            <a href= "org_dashboard.php" class="btn btn-success btn-block">Proceed to Dashboard</a>
          </div>
          <!-- /.col -->
        </div>

      <!-- /.social-auth-links -->



      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

      <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>
</body>
</html>
<?php
  
}
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
