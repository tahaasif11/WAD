<?php

	$mail = $_POST["mail"];
	$password = $_POST["password"];


	$con = new mysqli("localhost","root","","new");
	$s="SELECT mail,password FROM signup WHERE password='".$password."'";
	$rs=$con->query($s);
	$a=$rs->fetch_assoc();

	$n= $a["mail"];
	$p= $a["password"];

	if($mail==$n&&$password==$p)
	{
		echo "You have logged in";
	}
	else
	{
		echo "Not matched";
	}



?>