<?php
session_start();
include_once("config.php");
if(isset($_POST["Nameres"]) && isset($_POST["phoneres"]) && $_POST["Nameres"]!="" && $_POST["phoneres"]!="")
{
	$name=$_POST["Nameres"];
	$Email=$_POST["emailres"];
	$mobile=$_POST["phoneres"];
	$reserve=$_POST["selection"];
	$msg=$_POST["Msgres"];
	
$mysqli->query("INSERT INTO reserve (Name, Email, Mobile, Comment, Reserve) VALUES ('$name','$Email','$mobile','$msg','$reserve')");
header("Location:reserve.php?thank=12hnftkdfjsKJKJHUJKHkjHiuHiuHIuHIUhIUHiuHi");	
}	
else{
echo "Invalid Request";
header("Location:reserve.php");
}
?>