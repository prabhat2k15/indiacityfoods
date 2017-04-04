<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CityFoods |Admin Panel</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link href="style/form_style.css" rel="stylesheet" type="text/css">
 <link rel="StyleSheet" href="css/sinorcaish-screen.css" type="text/css" media="screen" />
  <link rel="StyleSheet" href="css/sinorcaish-print.css" type="text/css" media="print" />

</head>
<body>
<?php
if(isset($_SESSION['adminsess']))
{
include("adminheader.php");
if(isset($_REQUEST['Name']) && isset($_REQUEST['No']))
	{
	$N=$_REQUEST['Name'];
	$Nu=$_REQUEST['No'];
	}
	  $results = $mysqli->query("SELECT * from formdb");
 
		
?>
  <!-- ======== Left Sidebar ======== -->

<div id="sidebar">
  <div>
    <p class="title"><a href="#">Orders</a></p>
	    <ul>
	<li><a href="admin.php?orderstatus=Pending">Pending</a></li>
	<li><a href="admin.php?orderstatus=Processed">Processed</a></li>
	<li><a href="admin.php?orderstatus=Delivered">Delivered</a></li>
	     
	<!--  	-->  
        <span class="hidden">(this page)</span></li>
     <a href="admin.php?orderstatus=Pending">View All Orders</a>
      
    </ul>
  </div>
</div>

<!-- ======== Main Content ======== -->

<div id="main">

<div id="navhead">
  <hr />
  <!--span class="hidden">Path to this page:</span>
  <a href="index.html">Home</a> &raquo;
  <a href="index.html">Other</a> &raquo;
</div-->
	
	 <div class="products">		
<?php
	$bool=true; $count=0;
				$results = $mysqli->query("SELECT * FROM formdb");
				while($obj=$results->fetch_object())
				{
					if($obj->Name==$N && $_REQUEST["uid"]==$obj->UID && $obj->Mobile==$Nu && $bool)
					{
?>	<div class="products">				
<table>

<tr><td>UID</td><td>:</td><td><?php echo $obj->UID; ?></td></tr>
<tr><td>Date</td><td>:</td><td><?php echo $obj->Date; ?></td></tr>
<tr><td>Name</td><td>:</td><td><?php echo $obj->Name; ?></td></tr>
<tr><td>Mobile</td><td>:</td><td><?php echo $obj->Mobile; ?></td></tr>
<tr><td>Email</td><td>:</td><td><?php echo $obj->Email; ?></td></tr>
<tr><td>Address</td><td>:</td><td><textarea rows="3"cols="30"><?php echo $obj->Address; ?></textarea></td></tr>
<tr><td>City</td><td>:</td><td><?php echo $obj->City; ?></td></tr>
<tr><td>Zip</td><td>:</td><td><?php echo $obj->Zip; ?></td></tr>
<tr><td>Comment</td><td>:</td><td><textarea rows="2"cols="15"><?php echo $obj->Comment; ?></textarea></td></tr>
<tr><td>Payment</td><td>:</td><td><?php echo $obj->Payment; ?></td></tr>
<tr><td>Status</td><td>:</td><td><?php echo $obj->Status; ?></td></tr>
<tr><td>Location Near</td><td>:</td><td><?php echo $obj->Location; $_SESSION['loc']=$obj->Location; ?></td></tr>
		<td><form method="GET" action="orderstatus.php">
						<select name="statusselect"><?php ?>
						<option value="Pending">Pending</option>
						<option value="Processed">Processed</option>
						<option value="Delivered">Delivered</option>
						<option value="Delete">Delete</option>
						</select>
						<input type="hidden" name="uid" value="<?php echo $obj->UID; ?>">
						<input type="hidden" name="mobile" value="<?php echo $obj->Mobile; ?>">
						<input type="hidden" name="name"value="<?php echo $obj->Name; ?>">
						<input type="submit">
						</form></td>
</table>
</div>		
<?php
					$count++;
					}//if ends here
			if($count==1)
			$bool=true;
			}//while ends here
				

?>
</div>
<div class="shopping-cart">
<h2>Order List</h2>	
<table>
			<tr>
			  <th><h2><u>Product</u></h2></th>
		      <th><h2><u>Quantity</u></h2></th>
		      <th><h2><u>Price</u></h2></th>
		    </tr>
<?php

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
	<tr><td><?php echo $values[$i]; ?></td><td><?php echo $values1[$i]; ?></td><td><?php echo $values2[$i]; ?></td></tr>

<?php
		//echo $orderz."-".$qty."<br>";
		//echo $values[$i]."-".$values1[$i]."-".$values2[$i]."<br>";//."-".$ordqty1[$i]."<br>";
	$countprice=$countprice+($values2[$i]*$values1[$i]);
		}//for each 
	}
	//echo "Total Price=".$countprice."</div>";

?>
<tr><td><?php  ?></td><td><?php  ?></td><td><?php ?></td></tr>
<tr><td><?php  ?></td><td><?php echo "Sub Total="; ?></td><td><?php echo $currency.$countprice; ?></td></tr>
</table>
<a href="printorder.php?name1=<?php echo $N; ?>&ns=<?php echo $Nu; ?>&uid=<?php echo $_REQUEST["uid"];?>">Print Reciept</a>
</div>
</div>
<?php	
}//if adminsess ends here
?>


</body>
<div id="footer">
<?php
 include("adminfooter.php");
 ?>
 </div>
 </html>