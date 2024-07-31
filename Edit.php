<?php
include_once "Components/Nav.php";
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
    <link rel="stylesheet" href="Assets/Css/Edit.css">
    <title>Document</title>
</head>
<body>
    <div class="edit">
        <form action="" method="post" enctype="multipart/form-data" class="text-center">
            <div class="input-group">
                <input type="file" placeholder="" name="profile" class="form-control">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Name" name="name" class="form-control">
            </div>
            <div class="input-group">
                <input type="number" placeholder="Phone No." name="phone" class="form-control">
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" class="form-control"  disabled>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pwd" class="form-control">
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>
</html>