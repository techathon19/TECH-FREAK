<?php include_once('config.php');?>
	<?php
    include('navbar.php');
    $result = mysqli_query($dbConn, 'select * from items ORDER BY id DESC') or die('Query fail: ' . mysqli_error());
	?>
   	<div class="container">
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse Food Items</strong> <a href="add-item.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Food Items</a></div>
			<div class="card-body">
				<?php
				if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rds"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record deleted successfully!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rus"){
					echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record updated successfully!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rnu"){
					echo	'<div class="alert alert-warning"><i class="fa fa-exclamation-triangle"></i> You did not change any thing!</div>';
				}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){
					echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> There is some thing wrong <strong>Please try again!</strong></div>';
				}
				?>
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr class="bg-primary text-white">
						<th>No#</th>
						<th>Food Name</th>
						<th>Type</th>
						<th>Price</th>
						<th>Place</th>
						<th>Avaliable Limit</th>
					</tr>
				</thead>
				<tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['place']; ?></td>
                        <td><?php echo $row['available_limit']; ?></td>
                    </tr>
                <?php } ?>
				</tbody>
			</table>
		</div> 
	</div>
