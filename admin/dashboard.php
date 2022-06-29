<?php 
error_reporting(0);
session_start();
$email= $_SESSION['user'];
//echo $email;
if($email=="")
{
	header('location:index.php');
}
$msg=$_REQUEST['msg'];
if($msg==1)
{
echo "<script>alert('product addedd successfully...')</script>";	
}
?>


<head>
<?php include('link.php');?>
<style>
#outer
{
	min-height:200px;
	background:white;
}

</style>
</head>
<section>
<?php include('adminheader.php');?>
</section>

<section>
<div class="col-sm-12" id="outer">

<div class="col-sm-12">
<div class="row">
<div class="col-sm-12 management"style="min-height:100px;line-height:100px;font-size:50px;text-align:center;margin-top:20px;">
MANAGEMENT
</div>
<div class="col-sm-12">

<div class="col-sm-2 "></div>

<div class="col-sm-8">
<a href="voulenteermanagement.php"><div class="col-sm-6 ">
<div class="col-sm-12 "style="min-height:200px; background:blue;color:white;margin:30px;text-align:center;padding:20px;font-size:20px;">
<i class="fa fa-user" style="line-height:120px;color:white;font-size:100px;"></i>
<br><br>
voulenteer management


</div>
</div></a>

<a href="contactmanagement.php"><div class="col-sm-6 ">
<div class="col-sm-12 "style="min-height:200px; background:blue;color:white;margin:30px;text-align:center;padding:20px;font-size:20px;">
<i class="fa fa-mobile" style="line-height:120px;color:white;font-size:100px;"></i>
<br><br>
contact management

</div>
</div></a>
</div>
<div class="col-sm-2 "></div>

</div>

</div>
</div>




<div class="col-sm-12">
<div class="row">
<div class="col-sm-12 management"style="min-height:100px;line-height:100px;font-size:50px;text-align:center;margin-top:20px;">
ADD
</div>
<div class="col-sm-12">

<div class="col-sm-1 "></div>

<div class="col-sm-10">

<a href="addreport.php"><div class="col-sm-4 ">
<div class="col-sm-12 "style="min-height:200px; background:blue;color:white;margin:30px;text-align:center;padding:20px;font-size:20px;">
<i class="fa fa-file-text" style="line-height:120px;color:white;font-size:100px;"></i>
<br><br>
add a report


</div>
</div></a>

<a href="story.php"><div class="col-sm-4 ">
<div class="col-sm-12 "style="min-height:200px; background:blue;color:white;margin:30px;text-align:center;padding:20px;font-size:20px;">
<i class="fa fa-pencil" style="line-height:120px;color:white;font-size:100px;"></i>
<br><br>
add a story


</div>
</div></a>

<a href="addblog.php"><div class="col-sm-4 ">
<div class="col-sm-12 "style="min-height:200px; background:blue;color:white;margin:30px;text-align:center;padding:20px;font-size:20px;">
<i class="fa fa-comments-o" style="line-height:120px;color:white;font-size:100px;"></i>
<br><br>
add a blog

</div></a>
</div>
</div>
<div class="col-sm-1 "></div>

</div>

</div>
</div>

</div>

</section>
<section>
<?php include('adminfooter.php');?>
</section>