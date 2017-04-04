<?php
session_start();
include_once("config.php");
?>
<html>

<?php
$adminuser=$_POST["adminuser"];
$passwd=$_POST["passwd"];

	if($adminuser=="admin1" && $_POST["passwd"]=="city432")
	{
	$_SESSION['adminsess']=$adminuser;
	header("Location:admin.php");
	}
	elseif($_REQUEST['logout'])
	{
	 unset($_SESSION['adminsess']);
	 header("Location:admin.php");
	}
	
	else
	{
header("Location:admin.php?errorid=error");
 }
 ?></html>