<?php include('config.php');
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
if(!isset($_POST['submit'])) 
 {
  session_start();

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    
    $query = "select * from users where email='$email' and password='$password'";
    
    $res = mysqli_query($dbConn, $query);

    if (!$res) {
      die(mysqli_error($dbConn));
  }

    $count = mysqli_num_rows($res);

    if($count == 0){
      echo "Error";
    }else{
      while($row = mysqli_fetch_array($res))
      // debug_to_console($row['id']);
      // // $defaulttype = 'admin';
      // $t =  $row[0]['id'];
      // $l = 'Location ';
      // $d = 'dashboard.php';
      // $p = $t.$d;
      // debug_to_console($t);
      // debug_to_console($p);
      $_SESSION['user_id'] = $row['id'];

      // $r = $l.$p;
      // debug_to_console($r);
      if($row['type'] == 'admin'){
          header('Location: admindashboard.php');
      }else{
      header('Location: userdashboard.php');


          // header($r);
    }
  }

    // if (mysqli_num_rows($res) == 1) 
    // {
    //     $row = mysqli_fetch_array($res);

    //     $_SESSION['user_id'] = $row['userid'];
    //     header("Location: home.php");
    //     echo mysqli_error($dbc);

    // } 
    
    // if ($dbConn->connect_error) {
    //     die("Connection failed: " . $dbConn->connect_error);
    // }
    // if ($dbConn->query($query) === TRUE) {
    //     header("Location: index.php");
    // } else {
    //     echo "Error: " . $query . "<br>" . $dbConn->error;
    // }
 } ?>