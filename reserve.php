<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CityFoods | Reservation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script type="text/javascript">
		function check()
		{
		var n=document.forms["mF"].["NameCon"].value;
		var email=document.forms["mF"].["emailCon"].value;
		var no=document.forms["mF"].["phoneCon"].value;
		var msg=document.forms["mF"].["MsgCon"].value;
		if (n==null || n=="")
		{
		alert("Name must be filled out");
		return false;
		}
		else if (!Number(no) || no=="" || no<=0)
		{
		alert("Mobile no  must be filled out & It must be a No");
		return false;
		}
		if (msg==null || msg=="")
		{
		alert("Message field is Empty");
		return false;
		}
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
 }
</script>		
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page5">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			
				<?php include("header.php"); ?>
			
<!-- / header -->
<!-- content -->
			<article id="content">
				<div class="wrap">
					<div class="box">
						<div>
							<h2 class="letter_spacing">Reservation <span>Form</span></h2>
							<?php if(isset($_REQUEST['thank']))
	{ ?>
	<span>Thanks for your Feedback.</span>
	<?php	}
	else { ?>
     <span>Please fill all the texts in the fields.</span><br>
	 <?php
	 }
	?>
							<form id="ContactForm" name="mF" onSubmit="return check()" action="reservesubmit.php" method="POST">
								<div>
									<div class="wrapper">
										<span>Your Name:</span>
										<input type="text" class="input" name="Nameres" required >
									</div>
									<div class="wrapper">
										<span>Your E-mail:</span>
										<input type="text" class="input" name="emailres" >								
									</div>
									<div class="wrapper">
										<span>Mobile:</span>
										<input type="text" class="input" name="phoneres" >								
									</div>
									<div class="wrapper">
										<span>Reservation For:</span>
										<select class="input" placeholder="Click here to Select" name="selection">
									<option></option>
									<option value="Table">Table</option>
									<option value="Party">Party</option>
									<option value="Birthday">Birthday Celebration</option>
									</select>								
									</div>
									<div class="textarea_box">
										<span>Specify Other Details(e.g. Time & Date, etc):</span>
										<textarea cols="1" rows="1"  name="Msgres" placeholder="Eg. On 26 Jan, 1 PM " ></textarea>								
									</div>
									
							
									
									<center>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Submit Order</a>
									<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Clear</a>		
									</center>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid">
		<article id="content2">
			<section>
				<div class="wrapper">
					<div class="col-1-3"><div class="wrap-col">
						<h2>Our Social Contacts</h2>
						<div class="wrapper pad_bot1">
							     <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FPatnaCityFoods&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>

						</div>
					</div></div>
					<div class="col-2-3">
					<h2 style="padding-left: 10px;">Our Contacts</h2>

					<div class="col-1-2"><div class="wrap-col">
							<p class="address">
								 1st floor,<br> opposite Adidas showroom,<br>
                 Near Sheikhpura More,<br>
                Raza Bazar, Bailey Road,<br>
				Patna 800014,
				Bihar.<br>
								<span>Mobile:</span>    +91 707 977 5753/54<br>
								<!--span>Telephone:</span>    +1 959 603 6035<br-->
								<span>E-mail:</span>  <a href="mailto:">info@indiacityfoods.com</a>
							<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d1799.0099078703834!2d85.0938617646038!3d25.604257775841123!3m2!1i1024!2i768!4f13.1!2m1!1sadidas+showroom+Raja+Bazar+Bus+Stop%2C+Bailey+Rd%2C+Raja+Bazar%2C+Indrapuri%2C+Patna%2C+Bihar+800014!5e0!3m2!1sen!2sin!4v1421535675615" width="200" height="200" frameborder="0" style="border:0"></iframe>

							</p>
						</div></div>
					<div class="col-1-2"><div class="wrap-col">
							<p class="address">
								 B-2,Shiv Laxmi Plaza,<br>
                Below Reliance Footprints,<br>
                Near Rajendra Nagar Terminal,<br>
                Kankerbagh Main Road,<br>
				Patna 800020,
				Bihar.<br>
								<span>Mobile:</span>    +91 707 977 5753/54<br>
								<!--span>Telephone:</span>    +1 959 603 6035<br-->
								<span>E-mail:</span>             <a href="mailto:">info@indiacityfoods.com</a>
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3598.076442380298!2d85.16014600000001!3d25.60237599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1420978655821" width="200" height="200" frameborder="0" style="border:0"></iframe>
							</p>
						</div></div>	
				</div>
				</div>
			</section>
		</article>
<!-- / content -->
	</div>
</div>
<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
		<?php include("footer.php"); ?>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>