<?php
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$msg=$_POST['msg'];

include('conection.php');
$sql="insert into tbl_pledge(name,email,gender,contact,msg) values('".$name."','".$email."','".$gender."','".$contact."','".$msg."')";

mysqli_query($con,$sql);
header('location:takeapledge.php?msg=1')

?>