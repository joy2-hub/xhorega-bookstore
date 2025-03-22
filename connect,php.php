<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber =$_POST['phonenumber'];
$message=$_POST['message'];

//connect 
$conn = new mysqli('localhost','root','','connect');
if($conn -> connect_error)
{
    die('connection failed: '.$conn -> connect_error);
}
else {
    $stmt=$conn->prepare("insert into contact(name,email,phonenumber,message)
    values (?,?,?,?)");
    $stmt->bind_param(ssis,name,email,phonenumber,message);
    $stmt->execute();
    echo"registration Succesfully...";
    $stmt->close();
    $conn->close();
}
?>