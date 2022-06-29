<?php
$id=$_POST['id'];

$pname=$_POST['title'];
$pmodel=$_POST['heading'];
$pprice=$_POST['story'];
$pimage=$_FILES['file']['name'];
echo $pimage;
$location="../pimage/";
move_uploaded_file($ptmpname,$location.$pimage);
include('conection.php');
echo $sql="insert into tbl_product
(acid,atid,pname,pmodel,pprice,pmrp,pdiscount,pcolor,psize,pdescripition,pquantity,pimage,pdate)
values('".$cid."','".$tid."','".$pname."','".$pmodel."','".$pprice."','".$pmrp."',
'".$pdiscount."','".$pcolor."','".$psize."','".$pdesc."','".$pqty."','".$pimage."',curdate())";
mysqli_query($con,$sql);
header('location:add_product.php?msg=1');
?>