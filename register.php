<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Protéger | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <link href="dist/css/particleskeme.css" rel="stylesheet" />
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

    .btn-primary1 {
      background-color: #05386B !important;
      border-color: #05386B !important;
      box-shadow: none;
      color: white;
    }

    .btn-primary1:hover {
      background-color: #007bff !important;
      border-color: #007bff !important;
      box-shadow: none;
      color: white;
    }
  
    .card-primary.card-outline {
      border-top: 3px solid #05386B !important;
    }

  .toggle-password {
  position:absolute;
  width:40px;
  height:40px;
  top:2px;
  right:2px;
  border-radius:50%;
  text-align:center;
  line-height:35px;
  font-size:20px;
  cursor:pointer;
}

.password-policies {
  position:relative;
  top:0px;
  left:50%;
  transform:translateX(-50%);
  width:90%;
  padding:0px;
  height:0px;
  background:#f5f5f5;
  border-radius:5px;
  margin-top:10px;
  box-sizing:border-box;
  opacity:0;
  overflow:hidden;
  transition: height 300ms ease-in-out,
              opacity 300ms ease-in-out;
}

.password-policies.active {
  opacity:1;
  padding:10px;
  height:180px;
}

.password-policies > div {
  margin:15px 10px;
  font-weight:600;
  color:#888;
  transition:all 300ms ease-in-out;
}

.password-policies > div.active {
  color:#248c46;
}
</style>

</head>
  <!-- particles.js container -->
  <div id="particles-js1" style="z-index:-1;"></div>
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
<body style="background-color: #5cdb94; ">
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
   <div class="card-header text-center">
      <img src="dist/img/blue.png" class="text-center" style="width: 58%;">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form role="form" id="form" action="config/register-router.php" method="POST">
        <div class="input-group mb-3">
           <input class="form-control" placeholder="First Name" type="text" name="fn" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
           <input class="form-control" placeholder="Last Name" type="text" name="ln" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" placeholder="Email" type="email" name="email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input class="form-control" placeholder="Password" type="password" name="password" id="password-field" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="password-policies">
              <div class="policy-length">8 Characters</div>
              <div class="policy-number">Contains Number</div>
              <div class="policy-uppercase">Contains Uppercase</div>
              <div class="policy-special">Contains Special Character</div>
            </div>
        </div>


          <script>
            function _id(name){
  return document.getElementById(name);
}
function _class(name){
  return document.getElementsByClassName(name);
}
_class("input-group-text")[0].addEventListener("click",function(){
  _class("input-group-text")[0].classList.toggle("active");
  if(_id("password-field").getAttribute("type") == "password"){
    _id("password-field").setAttribute("type","text");
  } else {
    _id("password-field").setAttribute("type","password");
  }
});

_id("password-field").addEventListener("focus",function(){
  _class("password-policies")[0].classList.add("active");
});
_id("password-field").addEventListener("blur",function(){
  _class("password-policies")[0].classList.remove("active");
});

_id("password-field").addEventListener("keyup",function(){
  let password = _id("password-field").value;
  
  if(/[A-Z]/.test(password)){
    _class("policy-uppercase")[0].classList.add("active");
  } else {
    _class("policy-uppercase")[0].classList.remove("active");
  }
  
  if(/[0-9]/.test(password)){
    _class("policy-number")[0].classList.add("active");
  } else {
    _class("policy-number")[0].classList.remove("active");
  }
  
  if(/[^A-Za-z0-9]/.test(password)){
    _class("policy-special")[0].classList.add("active");
  } else {
    _class("policy-special")[0].classList.remove("active");
  }
  
  if(password.length > 7){
    _class("policy-length")[0].classList.add("active");
  } else {
    _class("policy-length")[0].classList.remove("active");
  }
});
          </script>

        <div class="row">
          <div class="col-8">
            <input type="checkbox" id="agreeTerms" value="1" onclick="terms_changed(this)">
                <b>I agree to the <a href="pages/examples/termsandconditions.php">Terms and Conditions</a></b>
              <br>
              <br> 
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary" id="submit_button" disabled>Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!-- Disable "Register" Button Script -->
<script type="text/javascript">
  
  function terms_changed(termsCheckBox){
    if(termsCheckBox.checked){
        document.getElementById("submit_button").disabled = false;
    } else{
        document.getElementById("submit_button").disabled = true;
    }
  }
</script>

  <!--particle plugin-->
  <script src="dist/js/particles.min.js" type="text/javascript"></script>
  <script src="dist/js/particles.js" type="text/javascript"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
