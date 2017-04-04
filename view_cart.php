<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Cityfoods | View Order</title>
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
					<div class="col-1-3">
						<h2 style="padding-left: 10px;"><a href="menu.php?list=1&mid=3">Order More</a></h2>
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
					<div class="col-2-3">
					<h2 style="padding-left: 10px;">Your Order</h2>
					
<!--#######################################################################################-->
<div id="products-wrapper">
 
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="orderform.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li >';
			
            echo '<div >';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')<a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></h3> ';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '<ul class="price"><li>Qty : '.$cart_itm["qty"].'<span>'. $currency.$obj->price.'X
							'.$cart_itm["qty"].'='.($cart_itm["price"]*$cart_itm["qty"]).'</span></li>';
			echo '</ul>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Sub-Total : '.$currency.$total.'  </strong>  ';
		echo '<input type="submit" class="button1" value="Order Now" />';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
</div>
<!--#######################################################################################-->
		  
		  

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