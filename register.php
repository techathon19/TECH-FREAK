
<?php  
include('config.php');
// unset($_POST);
// unset($_REQUEST);
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$firstNameErr = $lastNameErr = $emailErr = $typeErr = $passwordErr = $contactErr = $addressErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
     }
     
     if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
     }
    
     if (empty($_POST["contact"])) {
        $contactErr = "Contact is required";
     }
     if (empty($_POST["address"])) {
        $addressErr = "Address is required";
     }
     else{
        $formtype = trim("registration");
        $created = date("Y-m-d");
        $updated = date("Y-m-d");
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $query = "select * from users where email='$email'";
        $res = mysqli_query($dbConn, $query);
        if (!$res) {
          die(mysqli_error($dbConn));
        }
        $count = mysqli_num_rows($res);
        if($count == 0){
            $query = "INSERT INTO users (name, email, password, contact, address, 
            type)
            VALUES ('".$_POST["name"]."', '".$_POST["email"]."',
            '".$_POST["password"]."', '".$_POST["contact"]."', '".$_POST["address"]."', '".$_POST["type"]."')";
            if ($dbConn->connect_error) {
                die("Connection failed: " . $dbConn->connect_error);
            }
            if ($dbConn->query($query) === TRUE) {
                header("Location: index.php");
            } else {
                echo "Error: " . $query . "<br>" . $dbConn->error;
            }
        }else{
            echo "Email already Exists";
        }
     }
 } 


?>
<link rel="stylesheet" href="css/login.css" type="text/css" >
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <div class="container">
<div class="d-flex justify-content-center h-100">
 <div class="card">
  <div class="card-header">
   <h3>Register</h3>
  </div>
  <div class="card-body">
   <form method="post" action="register.php">
    <div style="margin-bottom:6px" class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fa fa-user"></i></span>
     </div>
     <input required type="text" class="form-control" name="name" placeholder="First Name">
    </div>
    
    <div style="margin-bottom:6px" class="input-group form-group">
   
    <span style="color:red" class = "error">* <?php echo $lastNameErr;?></span>
    <div style="margin-bottom:6px" class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
     </div>
     <input required type="email" class="form-control" name="email" placeholder="Email">
     
    </div>
    <span style="color:red" class = "error">* <?php echo $emailErr;?></span>

    <div style="margin-bottom:6px"  class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-mobile"></i></span>
     </div>
     <input required type="text" class="form-control" name="contact" placeholder="Contact">
     
    </div>
    <span style="color:red" class = "error">* <?php echo $contactErr;?></span>

    <div style="margin-bottom:6px" class="input-group form-group">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-address-card"></i></span>
     </div>
     <input required type="text" class="form-control" name="address" placeholder="Address">
     
    </div>
    <span style="color:red" class = "error">* <?php echo $addressErr;?></span>

    <div style="margin-bottom:6px" class="input-group form-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-address-card"></i></span>
    <select name="type" class="form-control user-type">
    <option value="admin">Admin</option>
    <option value="user">User</option>
    </select>
    </div>
    </div>
    <span style="color:red" class = "error">* <?php echo $typeErr;?></span>
   
    <div style="margin-bottom:6px"  class="input-group form-group">
     <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
     </div>
     <input required type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <span style="color:red" class = "error">* <?php echo $passwordErr;?></span>

    <button type="submit" class="btn" name="reg_user">Register</button>
    <!-- <div class="form-group">
     <input type="submit" name="reg_user" value="Register" class="btn float-right login_btn">
    </div> -->
   </form>
  </div>
  <div class="card-footer">
   <div class="d-flex justify-content-center links">
    Already have an account?<a href="index.php">Login</a>
   </div>
   
  </div>
 </div>
</div>
</div>

