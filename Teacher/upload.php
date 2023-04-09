<?php 
require_once 'dbConfig.php'; 
// Include the database configuration file  
session_start();

// $con = mysqli_connect("localhost","root","","collagesystem");

// if (isset($_POST["submit"]))
// {
//     $titl = $_POST['title'];

//     $query = "INSERT INTO assignment(title) values('$titl')";
//     $query_run = mysqli_query($con,$query);



 

$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $titl = $_POST['title'];
            // Insert image content into database 
            $insert = $db->query("INSERT into assignment (title,image, uploaded) VALUES ('$titl','$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = ""; 
                header("Location: assignment2.php");
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'JPG, JPEG, PNG, & GIF files are allowed '; 
        } 
    }else{ 
        $statusMsg = 'select an image file to upload.'; 
    } 
 }
 
// Display status message 
echo $statusMsg;
?>
