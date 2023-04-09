<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Teacher Details</title>
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
                         <?php

                                    include "dbConfig.php"; // Using database connection file here

                                    $records = mysqli_query($db,"select * from logindata where id=3"); 

                                    while($data = mysqli_fetch_array($records))
                                        {
                                            ?>
                                                            
                                                                                                                             
                                                           <h5 class="item-title"><?php echo $data['name']; ?></h5>
                                        <?php
                                        }
                                        ?>
                                <span>Teavher</span>
                            </div>
                            <div class="admin-img">
                                <img src="img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                
                                <?php

                                    include "dbConfig.php"; // Using database connection file here

                                    $records = mysqli_query($db,"select * from logindata where id=3"); 

                                    while($data = mysqli_fetch_array($records))
                                        {
                                            ?>
                                                            
                                                                                                                             
                                                           <h5 class="item-title"><?php echo $data['name']; ?></h5>
                                        <?php
                                        }
                                        ?>
                              
                            </div>
                            <div class="item-content">
                                <ul class="settings-list">
                                    <li><a href="all-student.php"><i class="flaticon-user"></i>Students</a></li>
                                    <li><a href="assignment2.php"><i class="flaticon-list"></i>Task</a></li>
                                    <li><a href="messaging.php"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li>
                                    <li><a href="logout.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

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
                        <a href="index.php"><img src="img/logo1.png" alt="logo"></a>
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
                            <ul class="nav sub-group-menu sub-group-active">
                                <li class="nav-item">
                                    <a href="all-teacher.php" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="teacher-details.php" class="nav-link menu-active"><i class="fas fa-angle-right"></i>Teacher Details</a>
                                </li>
                            </ul>
                        </li>
                            
                        <li class="nav-item">
                            <a href="exam-grade.php" class="nav-link  "><i
                                    class="flaticon-open-book"></i><span class="menu-active">Exam
                                        Grades</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                         <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="leave notice.php" class="nav-link "><i class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Leave Application</span></a>
                           </li>
                           
                        <li class="nav-item">
                            <a href="assignment2.php" class="nav-link"><i class="flaticon-list"></i><span>Assignment</span></a>
                        </li> 
                          <li class="nav-item">
                            <a href="all-subject.php" class="nav-link"><i class="flaticon-open-book"></i><span>Subject</span></a>
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
                    <h3>Teacher</h3>
                
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
                            </div>
                           
                        </div>
                        <div class="single-info-details">
                            <div class="item-img">
                                <img src="img/figure/teacher.jpg" alt="teacher">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium">Steven Johnson</h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale 
                                word moun taiery.Aliquam erat volutpaturabiene natis massa sedde  sodale 
                                word moun taiery.</p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium">Steven Johnson</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium">Male</td>
                                            </tr>
                                            <tr>
                                                <td>Father Name:</td>
                                                <td class="font-medium text-dark-medium">Steve Jones</td>
                                            </tr>
                                            <tr>
                                                <td>Mother Name:</td>
                                                <td class="font-medium text-dark-medium">Naomi Rose</td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td class="font-medium text-dark-medium">Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Joining Date:</td>
                                                <td class="font-medium text-dark-medium">07.08.2016</td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">stevenjohnson@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Subject:</td>
                                                <td class="font-medium text-dark-medium">English</td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td class="font-medium text-dark-medium">2</td>
                                            </tr>
                                            <tr>
                                                <td>Section:</td>
                                                <td class="font-medium text-dark-medium">Pink</td>
                                            </tr>
                                            <tr>
                                                <td>ID No:</td>
                                                <td class="font-medium text-dark-medium">10005</td>
                                            </tr>
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">+ 88 98568888418</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/teacher-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2019 05:33:57 GMT -->
</html>