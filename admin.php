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
<?php
if(isset($_SESSION['adminsess']))
{
include("adminheader.php");
?>

<script type="text/javascript">
    window.onload = setupRefresh;

    function setupRefresh() {
      setTimeout("refreshPage();", 30000); // milliseconds
    }
    function refreshPage() {
       window.location = location.href;
    }
  </script>
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
  <a href="index.php">Home</a> &raquo;
  <a href="index.php">Other</a> &raquo;
</div>
  <table cellspacing="5" cellpadding="5" >
		<tr>
			  <th><h2><u>Status</u></h2></th>
			  <th><h2><u>UID</u></h2></th>
		      <th><h2><u>Date</u></h2></th>
		      <th><h2><u>Name</u></h2></th>
		      <th><h2><u>Mobile</u></h2></th>
		      <th><h2><u>Email</u></h2></th>
		      
		      
		  </tr>
	

<?php
/*echo date("h:m:s:");
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow);*/
	$count=0;
if(isset($_REQUEST['orderstatus']))
{
$order=$_REQUEST['orderstatus'];
}
else
{
$order="Pending";
}//else of orderstatus ends here
   $results = $mysqli->query("SELECT * from formdb where Status='$order' order by Id DESC");
  while($obj=$results->fetch_object())
   {
  // $obj = $results->fetch_object();
  ?>
 
<tr>
<td><a href="orders.php?Name=<?php echo $obj->Name;?>&No=<?php echo $obj->Mobile;?>&uid=<?php echo $obj->UID;?>">
<?php echo $obj->Status;?></td>
					<td><?php echo $obj->UID;?></td></a>
					<td><?php echo $obj->Date;?></td></a>
<td><a href="orders.php?Name=<?php echo $obj->Name;?>&No=<?php echo $obj->Mobile;?>&uid=<?php echo $obj->UID;?>">
<?php echo $obj->Name;?></td>
					<td><?php echo $obj->Mobile;?></td>
					<td><?php echo $obj->Email;?></td>
					
					<td><form method="GET" action="orderstatus.php">
						<select name="statusselect"><?php ?>
						<option value="Pending">Pending</option>
						<option value="Processed">Processed</option>
						<option value="Delivered">Delivered</option>
						<option value="Delete">Delete</option>
						</select>
						<input type="hidden" name="uid" value="<?php echo $obj->UID; ?>">
						<input type="hidden" name="mobile" value="<?php echo $obj->Mobile; ?>">
						<input type="hidden" name="name"value="<?php echo $obj->Name; ?>"></td>
						<td><input type="submit"></td>
						</form></td>
						
						
										
</tr>	  
<?php	
	
}//while ends here
?>
	</table>
	</div>	
<?php
}//if adminsess ends here
else{
?> 	
<img src="images/adminlogo.png" height="150" width="300"><br><br>
   <form action="admincheck.php" method="POST" class="smart-green">
   <h1><center>Admin Panel</center></h1>
	<?php 
	if(isset($_REQUEST['errorid']))
	echo "<font color='red'>Wrong Username or Password !</font>";
	?>
	<center>
    <label>
        <span>Username:</span>
        <input type="text" name="adminuser" placeholder="username" />
    </label>
	<br><br>
	<label>
        <span>Password :</span>
        <input type="password" name="passwd" placeholder="Password" />
    </label>
	<br>
	<br>
   <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Login" /> 
    
        <span>&nbsp;</span> 
        <input type="reset" class="button" value="Reset" /> 
    </label>  	
	</center>
</form>
<?php
}//else adminsess else ends here
 //include_once("menulist.php");
?>
<div id="footer">
<?php
 include("adminfooter.php");
 ?>
 </div>