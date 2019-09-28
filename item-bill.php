<?php include 'navbar.php';
include 'config.php';

$date = date("Y/m/d");
if (isset($_POST['submit'])) {
    $selectedItems = $_POST["selectedItems"];
    $name = $_POST["name"];
    $place = $_POST["place"];
    $itemPrice = $_POST["itemPrice"];
    $img = $_POST["img"];
    $id = $_POST["id"];
    $available_limit = $_POST["available_limit"];
    $address = '';
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
<script>
$(document).ready(function(){
    
     callApi();
});

function callApi(){

    

    // $result = mysqli_query($dbConn, "update items SET available_limit='$available_limit' where id=$'id'");
//     $.ajax({
//             type: 'POST',
//             url: 'http://54.184.50.10:7000/email', 
//             data: JSON.stringify({ 'to':'developer.event10@gmail.com', 'text': "<?php echo $name ?> 'for' <?php echo $meta1value * $selectedMeta1 + $meta2value * $selectedMeta2 + $meta3value * $selectedMeta3
// + $meta4value * $selectedMeta4 + $meta5value * $selectedMeta5 + $meta6value * $selectedMeta6 +
// $meta7value * $selectedMeta7 + $meta8value * $selectedMeta8 + $seatPrice * $selectedSeats ?>", "subject":"Event Booked" }),
//             contentType: "application/json",
//             dataType: 'json'
//         })
//         .done(function(data){
//             $('#response').html(data);
//         })
//         .fail(function() {
//             alert( "Posting failed." );
//         });
}
</script>

<div class="container">
    <div class="card">
    <form method="post" action="order-confirm.php">

        <div class="card-header">
            Date
            <strong><?php echo $date; ?></strong>

        </div>
        <div class="card-body">
            <!-- <div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">From:</h6>
<div>
<strong>Webz Poland</strong>
</div>
<div>Madalinskiego 8</div>
<div>71-101 Szczecin, Poland</div>
<div>Email: info@webz.com.pl</div>
<div>Phone: +48 444 666 3333</div>
</div>
<div class="col-sm-6">
<h6 class="mb-3">To:</h6>
<div>
<strong>Bob Mart</strong>
</div>
<div>Attn: Daniel Marek</div>
<div>43-190 Mikolow, Poland</div>
<div>Email: marek@daniel.com</div>
<div>Phone: +48 123 456 789</div>
</div>
</div> -->

            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="center">#</th>
                            <th>Item</th>

                            <th class="right">Unit Cost</th>
                            <th class="center">Qty</th>
                            <th class="right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center">1</td>
                            <td class="left strong"><?php echo $name ?></td>

                            <td class="right"><?php echo $itemPrice ?></td>
                            <td class="center"><?php echo $selectedItems ?></td>
                            <td class="right"><?php echo $itemPrice * $selectedItems ?> ₹</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                </div>

                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                        <tbody>
                           
                            <tr>
                                <td class="left">
                                    <strong>Total</strong>
                                </td>
                                <td class="right">
                                    <strong><?php echo $selectedItems * $itemPrice ?> ₹</strong>
                            <input type="hidden" name="selectedItems" value=<?php echo $selectedItems; ?> />
                            <input type="hidden" name="id" value=<?php echo $id; ?> />
                            <input type="hidden" name="itemPrice" value=<?php echo $itemPrice; ?> />

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
           <div>
            <b style="float:left;">Delivery Address (COD)</b>

           <input class="form-control" required type="text" name="address"  />

           <br/>


            <a href="order-confirm.php" ><button  style="float:right;" type="submit" name="submit" value="submit" id="submit" class="btn btn-success">
                                    Confirm Order <span class="glyphicon glyphicon-play"></span>
                                </button>  </a> 
        </div>
        </div>
    </div>
</form>

</div>