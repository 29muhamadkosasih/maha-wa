<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "db_baru";

//connect php to mysql using mysqli_connect
$db = mysqli_connect($server, $user, $password, $db_name);

if(!$db){
    die("Fail to connect to database: ".mysqli_connect_error());
}

?>