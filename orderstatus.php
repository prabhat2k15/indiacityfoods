<?php
session_start();
include_once("config.php");

if(isset($_SESSION['adminsess']))
{
	if(isset($_GET["statusselect"]) && isset($_REQUEST["uid"]) && $_GET["statusselect"]!="" && $_REQUEST["uid"]!="")
	{
	$uid=$_REQUEST["uid"];
	$status=$_GET["statusselect"];
	$name=$_REQUEST["name"];
	$mobile=$_REQUEST["mobile"];
			
			if($_GET["statusselect"]=="Delete")
			{
		 $results = $mysqli->query("Delete from formdb where UID='$uid' and Name='$name' and Mobile='$mobile'");
			header("Location:admin.php?orderstatus=Pending");
			}
			else
			{
			$results = $mysqli->query("Update formdb set Status='$status' where UID='$uid' and Name='$name' and Mobile='$mobile'");
			header("Location:admin.php?orderstatus=Pending");
			}
	}//if isset post status select
}// if session admin
			/*if($_POST['statusselect']=="Processed")
			{ 
		 $results = $mysqli->query("Update formdb set Status='$status' where UID='$uid', Name='$name', Mobile='$mobile'");
			header("Location:admin.php");
			}
			if($_POST['statusselect']=="Delivered")
			{
		 $results = $mysqli->query("Update formdb set Status='$status' where UID='$uid', Name='$name', Mobile='$mobile'");
			header("Location:admin.php");
			}
		$results = $mysqli->query("SELECT Status from formdb where UID='$uid', Name='$name', Mobile='$mobile'");
			while($obj=$results->fetch_object())
			 {
			 if(  */
?>




