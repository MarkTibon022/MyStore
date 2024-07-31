<?php
session_start();
include_once "Config.php";

if (isset($_POST["signup"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $echeckEmail = "SELECT * FROM user_list WHERE Email = '$email'";
    $result = $con->query($echeckEmail) or die ($con->error);
    
    if ($result->num_rows > 0 ) {
        echo "Sory";
    } else {
        if (isset($_FILES["profile"])) {
            $profile = $_FILES["profile"] ["name"];
            $loc_image = "./userProfile/".$profile;

            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $loc_image)) {
                $sql = "INSERT INTO `user_list`( `Profile`, `Name`, `Phone`, `Email`, `Password`) VALUES ('$profile', '$name','$phone','$email','$pwd')";
                $result = $con->query($sql) or die ($con->error);
                header("location: index.php");
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/Library/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Assets/Css/Login.css">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 p-0">
                    <div class="cont-img">
                        <img src="./Assets/Image/pretty-young-woman-with-shopping-bags.jpg" class="c-img" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="loginform p-4">
                        <form action="" method="post" enctype="multipart/form-data" class="text-center">
                            <img src="./Assets/Image/451948157_1143314403641402_3580368606005539402_n-removebg-preview.png" alt="" class="c-logo my-3">
                            <h3 class="fw-bold mb-3">Sign Up</h3>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="file" name="profile" class="form-control">
                            </div>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="text" name="name" class="form-control" placeholder="name">
                            </div>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="number" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="password" name="pwd" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" name="signup" class="btn btn-primary mb-3">Log In</button>
                            <p class="text-secondary ">By continuing, you agree to Freepik Company’s Terms of Use and Privacy Policy.</p>
                            <a href="index.php" class="nav-link" >Create Account? <span class="text-primary">Log up</span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>