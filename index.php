<?php 
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'ecommerce');
$sql = "SELECT * FROM products WHERE featured=1";
$featured = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">TechShop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Products
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="product-laptop.php">Laptops</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Phones</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Top Products</h2> <br> <br>
        <?php 
        while($product = mysqli_fetch_assoc($featured)) { // Removed the semicolon here
        ?>
        <div class="col-md-5">
            <h4> <?= $product['title'];?></h4>
            <img class="img-fluid" src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/> <!-- Fixed typo here -->
            <p class="Iprice">Rs <?= $product['price'];?></p>
            <a href="details.php">
                <button type="button" class="btn btn-success" data-toggle="model" data-target="#details-1">More</button>
            </a>
        </div>
        <?php 
        } // Moved the closing brace for the while loop here
        ?>
    </div>
  </div>
</body>
</html>
  