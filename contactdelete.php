<?php
$id=$_REQUEST['id'];
include('conection.php');
 $sql="delete from tbl_contect where id='".$id."'";
mysqli_query($con,$sql);
header('location:contactmanagement.php');
?>