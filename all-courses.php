<!doctype html>
<html class="no-js" lang="en">
<?php
session_start();
if (!($_SESSION['permission']== 1 ||$_SESSION['permission']== 0  )) {
    header("location: login.php");
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery -->
    <!--Java Style table link--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" src="/https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" src="/https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/980391fa5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/980391fa5f.css" crossorigin="anonymous">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>


<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a title="Landing Page" href="events.php" aria-expanded="false"><span
                                    class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Event</span></a>
                        </li>
                        <?php
                        if ($_SESSION['permission'] == 0) {
                            echo '<li>
                                <a class="has-arrow" href="all-students.php" aria-expanded="false"><span
                                        class="educate-icon educate-student icon-wrap"></span> <span
                                        class="mini-click-non">Students</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="All Professors" href="all-professors.php"><span class="mini-sub-pro">All
                                                Professors</span></a></li>
                                    <li><a title="All Courses" href="all-courses.php"><span class="mini-sub-pro">All
                                                Courses</span></a></li>
                                    <!-- <li><a title="All Students" href="all-students.php"><span class="mini-sub-pro">All
                                                Students</span></a></li> -->
                                    
                                    <li><a title="Students Profile" href="student-profile.php"><span
                                                class="mini-sub-pro">Student Profile</span></a></li>
                                </ul>
                            </li>';
                        } else if ($_SESSION['permission'] == 1) {
                            echo '<li>
                            <a class="has-arrow" href="all-professors.php" aria-expanded="false"><span
                                    class="educate-icon educate-professor icon-wrap"></span> <span
                                    class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all-courses.php"><span class="mini-sub-pro">All
                                            Courses</span></a></li>
                                <li><a title="Add Courses" href="add-course.php"><span class="mini-sub-pro">Add
                                            Course</span></a></li>
                                <li><a title="Add Professor" href="add-professor.php"><span class="mini-sub-pro">Add
                                            Professor</span></a></li>

                                <li><a title="Professor Profile" href="professor-profile.php"><span
                                            class="mini-sub-pro">Professor Profile</span></a></li>
                            </ul>
                        </li>';
                        } else if ($_SESSION['permission'] == 2) {
                            echo '<li>
                            <a class="has-arrow" href="all-professors.php" aria-expanded="false"><span
                                    class="educate-icon educate-professor icon-wrap"></span> <span
                                    class="mini-click-non">Admin</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all-courses.php"><span class="mini-sub-pro">All
                                            Courses</span></a></li>
                                <li><a title="All Professors" href="all-professors.php"><span class="mini-sub-pro">All
                                            Professors</span></a></li>
                                <li><a title="All Students" href="all-students.php"><span class="mini-sub-pro">All
                                            Students</span></a></li>
                            </ul>
                        </li>';
                        }
                        ?>






                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa-solid fa-user"></i>
                                                        <span class="admin-name">
                                                            <?php echo "  " . $_SESSION['username'] . "  " ?>
                                                        </span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log  animated">

                                                        <li><a href="#">My
                                                                Profile</a>
                                                        </li>

                                                        <li><a href="logout.php">Log
                                                                Out</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner res-mg-b-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Apps Development</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                            <h2>Illustrator CC 2018</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner res-mg-t-30 dk-res-t-pro-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                            <h2>Indesign cs6 2018</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner res-mg-t-30 dk-res-t-pro-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Web Development</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mg-b-15" bis_skin_checked="1">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner mg-t-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Apps Development</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner mg-t-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/2.jpg" alt=""></a>
                            <h2>Illustrator CC 2018</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner mg-t-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/3.jpg" alt=""></a>
                            <h2>Indesign cs6 2018</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                    <div class="courses-inner mg-t-30" bis_skin_checked="1">
                        <div class="courses-title" bis_skin_checked="1">
                            <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                            <h2>Web Development</h2>
                        </div>
                        <div class="courses-alaltic" bis_skin_checked="1">
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1
                                Year</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                            <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span>
                                500</span>
                        </div>
                        <div class="course-des" bis_skin_checked="1">
                            <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                            <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                        </div>
                        <div class="product-buttons" bis_skin_checked="1">
                            <button type="button" class="button-default cart-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Dashboard v.1</a></li>
                                            <li><a href="index-1.html">Dashboard v.2</a></li>
                                            <li><a href="index-3.html">Dashboard v.3</a></li>
                                            <li><a href="analytics.html">Analytics</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="events.html">Event</a></li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="all-professors.html">All Professors</a>
                                            </li>
                                            <li><a href="add-professor.html">Add Professor</a>
                                            </li>
                                            <li><a href="edit-professor.html">Edit Professor</a>
                                            </li>
                                            <li><a href="professor-profile.html">Professor Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="all-students.html">All Students</a>
                                            </li>
                                            <li><a href="add-student.html">Add Student</a>
                                            </li>
                                            <li><a href="edit-student.html">Edit Student</a>
                                            </li>
                                            <li><a href="student-profile.html">Student Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="all-courses.html">All Courses</a>
                                            </li>
                                            <li><a href="add-course.html">Add Course</a>
                                            </li>
                                            <li><a href="edit-course.html">Edit Course</a>
                                            </li>
                                            <li><a href="course-profile.html">Courses Info</a>
                                            </li>
                                            <li><a href="course-payment.html">Courses Payment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="library-assets.html">Library Assets</a>
                                            </li>
                                            <li><a href="add-library-assets.html">Add Library Asset</a>
                                            </li>
                                            <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="departments.html">Departments List</a>
                                            </li>
                                            <li><a href="add-department.html">Add Departments</a>
                                            </li>
                                            <li><a href="edit-department.html">Edit Departments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="mailbox.html">Inbox</a>
                                            </li>
                                            <li><a href="mailbox-view.html">View Mail</a>
                                            </li>
                                            <li><a href="mailbox-compose.html">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a>
                                            </li>
                                            <li><a href="data-maps.html">Data Maps</a>
                                            </li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                            </li>
                                            <li><a href="x-editable.html">X-Editable</a>
                                            </li>
                                            <li><a href="code-editor.html">Code Editor</a>
                                            </li>
                                            <li><a href="tree-view.html">Tree View</a>
                                            </li>
                                            <li><a href="preloader.html">Preloader</a>
                                            </li>
                                            <li><a href="images-cropper.html">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a>
                                            </li>
                                            <li><a href="line-charts.html">Line Charts</a>
                                            </li>
                                            <li><a href="area-charts.html">Area Charts</a>
                                            </li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a>
                                            </li>
                                            <li><a href="c3.html">C3 Charts</a>
                                            </li>
                                            <li><a href="sparkline.html">Sparkline Charts</a>
                                            </li>
                                            <li><a href="peity.html">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a>
                                            </li>
                                            <li><a href="data-table.html">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                                            <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                                            </li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                            </li>
                                            <li><a href="password-meter.html">Password Meter</a>
                                            </li>
                                            <li><a href="multi-upload.html">Multi Upload</a>
                                            </li>
                                            <li><a href="tinymc.html">Text Editor</a>
                                            </li>
                                            <li><a href="dual-list-box.html">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span
                                                class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a>
                                            </li>
                                            <li><a href="register.html">Register</a>
                                            </li>
                                            <li><a href="lock.html">Lock</a>
                                            </li>
                                            <li><a href="password-recovery.html">Password Recovery</a>
                                            </li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="500.html">500 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    </div>
    <script>
        $(document).ready(function () {
            // console.log("HelloMommy");
            $.ajax({
                type: "POST",
                url: "all.php",
                success: function (data) {
                    console.log("hey");
                }
            });
        });
    </script>
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>