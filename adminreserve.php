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
	  $results = $mysqli->query("SELECT * from reserve order by SNo DESC");
 
		
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
  <span class="hidden">Path to this page:</span>
  <a href="admin.php">Home</a> &raquo;
  <a href="admin.php">Other</a> &raquo;
</div>
	
	 <div class="products">		
	 <div class="products">				
<table border="1">
			<tr>
			  <th><u>Sr.No.</u></th>
		      <th><u>Name</u></th>
		      <th><u>Email</u></th>
		      <th><u>Mobile</u></th>
		      <th><u>Reservation For</u></th>
		      <th><u>Comment</u></th>
		   </tr>
<?php
	$bool=true; $count=1;
				
				while($obj=$results->fetch_object())
				{
					
?>	
	<tr>
	<td><?php echo $count."."; ?></td>
	<td><?php echo $obj->Name ?></td>
	<td><?php echo $obj->Email; ?></td>
	<td><?php echo $obj->Mobile; ?></td>
	<td><?php echo $obj->Reserve; ?></td>
	<td><textarea rows="3" cols="25"><?php echo $obj->Comment; ?></textarea></td>
	</tr>
<?php
 $count++;
	}//while ends here
	?>
</table>
</div>		


</div>

</div>


</body>
<div id="footer">
<?php
 include("adminfooter.php");
 ?>
 </div>
 <?php	
}//if adminsess ends here
	else 
	{ header("Location:admin.php");
	}
	
?>

 </html>