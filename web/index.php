<?php session_start(); ?>

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

    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>
<body>


<!-- Begin page -->

<div class="wrapper-page">
    <div class="display-table">
        <div class="display-table-cell">
            <diV class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/extra.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center pt-3">

                                </div>
                                <div class="px-3 pb-3">

                                    <form class="form-horizontal m-t-20 mb-0" action="script/user_login.php" method="POST">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" required="" name="user_mail" id="user_mail" placeholder="Maıl adresi">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" name="user_password" id="user_password" placeholder="Şifre">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Beni Hatırla</label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                        if(isset($_SESSION['error'])) {
                                            $error = $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        }
                                        else {
                                            $error = '';
                                        }
                                        ?>
                                        <p class="text-danger  fw-bold  mb-2">
                                            <?php echo $error; ?>
                                        </p>
                                        <div class="form-group text-right row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-raised btn-block waves-effect waves-light" type="submit">Giriş</button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-sm-7 m-t-20">
                                                <a href="forgot-password.php"  class="text-muted"><i class="mdi mdi-lock"></i> Şifre Unutum</a>
                                            </div>
                                            <div class="col-sm-5 m-t-20">
                                                <a href="register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> Yeni Kayıt</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </diV>
        </div>
    </div>
</div>



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

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>