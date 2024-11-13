<?php

if($_SERVER['REQUEST_METHOD']  == 'POST')
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];

	$conn = new mysqli('localhost', 'root', '', 'covid_19');

	$sql = "INSERT INTO registration (name, email, password, mobile) VALUES('$name', '$email', '$password', '$mobile')";
	if( $conn->query($sql) === TRUE){
		header('Location:form.html');
	}else {
		echo "error:".$sql."<br>".$conn->error;
	}
}
$conn->close();
?>




