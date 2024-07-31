<?php
session_start();
include_once "Config.php";

$sql = "SELECT * FROM user_list";
$result = $con->query($sql) or die ($con->error);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Library/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/Css/nav.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark p-0">
        <div class="container-fluid">
            <a href="" class="navbar-brand"><img src="Assets/Image/451948157_1143314403641402_3580368606005539402_n-removebg-preview.png" class="c-logo" alt=""></a>
            <button type="button" class="btn navbar-toggler" data-bs-toggle="collapse" data-bs-target="#showlink" aria-controls="showlink" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="showlink">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a href="Home.php" class="nav-link text-light">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="AddProduct.php" class="nav-link text-light">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="AllProduct.php" class="nav-link text-light">Item</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Report</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#showuser">
                            <img src="./userProfile/<?php echo $_SESSION["profile"];?>" alt="Assets/Image/images.jpg" class="c-user">
                        </button>
                        <div class="modal fade" id="showuser" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="text-center">
                                            <img src="./userProfile/<?php echo $_SESSION["profile"];?>" alt="Assets/Image/images.jpg" class="modal-title c-user w-25 h-25">
                                        </div>
                                    </div>
                                        <div class="modal-bpsy">
                                            <div class="text-center">
                                                <h5 class="fw-bold">Name : <span class="fw-bold"><?php echo $_SESSION["name"];?></span></h5>
                                                <h5 class="fw-bold">Email : <span class="fw-bold"><?php echo $_SESSION["email"];?></span></h5>                                                
                                                <h5 class="fw-bold">Phone No. : <span class="fw-bold"><?php echo $_SESSION["phone"];?></span></h5>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="Edit.php?ID=<?php echo $row["Id"]; ?>" class="btn btn-primary">Edit Acount</a>
                                            <form action="Delete.php" method="post">
                                            <button type="submit" name="delete" class="btn btn-danger">Delete Account</button>
                                            <input type="hidden" name="ID" value="<?php echo $row["Id"];?>">
                                            </form>
                                            <a href="Lagout.php" class="btn btn-warning">Log Out</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
<script src="Assets/Library/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</html>