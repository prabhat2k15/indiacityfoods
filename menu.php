<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Cityfoods | Menu</title>
	<meta name="description" content="India City Foods is the only food counter which has the facility of online and on call home delivery with a take away food counter as well. This is an easily reachable outlet for ensuring a constant supply of our mouth-watering dishes to the customers." />
	<meta name="keywords" content="Best Catering Services, Order Food Online, Restaurant Home Delivery, Tandori Food Delivery, Chinese Food Patna"/>

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
<body id="page3">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			<?php include_once("header.php"); ?>
<!-- / header -->
<!-- content -->
			<!--article id="content">
				<div class="wrap">
					<section class="col-1-3"><div class="wrap-col">
						<div class="box">
							<div>
								<h2 class="letter_spacing">Menu <span>Accessories</span></h2>
								<figure><img src="images/page3_img1.jpg" alt="" ></figure>
								<p class="pad_bot1">Neque porro quisquam est, qui dolor- em ipsum qudolor sitamet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
								<a href="#" class="button1">Read More</a>
							</div>
						</div>
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<div class="box">
							<div>
								<h2>Menu <span>Pairing</span></h2>
								<figure><img src="images/page3_img2.jpg" alt="" ></figure>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nos- trum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
								<a href="#" class="button1">Proposal for You</a>
							</div>
						</div>
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<div class="box">
							<div>
								<h2>Exclusive <span>Menus</span></h2>
								<figure><img src="images/page3_img3.jpg" alt="" ></figure>
								<p class="pad_bot1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
								<a href="#" class="button1">Read More</a>
							</div>
						</div>
					</div></section>
				</div>
			</article-->
		</div>
	</div>
</div>
<div class="body2">
	<div class="main zerogrid">
		<article id="content2">
			<section>
				<div class="wrapper">
					<head><!--a href="view_cart.php">View Cart<img src="images/cart.png"height="25" width="25" /></a-->
						<div class="col-1-3">
						<h2 style="padding-left: 10px;">Our Menu List</h2>
						<div class="wrap-col mag-2">
						<div class="wrapper pad_bot1">
							<figure class="pad_bot1"><img src="images/page3_img4.jpg" alt=""></figure>
							<!--City Foods gives you multiple option of food delivery. We deliver the food to your Home or you can take it away from us.
							--><ul class="price">
								<li><a href="menu.php?list=1&mid=3">Starters & Tikkas</a><span></span></li>
								<li><a href="menu.php?list=2&mid=3">City Foods Wraps</a><span></span></li>
								<li><a href="menu.php?list=3&mid=3">Non Veg Curries</a><span></span></li>
								<li><a href="menu.php?list=4&mid=3">Veg Curries</a><span></span></li>
								<li><a href="menu.php?list=5&mid=3">Sizzlers</a><span></span></li>
								<li><a href="menu.php?list=6&mid=3">Biryani</a><span></span></li>
								<li><a href="menu.php?list=7&mid=3">Roti Rice & Salads</a><span></span></li>
								<li><a href="menu.php?list=8&mid=3">Shanghai Kitchen</a><span></span></li>
								<li><a href="menu.php?list=9&mid=3">Thirst Cruncher</a><span></span></li>
								<li><a href="menu.php?list=10&mid=3">Combos (Veg & Non Veg)</a><span></span></li>
							</ul>
						</div></div>
					</div>
<h6><a href="view_cart.php"><img src="images/cart.png" height="50" width="50"/>Your Order </a></h6>
		<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
       // echo '<li >';
        //echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        //echo '<h3>'.$cart_itm["name"].'</h3>';
      //  echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
       // echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        //echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        //echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php" class="btn">Check-out!</a></span>';
	//echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'" >Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>			
					<div class="col-2-3">
					<h2 style="padding-left: 10px;">
					<?php
					if($_REQUEST["list"]==1) echo '<img src="images/prettyPhoto/starters.jpg" height="100" width="100" alt="">&raquo;Starter & Tikkas';
					if($_REQUEST["list"]==2) echo '<img src="images/prettyPhoto/wraps.jpg" height="100" width="100" alt="">&raquo;City Foods Wraps';
					if($_REQUEST["list"]==3) echo '<img src="images/prettyPhoto/nonvegcurries.jpg" height="100" width="100" alt="">&raquo;Non Veg Curries';
					if($_REQUEST["list"]==4) echo '<img src="images/prettyPhoto/vegcurries.jpg" height="100" width="100" alt="">&raquo;Veg Curries';
					if($_REQUEST["list"]==5) echo '<img src="images/prettyPhoto/sizzlers.jpg" height="100" width="100" alt="">&raquo;Sizzlers';
					if($_REQUEST["list"]==6) echo '<img src="images/prettyPhoto/biryani.jpg" height="100" width="100" alt="">&raquo;Biryani';
					if($_REQUEST["list"]==7) echo '<img src="images/prettyPhoto/salads.jpg" height="100" width="100" alt="">&raquo;Roti Rice & Salads';
					if($_REQUEST["list"]==8) echo '<img src="images/prettyPhoto/shanghai.jpg" height="100" width="100" alt="">&raquo;Shanghai Kitchen';
					if($_REQUEST["list"]==9) echo '<img src="images/prettyPhoto/thirst.jpg" height="100" width="100" alt="">&raquo;Thirst Cruncher';	
					if($_REQUEST["list"]==10) echo '<img src="images/prettyPhoto/thali.jpg" height="100" width="100" alt="">&raquo;Combos (Veg & Non Veg)';
					?>
					</h2>
					
 <?php
// 1- **************************************************************************
	//if($_GET['id']==1)
	//{//if 1 strats
	
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   
	$results = $mysqli->query("SELECT * FROM products ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
		if($_GET['list']==$obj->prod_cate)
		{
			echo '<div class="col-1-2"><div class="wrap-col">'; 
            echo '<form method="post" action="cart_update.php">';
			//echo '<div class="product-thumb"><img src="cartimages/'.$obj->product_img_name.'"></div>';
            echo '<div ><h3>'.$obj->product_name.'</h3>';
            echo '<div >'.$obj->product_desc.'</div>';
            echo '<div >';
			echo 'Price/Qty   '.$currency.$obj->price.' | ';
            echo 'Enter Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="button1">Add To Cart</button>';
			echo '</div></div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }//if $GET id
		}//while
    
    }
	 
	//}//if 1 ends
    ?>
	
	<div class="col-1-2"><div class="wrap-col">
<h6><img src="images/cart.png" height="50" width="50"/>Your Order</h6>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
       // echo '<li >';
        //echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        //echo '<h3>'.$cart_itm["name"].'</h3>';
      //  echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
       // echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        //echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        //echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php" class="btn">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'" >Empty Cart</a></span>';
}else{
    echo 'Your Cart is empty';
}
?>

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