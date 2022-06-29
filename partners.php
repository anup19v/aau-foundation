	<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
#outer
{
	min-height:600px;
	background:red;
	width:100%;
}
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
.area
{
	min-height:300px;
	background:white;
	width:100%;
}
.footer
{
	min-height:300px;
	background:green;
	width:100%;
}
.footer_top
{
	min-height:250px;
	background:black;
	width:100%;
}
.footertop
{
	text-align:justify;
	margin-top:30px;
	margin-bottom:30px;
	color:white;
	font-size:12px;
}
.footer_bottom
{
	min-height:40px;
	background:black;
	width:100%;
	border-top:2px solid white;
}
.footerbottom
{
	text-align:LEFT;
	margin-top:10px;
	margin-bottom:10px;
	color:white;
}

.img1
	{
	min-height:300px;	
	background:white;
	margin-top:30px;
	margin-bottom:30px;
	}
.partner
{
	min-height:100px;
	margin-top:30px;
	margin-bottom:7px;
}
.box
{
	min-height:300px;
	background:#2323;
	text-align:center;
	line-height:300px;
	font-size:70px;
	color:red;
	 
}
.box1
{
	min-height:100px;
	text-align:center;
	font-size:40px;
	line-height:100px;
	padding-top:15px;
	
}
.b1
{
	box-shadow:10px 10px 10px GREY;
	min-height:100px;
	background:white;
	margin-bottom:55px;
}
.b2
{
	min-height:100px;
	padding:2px;
	
}
.b3
{
	min-height:100px;
	background:white;
	padding:2px;
	padding:40px;
}
</style>
</head>
<body>

<section id="outer">
<!------------------------------------------------------------------------- header----------------------------------------------------------------------------------->
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
<i class="fa fa-search"></i>&nbsp;&nbsp;SEACH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-th-large"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin/index.php" style="color:white;">SIGN UP</a> / SIGN UP
</div>
</div> 
</div>
</div>
</div>	
<div class="col-sm-12 header_bottom">
<div class="row">
<div class="col-sm-3">
<div class="col-sm-12"style="text-align:center;padding-top:5px;">
<div class="row">
<img img-responsive src="images/logo.png"height="70px"width="120px">
<img img-responsive src="images/aaa.jpg"height="70px"width="160px">
</div>
</div>
</div>
<div class="col-sm-6">
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white;">WHO WE ARE <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="About project greenhand.php">About project greenhand</a></li>
           <P><li><a href="the founder.php">Sadhguru The founder</a></li></P>
			<P><li><a href="Awords & Recognition.php">Awords & Recognition</a></li></P>
			<P><li><a href="Financials.php">Financials</a></li></P>
			<P><li><a href="Partners.php">Partners</a></li></P>
			<P><li><a href="Contact.php">Contact us</a></li></P>
          </ul>
        </li>
		
		     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white;">OUR PROJECTS <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
          <li><a href="treesforlife.php">trees for life</a></li>
            <P><li><a href="greenschoolmovement.php">green school movement</a></li></P>
          </ul>
        </li>
		
		      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="color:white;">GET INVOLVED <span class="fa fa-chevron-down"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">donate</a></li>
            <P><li><a href="takeapledge.php">take a pledge</a></li></P>
            <P><li><a href="becomeapghambassador.php">become a PGH ambassador</a></li></P>
          </ul>
        </li>
		
		
		
		
		<li><a href="#"style="color:white;">BLOG</a></li>
      </ul>
    </div>
  </div>
</nav>




</div>
</div>
</div>
<div class="col-sm-3">
<a href="Approach.php"><input class="btn btn-default" type="button" value="DONATE now"style="width:150px;height:40px;background:white;color:black;margin-top:19px;text-align:center;"></a>
</DIV>
</div>
</div>
</div>
</div>

<!--------------------------------------------------------------------------- workspace------------------------------------------------------------------------------>

<div class="col-sm-12 area">
<div class="row">
<div class="col-sm-12 box">
<div class="row">
our partners
</div>
</div>
<div class="col-sm-12"style="background:grey;min-height:400px;">
<div class="col-sm-12 box1">FEATURED TYPE A PARTNERS
</div>
<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\steel.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Yves Rocher Fondation, France</h4></p>
<p>Yves Rocher Foundation, France under their campaign “PLANT FOR THE PLANET” committed to plant 50 million trees all over the world in support of the “Billion Tree Campaign” led by the UNEP. Project GreenHands had the privilege of being their biggest planting partner for a partnership of planting 15 million trees by the end of 2014. Following the successful completion of the campaign, Yves Rocher has extended their partnership with Project GreenHands for planting 10 million trees by the end of 2017-18.</p>

<p>Yves Rocher Foundation has been the biggest donor for Project GreenHands.</p>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\nabard.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Tree Sisters, UK</h4></p>
<p>Tree Sisters is a growing global network of women working together to accelerate the greening of our planet through feminine values, energy and leadership. Based in Bristol, England, they have an international team that aims to build tree sisterhoods in every developed country that fundraise for existing reforestation initiatives, mainly in the tropics. Since 2014, Tree Sisters have been supporting planting trees in farmlands under the agro-forestry model “Trees for Life.”</p>


</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\max.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8 b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Tata Trusts</h4></p>
<p>Tata Trusts are amongst India's oldest, non-sectarian philanthropic organisations. They have partnered with PGH to support Isha Agro Movement's endeavour to promote Natural Farming as a movement in Tamil Nadu for the year 2019 -20.</p>


</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\sony.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>HDB</h4></p>
<p>HDB Financial Services Ltd, the NBFC of HDFC partnered with Project GreenHands to support the planting of 30,000 saplings in farmerlands as part of Trees for Life model in the year 2017.</p>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\caf.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Pharmazell India Private Limited</h4></p>
<p>Since 2014, Pharmazell from Chennai has been supporting PGH's Green School Movement. It funded the Viluppuram Green School Movement for 3 years from 2015 and Kanchipuram Green School Movement since 2017.</p>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\pwc.jpg"height="100PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>DP World</h4></p>
<p>CCTPL (Chennai Container Terminal Private Limited) or DP World has partnered with Project GreenHands to work together to enhance the livelihood of farming community by implementing the program "Trees for Life" where 10,000 saplings have been planted in farmland annually since 2015.</p>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>


</div>
<div class="col-sm-12 box1">FEATURED TYPE B PARTNERS
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\steel.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8 b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Yves Rocher Fondation, France</h4></p>
<p>Yves Rocher Foundation, France under their campaign “PLANT FOR THE PLANET” committed to plant 50 million trees all over the world in support of the “Billion Tree Campaign” led by the UNEP. Project GreenHands had the privilege of being their biggest planting partner for a partnership of planting 15 million trees by the end of 2014. Following the successful completion of the campaign, Yves Rocher has extended their partnership with Project GreenHands for planting 10 million trees by the end of 2017-18.</p>

<p>Yves Rocher Foundation has been the biggest donor for Project GreenHands.</p>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\nabard.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Tree Sisters, UK</h4></p>
<p>Tree Sisters is a growing global network of women working together to accelerate the greening of our planet through feminine values, energy and leadership. Based in Bristol, England, they have an international team that aims to build tree sisterhoods in every developed country that fundraise for existing reforestation initiatives, mainly in the tropics. Since 2014, Tree Sisters have been supporting planting trees in farmlands under the agro-forestry model “Trees for Life.”</p>


</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\max.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8 b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Tata Trusts</h4></p>
<p>Tata Trusts are amongst India's oldest, non-sectarian philanthropic organisations. They have partnered with PGH to support Isha Agro Movement's endeavour to promote Natural Farming as a movement in Tamil Nadu for the year 2019 -20.</p>


</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\sony.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>HDB</h4></p>
<p>HDB Financial Services Ltd, the NBFC of HDFC partnered with Project GreenHands to support the planting of 30,000 saplings in farmerlands as part of Trees for Life model in the year 2017.</p>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\caf.jpg"height="150PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>Pharmazell India Private Limited</h4></p>
<p>Since 2014, Pharmazell from Chennai has been supporting PGH's Green School Movement. It funded the Viluppuram Green School Movement for 3 years from 2015 and Kanchipuram Green School Movement since 2017.</p>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12">
<div class="row">
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 b1">
<div class="row">
<div class="col-sm-4  b2">
<div class="col-sm-12">
<div class="row">
<img img-responsive src="images\pwc.jpg"height="100PX"width="100%"style="padding:10px;padding-top:30px;">
</div>
</div>
</div>
<div class="col-sm-8  b3">
<div class="col-sm-12">
<div class="row">
<p><h4>DP World</h4></p>
<p>CCTPL (Chennai Container Terminal Private Limited) or DP World has partnered with Project GreenHands to work together to enhance the livelihood of farming community by implementing the program "Trees for Life" where 10,000 saplings have been planted in farmland annually since 2015.</p>

</div>
</div>
</div>
</div>

</div>
</div>
<div class="col-sm-2 "></div>
</div>
</div>

<div class="col-sm-12 box1">OUR PARTNERS
</div>
<div class="col-sm-12" style="height:80px;line-height:80px;font-size:20px;text-align:center;">Because of our partners, we’re doing more good for more people.
</div>
<div class="col-sm-12" >
<div class="col-sm-2 "></div>
<div class="col-sm-8 ">
<div class="col-sm-12 ">
<div class="col-sm-4 ">
<div class="col-sm-12 partner">
<img img-responsive src="images\caf.jpg"height="100PX"width="100%"style="padding:10px;">
</div>
</div>
<div class="col-sm-4 ">
<div class="col-sm-12 partner">
<img img-responsive src="images\max.jpg"height="100PX"width="100%"style="padding:10px;">
</div>
</div>
<div class="col-sm-4 ">
<div class="col-sm-12 partner">
<img img-responsive src="images\pwc.jpg"height="100PX"width="100%"style="padding:10px;">
</div>
</div>
</div>
<br>
<div class="col-sm-12">
<div class="col-sm-4 ">
<div class="col-sm-12 partner">
<img img-responsive src="images\nabard.jpg"height="100PX"width="100%"style="padding:10px;">
</div>
</div>
<div class="col-sm-4 ">
<div class="col-sm-12 partner">
<img img-responsive src="images\steel.jpg"height="100PX"width="100%"style="padding:10px;">
</div>
</div>
<div class="col-sm-4 ">
<div class="col-sm-12 partner">
<img img-responsive src="images\sony.jpg"height="100PX"width="100%"style="padding:10px;">
</div>
</div>
</div>
</div>
<div class="col-sm-2 "></div>
</div>
<div class="col-sm-12 "style="height:70px;"></div>
</div>
</div>
<!----------------------=======================================slider===============================------------------------------->

<!-------------======================================================================= footer------------------------------------------------------------------------------>
<div class="col-sm-12 footer">
<div class="row">
<div class="col-sm-12 footer_top">
<div class="row">
<div class="col-sm-1 "></div>
<div class="col-sm-10 ">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-3 footertop"><h4>annual report</h4><br>press and media release
</div>
<div class="col-sm-3 footertop">	<h4><b>contact us</b></h4><br><i class="fa fa-home"></i>Address:<br>254,anand lok colony<br> post:chinhat <br>district:locknow<br>pincode:226028<br>
<br><i class="fa fa-envelope"></i>:anupamv1881999@gmail.com<br><br><i class="fa fa-phone"></i> : 7376987489 
</div>
<div class="col-sm-3 footertop">	<h4><b>download our app </b></h4><br><i class="fa fa-play store"style="font-size:20px;border:2px solid white;;padding:10px;border-radius:5px;"> </i> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-apple"style="font-size:20px;border:2px solid white;;padding:10px;border-radius:5px;"></i>	</div>
<div class="col-sm-3 footertop">	<h4><b>Find us on social media</b></h4><br><i class="fa fa-facebook"style="font-size:30px;">&nbsp;&nbsp;</i><i class="fa fa-twitter"style="font-size:30px;"></i>&nbsp;&nbsp;<i class="fa fa-youtube"style="font-size:30px;"></i>
</div>
</div>
</div>
</div>
<div class="col-sm-1 "></div>
</div>
</div>
<div class="col-sm-12 footer_bottom">
<div class="row">
<div class="col-sm-1 "></div>
<div class="col-sm-5 ">
<div class="col-sm-12 ">
<div class="row">
<div class="col-sm-4 footerbottom">About outreach</div>
<div class="col-sm-4 footerbottom">Privacy</div>
<div class="col-sm-4 footerbottom">Terms & conditions</div>
</div>
</div>
</div>
<div class="col-sm-6 "></div>
</div>
</div>
</div>
</div>
</section>

</body>
<html/>