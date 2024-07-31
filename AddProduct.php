<?php
include_once "Components/Nav.php";
include_once "Config.php";

if (isset($_POST["add"])) {
    $productname = $_POST["productname"];
    $prize = $_POST["prize"];
    $description = $_POST["description"];

    if (isset($_FILES["product"])) {
        $product = $_FILES["product"]["name"];
        $loc_img = "./productimage/".$product;

        if (move_uploaded_file($_FILES["product"] ["tmp_name"], $loc_img)) {
            $sql = "INSERT INTO `product_list`(`Product`, `Product_Name`, `Price`, `Description`) VALUES ('$product','$productname','$prize','$description')";
            $result = $con->query($sql) or die ($con->error);

        } else {
            echo "not move";
        }
    } else {
        echo "no upload";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Library/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Css/Addp.css">
    <title>Document</title>
</head>
<body>
    <div class="add">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" name="product" class="form-control mb-3">
            </div>
            <div class="input-group">
                <input type="text" name="productname" placeholder="Product Name" class="form-control mb-3">
            </div>
            <div class="input-group">
                <input type="text" name="prize" placeholder="Prize" class="form-control mb-3">
            </div>
            <div class="input-group">
                <textarea name="description" placeholder="Description.." class="form-control mb-3" id=""></textarea>
            </div>
            <button type="submit" name="add" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>