<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CityFoods | Receipt</title>
<meta charset="utf-8">
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
	<link rel='stylesheet' type='text/css' href='css/stylein.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
<script>
alert("Thank You! Your order is saved and will be delievered soon");
window.history.forward(1);
</script>
</head>
<body>
<br><br>
<br>
<?php  $d=date("d.m.Y");
$n=$_REQUEST["Name"];
$nnu=$_REQUEST['No'];
$addd=$_REQUEST["daa"];
 ?>
<div id="customer">

            <textarea id="customer-title"><?php echo "Dear ".strtoupper($n);
			?></textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea><?php echo $_REQUEST["uid"]; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo $d; ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Payment</td>
                    <td><div class="due"><?php echo $_REQUEST["p"]; ?></div></td>
                </tr>

            </table>
		
		</div>
		
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  <?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	$to   = "rajiv_182k1@yahoo.in";
  $from = $_REQUEST["em"];
 
  $headers = "From: " . strip_tags($from) . "\r\n";
  //$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
  $headers .= "CC: mevicky4u2k11@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  $message = '<html><body>';
  $message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
  $message .= "<tr><td><img src='images/logo.jpg' alt='City Foods' /></td></tr>";
  $message .= "<tr><td>Dear City Foods,<br /><br />Congratulation ! You got a new order. For more details click <a href='http://www.indiacityfoods.com/admin.php'>here</a></td></tr>";
  $message .= "<tr><td>Name:$n</td><td>No:$nnu</td><td>Add:$addd</td></tr>";
 $message .="<tr>
		      <th>Item</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>";
	  $total = 0;
	echo '<ul>';
		$cart_items = 0;
		$name=$_REQUEST['Name'];
		$No=$_REQUEST['No'];
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   		         	
					
		?>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><?php echo $obj->product_name;?></textarea></div></td>
		<?php  $message.="<tr><td>$obj->product_name</td> "; ?>
		      <td class="description"><textarea><?php echo $obj->product_desc?></textarea></td>
		      <td><textarea class="cost"><?php echo '  '.$obj->price;?></textarea></td>
		<?php  $message.="<td>$obj->price</td> "; ?>
		      <td><textarea class="qty"><?php echo '  '.$qt=$cart_itm["qty"];?></textarea></td>
		<?php  $message.="<td>$qt</td> "; ?>
		      <td><span class="price"><?php echo '  '.$tt=$currency.($cart_itm["price"]*$cart_itm["qty"]);?></span></td>
		<?php  $message.="<td>$tt</td></tr> "; ?>
		  </tr>
		  <?php
		  $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
			$cart_items++;
			$data[]=$obj->product_name;
			$prodqty[]=$cart_itm["qty"];
			$prodprice[]=$cart_itm["price"];
			 }//for each session ends here
		$ord=serialize($data);
		$ordprodqty=serialize($prodqty);
		$ordprodprice=serialize($prodprice);
		$d=date("d.m.Y");
		$result_order=$mysqli->query("Insert into orders values('$d','$name','$No','$ord','$ordprodqty','$ordprodprice')");
			?>
		 
		  
		 
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"><?php echo $st=$currency.$total;?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Service Tax @ 12.5%</td>
		      <td class="total-value"><div id="total"><?php echo $stx=$currency.($total*12.5)/100;?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Delivery Charge</td>

		      <td class="total-value"><textarea id="paid"><?php echo $dc=($total<300)? 50 : "NIL" ?></textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due"><?php echo $gt=$currency.($total<300)?$currency.($total+50+($total*12.5)/100):($total+($total*12.5)/100);?></div></td>
		  </tr>
		
		</table>
	<?php
$message .="<tr>
		      <th>Subtotal</th>
		      <th>ServiceTax@12.5%</th>
		      <th>Del Charge</th>
		      <th>G.Total</th>
		  </tr>";
		$message .= "<tr><td>$st</td><td>$stx</td><td>$dc</td><td>$gt</td></tr>";  
	  $total = 0;	
  $message .= "<tr><td font='colr:#999999;'><I>indiacityfoods.com<br>. :)</I></td></tr>"; 
  $message .= "</table>";
  $message .= "</body></html>";
  $subject="New Order";
mail($to, $subject, $message, $headers);

$to   = $_REQUEST["em"];
  $from = "info@indiacityfoods.com";
 
  $headers = "From: " . strip_tags($from) . "\r\n";
 // $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
  //$headers .= "CC: mevicky4u2k11@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  $message = '<html><body>';
  $message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
  $message .= "<tr><td><img src='images/logo.jpg' alt='City Foods' /></td></tr>";
  $message .= "<tr><td colspan=2>Dear $name,<br /><br />We thank you for ordering from our City Foods Website. We also provide Hall for party and catering service. For more details click <a href='http://www.indiacityfoods.com'>here</a></td></tr>";
  $message .= "<tr><td colspan=2 font='colr:#999999;'><I>indiacityfoods.com<br>Thanks For the visit.Please visit Again. :)</I></td></tr>"; 
  $message .= "</table>";
  $message .= "</body></html>";
  
mail($to, $subject, $message, $headers);
	unset($_SESSION['products']);
	?>	
		<div class="body3">

		<div class="main zerogrid">
<!-- footer -->
		 <center> <h5>Thank You  !</h5></center>
		  <?php include_once("footer.php")?>
		  <!--<textarea>&copy;City Foods Patna 2015              Developed by:Prab-Hat Tech Consultancy</textarea>-->
		<!-- / footer -->
		<center><input type="button" class="button1"onclick="window.print()" value="Print">
<a href="index.php" class="button1">Home</a></center>
</center>
		</div>

</div>
</body><br>

</html>
<?php }//if session ends here	
		else header("Location:index.php");
		?>	