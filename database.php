<?php

$db_server = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "mover";

$conn = new mysqli($db_server,$db_username,$db_pass, $db_name);

if($conn){
echo "You are connected";
}
else{
echo "You are not connected";
}