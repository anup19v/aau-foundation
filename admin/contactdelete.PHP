<?php
$id=$_REQUEST['id'];
include('conection.php');
echo $sql="delete from tbl_contact where id='".$id."'";
mysqli_query($con,$sql);
header('location:contactmanagement.php');
?>