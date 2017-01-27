<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <title>Hack to Teach</title>
        <?php include 'links.php'; ?>
    </head>
    <body>
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Sidebar -->
            <?php include 'navbar.php'; ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <?php include 'header.php'; ?>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Add New Agent <small>.</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Agents</li>
                                <li><a class="link-effect" href="">Add New Agent</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Forms Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Material Forms Validation -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button"><i class="si si-settings"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Enter the Agent Details below</h3>
                                </div>
                                <div class="block-content block-content-narrow">
                                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-material form-horizontal push-10-t" action="base_forms_validation.html" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" id="val-username2" name="val-username2" placeholder="Enter the name of the agent..">
                                                    <label for="val-username2">Agent Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" id="val-email2" name="val-email2" placeholder="Enter a valid email address..">
                                                    <label for="val-email2">Email Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <div class="form-material">
                                                    <input class="form-control" type="password" id="val-password2" name="val-password2" placeholder="Choose a good one..">
                                                    <label for="val-password2">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <div class="form-material">
                                                    <input class="form-control" type="password" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it to be safe!">
                                                    <label for="val-confirm-password2">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" id="val-digits2" name="val-digits2" placeholder="0722 123 456">
                                                    <label for="val-digits2">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="form-material">
                                                    <select class="form-control" id="val-skill2" name="val-skill2">
                                                        <option value="">Please select</option>
                                                        <option value="html">Kibera</option>
                                                        <option value="css">Mukuru</option>
                                                        <option value="javascript">Mathare</option>
                                                        <option value="ruby">Soweto</option>
                                                    </select>
                                                    <label for="val-skill2">Location</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Material Forms Validation -->
                        </div>
                    </div>
                    <!-- END Forms Row -->

                    <!-- Terms Modal -->
                    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-popin">
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
                                        <h4 class="push-10">1. <strong>General</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                        <h4 class="push-10">2. <strong>Account</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                        <h4 class="push-10">3. <strong>Service</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                        <h4 class="push-10">4. <strong>Payments</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal"><i class="fa fa-check"></i> Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Terms Modal -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include 'footer.php'; ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--Scripts-->
        <?php include 'scripts.php'; ?>
        <!--End Scripts-->
        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>

        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Select2 plugin)
                App.initHelpers('select2');
            });
        </script>
        <script src="assets/js/pages/base_forms_validation.js"></script>
    </body>
</html> 
