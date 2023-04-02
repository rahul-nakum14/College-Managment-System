<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username'])) {   ?>
   {  

<?php
        if ($_SESSION['role'] == 'admin')  
      	 {
              header("Location: ../Admin/all-student.php");
      	 } 
         if ($_SESSION['role'] == 'faculty' && $_SESSION['username'] == 'faculty1')  
         {
            echo "faculty123";
           
         } 
          if ($_SESSION['role'] == 'faculty' && $_SESSION['username'] == 'faculty')  
         {
         } 
             header("Location: ../Teacher/all-student.php");
    
      	         if ($_SESSION['role'] == 'hod') 
      	 {
              header("Location: ../subadmin/subadmin/all-student.php");
      	 } 
      	         if ($_SESSION['role'] == 'student') 
      	 {
              header("Location: ../student/all-subject.php");
      	 } 

       
     }
  else{
	       // header("Location: index.php");
	       echo "hello";
         exit();
} 
?>