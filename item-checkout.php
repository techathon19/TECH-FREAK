<?php include 'navbar.php';
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $result = mysqli_query($dbConn, "select * from items where id=$id") or die('Query fail: ' . mysqli_error());
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Food</th>
                        <th>No of Items</th>
                        <th class="text-center">Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <form id='userForm' method="post" action="item-bill.php">
                    <?php while ($row = mysqli_fetch_array($result)) {
                            ?>
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src=<?php echo $row['img']; ?> style="width: 72px; height: 72px;"> </a>
                                    &ensp;&ensp;<div class="media-body">
                                        <h4 class="media-heading"><b> <?php echo $row['name']; ?></b></h4>
                                        <span class="text-success"><strong>Available <?php echo $row['available_limit']; ?></strong></span>
                                    </div>
                                </div>
                            </td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input style="width:64px!important" type="number" name="selectedItems" class="form-control" id="selectedItems" value="1">
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $row['price']; ?> ₹</strong></td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <td>   </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            
                            <input type="hidden" name="name" value=<?php echo $row['name']; ?> />
                            <input type="hidden" name="place" value=<?php echo $row['place']; ?> />
                            <input type="hidden" name="img" value=<?php echo $row['img']; ?> />
                            <input type="hidden" name="itemPrice" value=<?php echo $row['price']; ?> />
                            <input type="hidden" name="id" value=<?php echo $row['id']; ?> />
                            <input type="hidden" name="available_limit" value=<?php echo $row['available_limit']; ?> />
                            <td>
                                <button type="submit" name="submit" value="submit" id="submit" class="btn btn-success">
                                    Checkout <span class="glyphicon glyphicon-play"></span>
                                </button></td>
                        </tr>
                    <?php
                            } ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>