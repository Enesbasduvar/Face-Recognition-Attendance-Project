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
    <title>Urora - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

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
                    <div class="dropdown notification-list nav-pro-img">

                    </div>

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

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">Ögrenci</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Datatable</h4>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Ögreci istatistikleri</h4>

                                        <?php
                                        $query = "SELECT (SELECT COUNT(*) AS row_count FROM ( SELECT rolls, names, MIN(current_data) AS current_data FROM edituser 
                                          GROUP BY rolls, names, DATE(current_data) ) AS subquery) AS subquery_count, 
                                          (SELECT COUNT(*) FROM user_table) AS total_users, (SELECT COUNT(*) AS row_count FROM ( SELECT rolls, names, MIN(current_data)
                                           AS current_data FROM edituser GROUP BY rolls, names, DATE(current_data) )
                                           AS subquery) / (SELECT COUNT(*)  FROM user_table) AS ratio;";
                                        $statement = $db->prepare($query);
                                        $statement->execute();
                                        $users = $statement->fetchAll(PDO::FETCH_ASSOC);

                                        ?>




                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                        <div class="col-md-12 col-xl-5">
                            <div class="card m-b-30 h-360">
                                <?php foreach ($users as $user): ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 align-self-center text-center">
                                            <h6 class="text-muted">Yoklama istatistikleri</h6>
                                        </div>

                                        <div class="col-6 align-self-center text-center">
                                            <h6 class="font-40">
                                                <i class="mdi  text-success"></i><?php echo number_format($user['ratio']*100, 0); ?>%</h6>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <span class="float-right">Toplam Ögrenci sayısı <?php echo number_format($user['ratio'], 0); ?></span>
                                        <span class="badge badge-boxed  badge-success mb-2">Oran</span>
                                        <span class="float-left">Gelmeyen ögrenci sayısı<?php echo htmlspecialchars($user['total_users']); ?></span>

                                        <div class="progress mt-1">
                                            <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($user['ratio']*100, 0); ?>%" aria-valuenow="<?php echo number_format($user['ratio']*100, 0); ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo number_format(($user['ratio']*100), 0)-100; ?>%" aria-valuenow="<?php echo number_format(($user['ratio']*100), 0)-100; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>





                </div><!-- container -->

            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class="footer">
            © 2024 EVO
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

<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/pages/datatables.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>