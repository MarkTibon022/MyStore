<?php
include_once "Config.php";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $sql = "SELECT * FROM user_list WHERE Email = '$email' AND Password = '$pwd'";
    $result = $con->query($sql) or die ($con->error);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION["profile"] = $row["Profile"];
        $_SESSION["name"] = $row["Name"];
        $_SESSION["email"] = $row["Email"];
        $_SESSION["phone"] = $row["Phone"];
        header("location: Home.php");
    } else {
        echo "sorry";
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
                    <div class="loginform p-5">
                        <form action="" method="post" enctype="multipart/form-data" class="text-center">
                            <img src="./Assets/Image/451948157_1143314403641402_3580368606005539402_n-removebg-preview.png" alt="" class="c-logo mt-5 mb-4">
                            <h3 class="fw-bold pb-4">Sign In</h3>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group mb-3 input-group-lg">
                                <input type="password" name="pwd" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary mb-3">Log In</button>
                            <p class="text-secondary ">By continuing, you agree to Freepik Company’s Terms of Use and Privacy Policy.</p>
                            <a href="Signup.php" class="nav-link" >Create Account? <span class="text-primary">Sign up</span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>