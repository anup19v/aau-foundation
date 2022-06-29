<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$msg=$_POST['msg'];

include('conection.php');
$sql="insert into tbl_contect(name,email,mobile,msg) values('".$name."','".$email."','".$mobile."','".$msg."')";

mysqli_query($con,$sql);
header('location:contact.php?msg=1')

?>