<?php include_once 'config.php';
if (isset($_REQUEST['submit']) and $_REQUEST['submit'] != "") {
	extract($_REQUEST);
	$query = "INSERT INTO items (name, type, place, price,
    available_limit, img)
    VALUES ('" . $_POST["name"] . "', '" . $_POST["type"] . "', '" . $_POST["place"] . "',
	'" . $_POST["price"] . "', '" . $_POST["available_limit"] . "', '" . $_POST["img"] . "'
	)";

	if ($dbConn->connect_error) {
		die("Connection failed: " . $dbConn->connect_error);
	}
	if ($dbConn->query($query) === true) {
		header("Location: browse-items.php");
	} else {
		echo "Error: " . $query . "<br>" . $dbConn->error;
	}
}
?>
<?php include 'navbar.php' ?>
<div class="container">
<form method="post">
	<div class="card">
		<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add Food Item</strong> <a href="browse-items.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Foods</a></div>
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6">
				
					<div class="form-group">
						<label>Name <span class="text-danger">*</span></label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Enter Food Name" required>
					</div>
					<div class="form-group">
						<label>Type <span class="text-danger">*</span></label>
						<input type="text" name="type" id="type" class="form-control" placeholder="Enter Type Of Food" required>
					</div>
					
					<div class="form-group">
						<label>Price <span class="text-danger">*</span></label>
						<input type="number" name="price" id="price" class="form-control" placeholder="Enter Price" required>
					</div>
					<div class="form-group">
						<label>Available Limit <span class="text-danger">*</span></label>
						<input type="number" name="available_limit" id="available_limit" class="form-control" placeholder="Enter Available Limit" required>
					</div>
					<div class="form-group">
						<label>Place <span class="text-danger">*</span></label>
						<input type="text" name="place" id="place" class="form-control" placeholder="Enter Place" required>
					</div>
					<div class="form-group">
						<label>Image <span class="text-danger">*</span></label>
						<input type="text" name="img" id="img" class="form-control" placeholder="Enter Image Url" required>
					</div>
					<div class="form-group">
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> Add Food Item</button>
						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</div>