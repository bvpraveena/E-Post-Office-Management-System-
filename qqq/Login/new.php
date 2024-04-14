<?php
$uname=$_POST['uname'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','registration1');
if($conn->connect_error){
    die('çonnection_error:');
}else{
    $stmt=$conn->prepare("insert into register1(uname,password) values(?,?)");
    $stmt->bind_param("ssssi",$uname,$password);
    $stmt->execute();
    echo "registration success...";
    $stmt->close();
    $conn->close();
}
