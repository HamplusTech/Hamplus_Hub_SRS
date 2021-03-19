<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'hamplus_hub';

$connect = mysqli_connect($server, $username, $password, $database);

if ($connect):
    // echo "You are connected";
else:
    die("Connection Failed");
endif;
?>