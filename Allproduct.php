<?php
include_once "Components/Nav.php";
include_once "Config.php";

$sql = "SELECT * FROM product_list";
$result = $con->query($sql) or die ($con->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Library/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Icon/fontawesome/css/all.css">
    <link rel="stylesheet" href="Assets/Css/AllP.css">
    <title>Document</title>
</head>
<body>
        <div class="product">
            <div class="container-lg">
                <div class="row">
                    <?php while ($row = $result->fetch_assoc()) {?>
                        <div class="col-lg-3 col-6 ">
                            <div class="cont-item">
                            <div class="cont-product">
                                <img src="./productimage/<?php echo $row["Product"]; ?>" class="img-fluid p-img" alt="">
                            </div>
                            <div class="text-product">
                                <h5 class="text-capitalize fw-bolder"><?php echo $row["Product_Name"]; ?></h5>
                                <h5 class="text-capitalize fw-bolder">₱ <?php echo $row["Price"]; ?></h5>
                                <h5 class="text-capitalize fw-bolder"><?php echo $row["Description"]; ?></h5>
                                <div class="cont-star">
                                    <p>RATES <i <i class="fa-solid fa-star  c-p"></i></i></p>  
                                    <p><i <i class="fa-solid fa-star  c-p"></i></i></p>  
                                    <p><i <i class="fa-solid fa-star  c-p"></i></i></p>  
                                    <p><i class="fa-regular fa-star"></i></p>
                                    <p><i class="fa-regular fa-star"></i></p>  
                                </div>
                                <button type="submit" class="btn btn-primary btnbuy">Buy</button>
                                <button type="submit" class="btn btn-success btnbuy">Add to Cart</button>
                            </div>
                        </div>
                            </div>
                    <?php };?>
                </div>
            </div>
        </div>
</body>
</html>