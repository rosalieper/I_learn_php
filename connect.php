<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname="my_blog";

// Create connection
	$conn =new mysqli($servername, $username, $password, $DBname);

	// Check connection
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}  
	if ($_POST['password']===$_POST['check_password']) 
	{
		$sql = "INSERT INTO users (User_name, Favoritetopic, password, Email) VALUES ('".$_POST['Name']."', '".$_POST['Favorite']."', '".$_POST['password']."', '".$_POST['Email']."')";
	
		if ($conn->query($sql) === TRUE) 
		{
    		echo "New record created successfully";
		} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
$conn->close();
?>
