<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'admission_platform';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if($config)
{
    echo "Connection Successful";
}
else
{
    echo "Database Connetion Failed with Error".mysqli_connect_error();
}


// $sql="insert into students_list(name, gender,dob,email) values( 'John Doe','male' ,'2000-01-01','abc@gmail.com')";
// $query = mysqli_query($config,$sql);
// if($query){
//  echo 'data inserted successfully';
// }else{
//  echo 'error'
// }



?>

