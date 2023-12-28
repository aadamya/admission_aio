<?php
$localhost = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'admin';

$base_address = "http://localhost/admission_plateform/";

$config = mysqli_connect($localhost,$username,$password,$dbname);


if($config){
    // echo "connection successfull";
}
else{
    echo "no connection";
}

?>