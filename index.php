
<?php
 
?>
<link rel="stylesheet" href="css/login.css" type="text/css" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


  <div class="container">
<div class="d-flex justify-content-center h-100">
 <div class="card">
  <div class="card-header">
   <h3>Sign In</h3>
  </div>
  <div class="card-body">
   <form method="post" action="login.php">
    <div class="input-group form-group">
     <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-user"></i></span>
     </div>
     <input type="text" class="form-control" name="email" placeholder="Email">
     
    </div>
    <div class="input-group form-group">
     <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
     </div>
     <input type="password" class="form-control" name="password" placeholder="password">
    </div>

    <div class="form-group">
     <input type="submit" value="Login" name="login_form" class="btn float-right login_btn">
    </div>
   </form>
  </div>
  <div class="card-footer">
   <div class="d-flex justify-content-center links">
    Don't have an account?<a href="register.php">Sign Up</a>
   </div>
  </div>
 </div>
</div>
</div>
</form>

