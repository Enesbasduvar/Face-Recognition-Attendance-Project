<?php
session_start();
ob_start();
global $db;
require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>!</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/fullcalendar/vanillaCalendar.css"/>
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="assets/plugins/metro/MetroJs.min.css">

    <link rel="stylesheet" href="assets/plugins/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/carousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/plugins/animate/animate.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-material-design.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/icons.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="mdi mdi-close"></i>
        </button>

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">

            </div>
        </div>

        <div class="sidebar-inner slimscrollleft" id="sidebar-main">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Anasayfa</li>


                    <li>
                        <a href="rollcall.php" class="waves-effect">
                            <span> Yoklama </span>
                        </a>
                    </li>
                    <li>
                        <a href="student.php" class="waves-effect">
                            <span> Ögrencıler </span>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect">
                            <span> Profil </span>
                        </a>
                    </li>

                    <li>
                        <a href="statistics.php" class="waves-effect">
                            <span> İstatistik </span>
                        </a>
                    </li>


                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">


                    <ul class="list-inline float-right mb-0 mr-3">
                        <!-- language-->

                        <li class="list-inline-item dropdown notification-list">
                            <?php
                            $user_mail = $_SESSION['user_mail'];

                            $query = $db->query("SELECT * FROM user_table WHERE user_mail = '{$user_mail}'", PDO::FETCH_ASSOC);
                            if ( $query->rowCount() ){
                            foreach( $query as $row ){  ?>
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                               aria-expanded="false">
                                <img src="assets/images/users/<?=$row['user_img'] ?>" alt="user" class="rounded-circle img-thumbnail">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Hos Geldiniz</h5>
                                </div>
                                <a class="dropdown-item" href="#">


                                    <?=$row['user_name'] ?>
                                    <?=$row['user_surname'] ?>
                                    <?php
                                    }}
                                    ?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="exit.php">
                                    <i class="mdi mdi-logout m-r-5 text-muted"></i> Çıkış</a>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- Page content Wrapper -->
        </div>
        <!-- content -->

        <footer class="footer">
            © 2024 Evo
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap-material-design.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>


<script src="assets/plugins/carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/fullcalendar/vanillaCalendar.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/chartist/js/chartist.min.js"></script>
<script src="assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="assets/plugins/metro/MetroJs.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/pages/dashborad.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>