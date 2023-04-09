<?php
session_start();

$con = mysqli_connect("localhost","root","","collagesystem");

if (isset($_POST["send"]))
{
	$titl = $_POST['title'];
	$des = $_POST['description'];

	$query = "INSERT INTO leavenotice (title,description) values('$titl','$des')";
	$query_run = mysqli_query($con,$query);

	if($query_run)
	{
		$_SESSION ["status"]= "Insrted";
		header("Location: leave notice.php");
	}
	else
		{
			$_SESSION ["status"]= "Insrted failed";
		header("Location: leave notice.php");
		}


}

?>