<?php
    include('php/config.php');
    $message = "";
    if(isset($_POST['register']) && $_POST['register'] !=''){
        $name = mysqli_escape_string($conn, $_POST['register-username']);
        $email = mysqli_escape_string($conn, $_POST['register-email']);
        $pass = mysqli_escape_string($conn, $_POST['register-password']);
        $pass2 = mysqli_escape_string($conn, $_POST['register-password2']);

        if($pass != $pass2){
            $message = "<div class='alert alert-danger'>Passwords Do not Match</div>";
        }else{
            $password = sha1($pass);
            $query = "INSERT INTO schools(name, email, password)VALUES('$name', '$email', '$password')";
            $result = mysqli_query($conn, $query);
            if($result){
                header("Location: dashboard");
            }else{
                $message=  "<div class=' alert alert-danger'>There was a problem".mysqli_error($conn)."</div>";
            }
        }
    }
?>

<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Register</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Register Content -->
<div class="content overflow-hidden">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            <?php echo $message;  ?>
            <!-- Register Block -->
            <div class="block block-themed animated fadeIn">
                <div class="block-header bg-success">
                    <ul class="block-options">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#modal-terms">View Terms</a>
                        </li>
                        <li>
                            <a href="login" data-toggle="tooltip" data-placement="left" title="Log In"><i class="si si-login"></i></a>
                        </li>
                    </ul>
                    <h3 class="block-title">Register</h3>
                </div>

                <div class="block-content block-content-full block-content-narrow">
                    <!-- Register Title -->
                    <h1 class="h2 font-w600 push-30-t push-5">HackToTeach- Schools</h1>
                    <p>Please fill the following details to create a new account.</p>
                    <!-- END Register Title -->

                    <!-- Register Form -->
                    <!-- jQuery Validation (.js-validation-register class is initialized in js/pages/base_pages_register.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-register form-horizontal push-50-t push-50" action="register" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="text" id="register-username" name="register-username" placeholder="Please enter the school name" required>
                                    <label for="register-username">School Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="email" id="register-email" name="register-email" placeholder="Please provide your email" required>
                                    <label for="register-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="register-password" name="register-password" placeholder="Choose a strong password.." required>
                                    <label for="register-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material form-material-success">
                                    <input class="form-control" type="password" id="register-password2" name="register-password2" placeholder="..and confirm it" required>
                                    <label for="register-password2">Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label class="css-input switch switch-sm switch-success">
                                    <input type="checkbox" id="register-terms" name="register-terms"><span></span> I agree with terms &amp; conditions
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="register" value="<?php echo rand(999,99999);?>">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-5">
                                <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus pull-right"></i> Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Register Form -->
                </div>
            </div>
            <!-- END Register Block -->
        </div>
    </div>
</div>
<!-- END Register Content -->

<!-- Register Footer -->
<div class="push-10-t text-center animated fadeInUp">
    <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; OneUI 3.1</small>
</div>
<!-- END Register Footer -->

<!-- Terms Modal -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout">
        <div class="modal-content">
            <div class="block block-themed block-transparent remove-margin-b">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                </div>
                <div class="block-content">
                    <p>Some Terms and conditions to go here.</p>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> I agree</button>
            </div>
        </div>
    </div>
</div>
<!-- END Terms Modal -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_pages_register.js"></script>
</body>
</html>