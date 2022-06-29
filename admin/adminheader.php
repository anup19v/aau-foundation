 
 
 <head>
 <?php include('link.php');?>
 <style>

.header
{
	min-height:100px;
	background:yellow;
	width:100%;
}
.header_top
{
	min-height:30px;
	background:grey;
	width:100%;
	color:white;
	text-align:center;
	line-height:30px;
	font-size:11px;
	
}
.header_bottom
{
	min-height:70px;
	width:100%;
	background:black;
}

 </style>
 </head>

 <section>
	<div class="col-sm-12 header">
<div class="row">
<div class="col-sm-12 header_top">
<div class="row">
<div class="col-sm-6">
<div class="col-sm-12 ">
<div class="row">
<a href="main.php"style="color:white;">
<span>
<i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;&nbsp; Back to outreach homepage</span></a>
</div>	
</div>
</div>
<div class="col-sm-6">
<div class="col-sm-12">
<div class="row">
<i class="fa fa-search"></i>&nbsp;&nbsp;SEACH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-th-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SIGN IN / SIGN UP
</div>
</div> 
</div>
</div>
</div>	
<div class="col-sm-12 header_bottom">
<div class="row">
<div class="col-sm-4">
<div class="col-sm-12"style="text-align:center;padding-top:5px;">
<div class="row">
<img img-responsive src="images/logo.png"height="70px"width="120px">
<img img-responsive src="images/aaa.jpg"height="70px"width="160px">
</div>
</div>
</div>
<div class="col-sm-8">
<div class="col-sm-12">
<div class="row">


<nav class="navbar navbar-default" ID="menu"style="background:black;color:white;border:none;margin-top:10px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
      
      <ul id="nav" class="nav navbar-nav navbar-left">
		     <li class="dropdown">
          <a href="management.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white;">MANAGEMENT <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="contactmanagement.php">contact management</a></li>
           <P><li><a href="voulenteermanagement.php">voulenteer management</a></li></P>
          </ul>
        </li>
		
		     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white;">ADD <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
          <li><a href="addreport.php">add a report</a></li>
            <P><li><a href="story.php">add a story</a></li></P>
			 <li><a href="addblog.php">add a blog</a></li>
          </ul>
        </li>
		
		      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white;">ACCOUNT<span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">log out</a></li>
            <P><li><a href="admin_cp.php">change password</a></li></P>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




</div>
</div>
</div>
</div>
</div>
</div>
</div>
	
 </section>
