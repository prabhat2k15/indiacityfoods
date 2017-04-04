<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CityFoods | Receipt</title>
<meta charset="utf-8">

	<link rel='stylesheet' type='text/css' href='css/stylein.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->

</head>
<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">
			<?php if(isset($_SESSION['loc']) && $_SESSION['loc']=="Kbagh")
			{  ?>
City Foods
	B-2,Shiv Plaza Complex
	Near Rajendra Nagar Terminal
	Patna 800020
	Bihar.

Mobile: +91-7079775753 / 54
<?php } 
		if(isset($_SESSION['loc']) && $_SESSION['loc']=="RzBaz")
		{	?>	City Foods 
1st floor, opposite Adidas showroom,
Near Sheikhpura More,
Raza Bazar, Bailey Road,
Patna 800014, Bihar.

Mobile:+91 7079775753 / 54	
<?php	}	?>	
</textarea>

            <p align="right" >
			<img id="image" src="images/logocf4.png" height="150" width="150" alt="logo" />
            </p>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
<?php if(isset($_SESSION["adminsess"]))
    { 
	
	
?>
            <textarea id="customer-title"><?php echo strtoupper($_REQUEST['name1']);
			?></textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea><?php echo $_REQUEST["uid"];?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo date("d.m.Y");?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Payment</td>
                    <td><div class="due">COD</div></td>
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
	
	$total=0;
	$N=$_REQUEST["name1"];
	$Nu=$_REQUEST["ns"];
	  $result_order=$mysqli->query("Select * from orders where Name='$N' AND Mobile='$Nu'");
$result_order1=$mysqli->query("Select * from orders where Name='$N' AND Mobile='$Nu'");
$result_order2=$mysqli->query("Select * from orders where Name='$N' AND Mobile='$Nu'");
	$countprice=0;
		//$ordqty1=$result_order->fetch_array();
		$values1=$result_order1->fetch_array();
		$values2=$result_order2->fetch_array();		
	while($values=$result_order->fetch_array())
	{	
	
	$values=unserialize($values['Order']);
	$values1=unserialize($values1['prodqty']);
	$values2=unserialize($values2['prodprice']);
	
		//foreach($values as $orderz $ordqty as $qty)
		for($i=0;$i<count($values);++$i)
		{   		         	
					
		?>
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><?php echo "      ".$i+1;?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea><?php echo $values[$i]; ?></textarea></td>
			  <td><textarea class="cost"><?php echo '  '.$values2[$i];?></textarea></td>
		      <td><textarea class="qty"><?php echo '  '.$values1[$i];?></textarea></td>
		      <td><span class="price"><?php echo '  '.$currency.($values2[$i]*$values1[$i]);?></span></td>
		  </tr>
		  <?php
		  $subtotal = ($values2[$i]*$values1[$i]);
			$total = ($total + $subtotal);
			
			
			}} //for each session ends here
		?>
		 
		   <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"><?php echo $currency.$total;?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Service Tax @ 12.5%</td>
		      <td class="total-value"><div id="total"><?php echo $currency.($total*12.5)/100;?></div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Delivery Charge</td>

		      <td class="total-value"><textarea id="paid"><?php echo $currency.($total<300)? 50 : "NIL" ?></textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due"><?php echo ($total<300)?$currency.($total+50+($total*12.5)/100):($total+($total*12.5)/100);?></div></td>
		  </tr>
		
		</table>
	<?php 
	unset($_SESSION['products']);
	}//if session ends here ?>	
		<div id="terms">
		  <h5>Thank You</h5>
		  <?php include("adminfooter.php");?>
		  <!--<textarea>&copy;City Foods Patna 2015              Developed by:Prab-Hat Tech Consultancy</textarea>-->
		</div>
		
	</div>
	
</body><br>
<center><input type="button" onclick="window.print()" value="Print">
<a href="admin.php">Home</a></center>

</html>