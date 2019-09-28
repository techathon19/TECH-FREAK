<?php include 'config.php';

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 40%;
  }
</style>

<body>

  <?php include 'navbar.php'?>
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Los Angeles" width="1100" height="200">
      </div>
      <div class="carousel-item">
        <img src="https://www.w3schools.com/bootstrap4/ny.jpg" alt="Chicago" width="1100" height="200">
      </div>
      <div class="carousel-item">
        <img src="https://www.w3schools.com/bootstrap4/chicago.jpg" alt="New York" width="1100" height="200">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  </br>
  <div class="container">
    <h2>Users List</h2>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
      </thead>

      <tbody>
        <?php
//   $conn = mysqli_connect('localhost', 'user', 'password', 'db', 'port');
$result = mysqli_query($dbConn, 'select * from users where type="user"')
?>

        <?php while ($row = mysqli_fetch_array($result)) {?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
          </tr>
        <?php }?>
      </tbody>
    </table>

  </div>
</body>
<br />
<?php include 'footer.php';?>