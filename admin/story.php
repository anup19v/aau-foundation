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
<html>
<head>
<?php include('link.php');?>
</head>

<body>
<section>
<?php include('adminheader.php');?>
</section>
<section>
<div class="col-sm-12">
<div class="col-sm-3"></div>
<div class="col-sm-6" style="background:pink;min-height:300px;margin:50px;">
<div class="col-sm-12" style="min-height:100px;font-size:35px;text-align:center;line-height:100px;">
<b>Add A Story</b>
</div>
<div class="col-sm-12" style="min-height:200px;">
<form action="storycode.php" method="post" enctype="multipart/form-data" >
<div class="form-group">
<label>Title of story</label>
<input type="text" class="form-control" name="title" placeholder="Enter title" maxlength="70" style="width:700px;" required />
  </div>
<br/>
<div class="form-group">
<label>Heading</label>
<input type="text" class="form-control" name="heading" placeholder="Heading" maxlength="50" style="width:700px;" required />
  </div>
<div class="form-group">
<label>story</label>
<textarea type="Massage" class="form-control"placeholder="write your story here"name="story" maxlength="250"  style="width:700px;" required / >
</textarea>
  </div>
  <div class="form-group">
<label>image</label>
<input type="file" name="image" class="form-control" required ><br/>
<button type="submit" class="btn btn-success btn-lg">SAVE</button>
</div>
 <br><br>
</form>


</div>

</div>
<div class="col-sm-3"></div>
</div>

<div class="col-sm-12" style="margin-top:3%;margin-bottom:3%;">
<div class="table-responsive">
  <table class="table">
  
  		<tr class="warning">
  <td>S.no</td>
  <td>title</td>
  <td>heading</td>
  <td>story</td>
  <td>image</td>
  <td>date</td>
  <td>Delete</td>
</tr>
  
  <?php
  $sql="select * from tbl_product";
$res=mysqli_query($con,$sql);
$i=1;
while($row=mysqli_fetch_array($res))
{
	?>

	
	<tr class="success">
	<td><?php echo $i;?></td>
	 <td><?php echo $row['title'];?></td>
	  <td><?php echo $row['heading'];?></td>
	   <td><?php echo $row['story'];?></td>
		    <td><?php echo $row['image'];?></td>
			   <td><?php echo $row['date'];?></td>
  
  <td><a href="productdelete.php?id=<?php echo $row['pid'];?>"><span class="fa fa-trash" style="color:red;"></span></a></td>
</tr>
	<?php
	$i++;
}
?>
 
  </table>
</div>
</div>

</section>

<section>
<?php include('adminfooter.php');?>
</section>
</body>