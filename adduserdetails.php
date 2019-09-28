<?php include('config.php');
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$firstNameErr = $lastNameErr = $emailErr = $typeErr = $passwordErr = $contactErr = $addressErr = "";




if($_SERVER["REQUEST_METHOD"] == "POST") 
 {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $email = test_input($_POST["email"]);
    

    // if (empty($_POST["email"])) {
    //     $emailErr = "Email is required";
    //  }
    //  if (empty($_POST["firstName"])) {
    //     $firstNameErr = "First Name is required";
    //  }
    //  if (empty($_POST["lastName"])) {
    //     $lastNameErr = "Last Name is required";
    //  }
    //  if (empty($_POST["password"])) {
    //     $passwordErr = "Password is required";
    //  }

    //  if (empty($_POST["usertype"])) {
    //     $typeErr = "Type is required";
    //  }
    //  if (empty($_POST["contact"])) {
    //     $contactErr = "Contact is required";
    //  }

   


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
            $query = "INSERT INTO users (firstname, lastname, email, password, contact, address, 
            usertype, formtype, created, updated)
            VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."',
            '".$_POST["password"]."', '".$_POST["contact"]."', '".$_POST["address"]."', '".$_POST["usertype"]."',
            '$formtype', '$created', '$updated')";
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
    
   
 } ?>