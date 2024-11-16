<?php 
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'ecommerce');
$sql = "select * FROM products WHERE featured=1";
$featured = $con->query($sql);
?>

<div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Product Details</Details></h2> 
        <?php 
        while($product = mysqli_fetch_assoc($featured)) { // Removed the semicolon here
        ?>
        <div class="col-md-5">
            <h4><?= $product['title'];?></h4>
            <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/> <!-- Fixed typo here -->
            <p class="Iprice">Rs <b><?= $product['price'];?></b></p>
            <p class="desc">Rs <?= $product['description'];?></p>
            <p class="bname">Rs <?= $product['brandname'];?></p>
        </div>
        <?php 
        } // Moved the closing brace for the while loop here
        ?>
    </div>
  </div>