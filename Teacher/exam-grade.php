<?php
session_start();

$con = mysqli_connect("localhost","root","","collagesystem");

if (isset($_POST["send"]))
{
    $gna = $_POST['gname'];
    $subn = $_POST['subname'];
    $stun = $_POST['stuname'];
    $sem = $_POST['semester'];
    $facname = $_SESSION['name'];

    $query = "INSERT INTO examgrade (gname,subname,stuname,semester,fac_name) values('$gna','$subn','$stun','$sem','$facname')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION ["status"]= "Insrted";
        header("Location: exam-grade.php");
    }
    else
        {
            $_SESSION ["status"]= "Insrted failed";
        header("Location: exam-grade.php");
        }


}

?>

<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/exam-grade.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Exam Grade</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
           
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . .">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">  <?php

                                   
                                                            
                                                                                                                             
                                                            $fac_na = $_SESSION['name'];

                                                            echo "".$fac_na . "<br>";

                                                            ?></h5>
           
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">  <?php

                                   
                                                            
                                                                                                                             
                                                            $fac_na = $_SESSION['name'];

                                                            echo "".$fac_na . "<br>";

                                                            ?>
                                        </h6>
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                    <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                           
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-message">
                        

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">05 Message</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-img bg-skyblue author-online">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Maria Zaman</span> 
                                                <span class="item-time">18:30</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-yellow author-online">
                                        <img src="img/figure/student12.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Benny Roy</span> 
                                                <span class="item-time">10:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-pink">
                                        <img src="img/figure/student13.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Steven</span> 
                                                <span class="item-time">02:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-img bg-violet-blue">
                                        <img src="img/figure/student11.png" alt="img">
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="item-title">
                                            <a href="#">
                                                <span class="item-name">Joshep Joe</span> 
                                                <span class="item-time">12:35</span> 
                                            </a>  
                                        </div>
                                        <p>What is the reason of buy this item. 
                                        Is it usefull for me.....</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="navbar-item dropdown header-notification">
                      

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">03 Notifiacations</h6>
                            </div>
                            <div class="item-content">
                                <div class="media">
                                    <div class="item-icon bg-skyblue">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Complete Today Task</div>
                                        <span>1 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-orange">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Director Metting</div>
                                        <span>20 Mins ago</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="item-icon bg-violet-blue">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="media-body space-sm">
                                        <div class="post-title">Update Password</div>
                                        <span>45 Mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     <li class="navbar-item dropdown header-language">
                        
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
               <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-student.php" class="nav-link"><i class="fas fa-angle-right"></i>All Students</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
                                </li>
                              
                              </ul>
                        </li>
                            
                        <li class="nav-item">
                            <a href="exam-grade.php" class="nav-link menu-active "><i
                                    class="flaticon-open-book"></i><span class="menu-active">Exam
                                        Grades</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="notice-board.php" class="nav-link "><i class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item">
                        <a href="leave notice.php" class="nav-link "><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Leave Application</span></a>
                       </li>
                       
                       <li class="nav-item">
                        <a href="assignment2.php" class="nav-link"><i class="flaticon-list"></i><span>Assignment</span></a>
                    </li> 
                      <li class="nav-item">
                            <a href="all-subject.php" class="nav-link "><i class="flaticon-open-book"></i><span>Subject</span></a>
                        </li> 
                        <li class="nav-item">
                            <a href="messaging.php" class="nav-link"><i class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Examination</h3>
                    <ul>
                      
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Exam Grade Add Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Add New Grade</h3>
                                    </div>
                                    
                                </div>
                                <form class="new-added-form" action="" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Grade Name</label>
                                            <input type="text" name="gname" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Subject Name</label>
                                            <input type="text" name="subname" class="form-control">
                                               
                                          
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Student Name</label>
                                            <input type="text" name="stuname" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Semester</label>
                                            <input type="text" name="semester" class="form-control">
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="send">Save</button>                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Exam Grade Add Area End Here -->
                    <!-- Exam Grade List Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Exam Grade Lists</h3>
                                    </div>
                               
                                </div>
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-5 col-sm-4 col-12 form-group">
                                            <input type="text" placeholder="Search by Grade ..." class="form-control">
                                        </div>
                                        <div class="col-lg-5 col-sm-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Point ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-sm-3 col-12 form-group">
                                            <button type="submit"
                                                class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <table class="table table-dark table-striped table-bordered">
                                         <thead>
                                                    <tr>
                                                     
                                                      <th scope="col">Grade Name</th>
                                                      <th scope="col">Subject Name</th>
                                                      <th scope="col">Student Name</th>
                                                       <th scope="col">Smester</th>
                                                        
                                                    </tr>
                                                  </thead>
                                                  <tbody>

                                                       <?php

                                    include "dbConfig.php"; // Using database connection file here
                                  
                                  $fac_na = $_SESSION['name'];
                                    $query = "select * from examgrade where fac_name= '$fac_na'";
                                
                                    $records = mysqli_query($db,$query); 

                                    while($data = mysqli_fetch_array($records))
                                        {
                                            ?>
                                                      
                                          
                                                   
                                                    <td><?php echo $data['gname']; ?></td> 
                                                      <td><?php echo $data['subname']; ?></td>
                                                      <td><?php echo $data['stuname']; ?></td>
                                                           <td><?php echo $data['semester']; ?></td>
                                                                
                                                                          
                                                    </tr>
                                        <?php
                                        }
                                        ?>
                                                 
                                      
                                                    
                                                  </tbody>
                                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Exam Grade List Area End Here -->
                </div>
                <!-- All Subjects Area End Here -->
                <footer class="footer-wrap-layout1">
                   
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Data Table Js -->
    <script src="js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/exam-grade.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:59 GMT -->
</html>