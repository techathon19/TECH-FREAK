<?php
include 'config.php';

session_start();
$created = date("Y-m-d");

$price =   $_POST["selectedItems"] *  $_POST["itemPrice"];
$query = "INSERT INTO orders (user_id, item_id, quantity, transaction_type, ordered_at, delivery_address, price)
VALUES ('" . $_SESSION['user_id'] . "', '" . $_POST["id"] . "', '" . $_POST["selectedItems"] . "'
, 'COD', '$created', '" . $_POST["address"] . "', '$price')";

if ($dbConn->connect_error) {
    die("Connection failed: " . $dbConn->connect_error);
}
if ($dbConn->query($query) === true) {
    // header("Location: browse-items.php");
} else {
    echo "Error: " . $query . "<br>" . $dbConn->error;
}
?>

<?php include('navbar.php');
?>
<div class="container">
	<div class="row text-center">
        <div class="text-center">
        <br><br> <h2 style="color:#0fad00">Success</h2>
        <img width="50%" height="50%" src="http://www.pngall.com/wp-content/uploads/2017/05/Congratulation-PNG-Images.png">
        <p style="font-size:20px;color:#5C5C5C;">Thank you for placing the order.</p>
        <p style="font-size:20px;color:#5C5C5C;">Your food is on the way</p>
        <a href="userdashboard.php" class="btn btn-success">  Go to homepage      </a>
    <br><br>
        </div>
        
	</div>
</div>