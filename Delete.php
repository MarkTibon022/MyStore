<?php
include_once "Config.php";

if (isset($_POST["delete"])) {
    $Id = $_POST["ID"];
    $sql = "DELETE FROM user_list WHERE Id = '$Id'";
    $con->query($sql) or die ($con->error);
    header("location: index.php");
}

?>