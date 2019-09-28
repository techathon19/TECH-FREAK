<?php  include('config.php');


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="search.js"></script>
  

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 40%;
  }
  .product {
	border:1px solid #ccc; 
	border-radius:5px; 
	padding:16px; 
	margin-bottom:16px; 
	height:250px;
}
.brandSection{
	height: 180px; 
	overflow-y: auto; 
	overflow-x: hidden;
}
  </style>
<body>

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

<div class="container">		
	<!-- <h2>Example: Product Search Filter with Ajax, PHP & MySQL</h2> -->
	<?php
	include 'Product.php';
	$product = new Product();	
  ?>	
  
  <!-- <hr/>
    <div class="row">
  <div class="list-group">
	 <br />
		<div class="row searchResult"><p>njn</p>
		</div>
	</div>
	</div> -->
	<br/>
	<div class="row">
	<div class="col-md-3">                    
		<div class="list-group">
			<h3>Filters</h3>
			<h5>Food Type</h5>
			<div class="brandSection">
				<?php
				$type = $product->getType();
				foreach($type as $typeDetails){	
				?>
				<div class="list-group-item checkbox">
				<label><input type="checkbox" class="productDetail type" value="<?php echo $typeDetails["type"]; ?>"  > <?php echo $typeDetails["type"]; ?></label>
				</div>
				<?php }	?>
			</div>
		</div>
		<div class="list-group">
			<h5>Place </h5>
			<?php			
			$place = $product->getPlace();
			foreach($place as $placeDetails){	
			?>
			<div class="list-group-item checkbox">
			<label><input type="checkbox" class="productDetail place" value="<?php echo $placeDetails['place']; ?>" > <?php echo $placeDetails['place']; ?></label>
			</div>
			<?php    
			}
			?>
		</div>    
		</div>
	<div class="col-md-9">
  <div class="list-group">
	 <br />
		<div class="row searchResult"><p>njn</p>
		</div>
	</div>
	</div>
    </div>	
   
</div>	

</div>
</body>
<br/>
<?php include 'footer.php';?>


