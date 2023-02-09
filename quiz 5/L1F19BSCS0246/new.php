<?php

$name = $_POST["stdname"];
$age = $_POST["Age"];
$mail = $_POST["mail"];
$password = $_POST["password"];


$con = new mysqli("localhost","root","","new");
$q = "INSERT INTO signup(name,age,mail,password) VALUES ('".$name."','".$age."','".$mail."','".$password."')";

if($con->query($q)==TRUE)
{
   echo "Data Inserted"."<br>";
	//header("Location:index.php");
}
else
{
	echo $con->error;
	$con->close();
}

?>