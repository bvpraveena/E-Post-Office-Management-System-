<?php
$serverName = "localhost";
$userName="root";
$password="";
$database = "users";
$conn = mysqli_connect($serverName, $userName, $password, $database);
if(!$conn){
    die("Error".mysqli_error($conn));
}
else{
echo "<script>alert('Database connected')</script>";
}
?>
