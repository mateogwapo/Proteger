<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Protéger | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
<style>
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Proteger</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form role="form" id="form" action="register-router.php" method="POST">
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
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
