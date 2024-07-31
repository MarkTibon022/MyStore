<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "my_store";

$con = new mysqli($host, $username, $password, $dbname);
if ($con->connect_error) {
    die("bad ".$con->error);
}

?>