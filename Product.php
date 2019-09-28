<?php
class Product {
	private $host  = 'localhost';
    private $user  = 'root';
    private $database  = "restaurant";   
	private $productTable = 'items';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, '', $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: ');
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return $data;
	}
		
	public function getType(){
		$sqlQuery = "
			SELECT DISTINCT(type)
			FROM ".$this->productTable." 
			 ORDER BY id DESC";
        return  $this->getData($sqlQuery);
	}
	
	public function getPlace(){
		$sqlQuery = "
			SELECT DISTINCT(place)
			FROM ".$this->productTable." 
			ORDER BY id ASC";
        return  $this->getData($sqlQuery);
	}
	public function searchProducts(){
		$sqlQuery = "SELECT * FROM ".$this->productTable." ";
		if(isset($_POST["type"])) {
			$typeFilterData = implode("','", $_POST["type"]);
			$sqlQuery .= "
			where type IN('".$typeFilterData."')";
		}
		if(isset($_POST["place"])){
			$placeFilterData = implode("','", $_POST["place"]);
			$sqlQuery .= "
			where place IN('".$placeFilterData."')";
		}

		// echo 
		$sqlQuery .= " ORDER By id";
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if (!$result)
			echo(mysqli_error($this->dbConnect));
		if(mysqli_num_rows($result)>0)
		$totalResult = mysqli_num_rows($result);
		$searchResultHTML = '';
		// echo $totalResult;
		if($totalResult > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$searchResultHTML .= '
				<div class="col-sm-4 col-lg-3 col-md-3">
				<form method="post" action="item-checkout.php">
				<div class="product">
				<img src='. $row['img'] .' width=100% height=20% />
				<p align="center"><strong><a href="#">'. $row['name'] .'</a></strong></p>
				<p>Price : '. $row['price'].' <br />
				<input type="hidden" name="id" value='. $row['id'] .' />
				<button class="btn btn-primary" type="submit" >Buy Now</button>
				</div>
				</form>
				</div>';

				
			}
		} else {

			$searchResultHTML = '<h3>No product found.</h3>';
		}
		return $searchResultHTML;	
	}	
}
?>
