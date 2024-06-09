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

    <link href="assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>


<body class="fixed-left">

<!-- Begin page -->

<div class="wrapper-page">
    <div class="display-table">
        <div class="display-table-cell">
            <diV class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="index.php">
                        <img src="assets/images/extra.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">



                                <div class="p-3">
                                    <form class="form-horizontal mb-0" action="script/register.php" method="POST" accept-charset="UTF-8">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" name="user_mail" id="user_mail" required="" placeholder="Email adresini girin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" name="user_password" id="user_password" required="" placeholder="Şifrenizi Girin">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="user_name" id="user_name" required="" placeholder="Adınızı Girin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="user_surname" id="user_surname" required="" placeholder="Soyadınızı Girin">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="user_dateofbirth" id="user_dateofbirth" required="" placeholder="Doğum tarihi girin">
                                            </div>
                                        </div>





                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-raised btn-primary btn-block waves-effect waves-light" type="submit">Kayıt ol</button>
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