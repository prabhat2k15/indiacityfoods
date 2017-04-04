<?php
session_start();
include_once("config.php");
if(isset($_POST["name"]) && isset($_POST["mobile"]) && $_POST["name"]!="" && $_POST["mobile"]!="")
{
$d=date("d.m.Y");
$name=$_POST["name"];
$email=$_POST["email"];
$address=$_POST["address"];
$city=$_POST["city"];
$zip=$_POST["zip"];
$mobile=$_POST["mobile"];
$comment=$_POST["comment"];
$Payment=$_POST["selection"];
$Area=$_POST["area"];
$daa=$address;
$uniq="CF".rand(1000,9999);
$mysqli->query("Insert into formdb (UID,Date,Name,Email,Address,City,Zip,Mobile,Comment,Payment,Status,Location) Values('$uniq','$d','$name','$email','$address','$city','$zip','$mobile','$comment','$Payment','Pending','$Area')");
  
header("Location:test.php?Name=$name&No=$mobile&uid=$uniq&em=$email&p=$Payment&daa=$daa");
}
elseif(isset($_POST["NameCon"]) && isset($_POST["phoneCon"]) && $_POST["NameCon"]!="" && $_POST["phoneCon"]!="")
{
	$name=$_POST["NameCon"];
	$Email=$_POST["emailCon"];
	$mobile=$_POST["phoneCon"];
	$msg=$_POST["MsgCon"];
$mysqli->query("INSERT INTO feedback (Name, Email, Mobile, Message) VALUES ('$name','$Email','$mobile','$msg')");
header("Location:Contacts.php?mid=5&thank=12hnftkdfjsKJKJHUJKHkjHiuHiuHIuHIUhIUHiuHi");	
}	
else{
echo "Invalid Request";
header("Location:Contacts.php?mid=5");
}

/*
$mysqli->query("CREATE TABLE myCity LIKE City");

 Prepare an insert statement 
$query = "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)";
$stmt = $mysqli->prepare($query);

$stmt->bind_param("sss", $val1, $val2, $val3);

$val1 = 'Stuttgart';
$val2 = 'DEU';
$val3 = 'Baden-Wuerttemberg';

/* Execute the statement 
$stmt->execute();
*/

?>
