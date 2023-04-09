<?php
session_start();

$con = mysqli_connect("localhost","root","","collagesystem");

if (isset($_POST["submit"]))
{
    $titl = $_POST['title'];

    $query = "INSERT INTO assignment(title) values('$titl')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION ["status"]= "Insrted";
        header("Location: assignment2.php");
    }
    else
        {
            $_SESSION ["status"]= "Insrted failed";
        header("Location: assignment2.php");
        }


}

?>