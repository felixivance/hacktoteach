<?php
session_start();
    if($_SESSION['email'] ==''){
        header("Location: login");
    }else{
        //do nothing
        include('php/config.php');
        include ('php/get_user_info.php');
    }

?>
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
        <?php
        if(isset($_POST['add-school'])){
            include('actions/add-school.php');
            echo $message;
        }else  if(isset($_POST['add-teacher'])){
            include('actions/add-teacher.php');
            echo $message;
        }
        if(isset($_GET['page'])){
            if($_GET['page']==1){
                include('pages/reg-schools.php'); //show registered schools
            }else if($_GET['page']==2){
                include('pages/add-school.php');
            }else if($_GET['page']==3){
                include('pages/reg-teachers.php');
            }else if($_GET['page']==4){
                include('pages/add-teacher.php');
            }
        }else{
                include ('pages/main_content.php');
            }
        ?>
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

<!-- Page Plugins -->
<script src="assets/js/plugins/slick/slick.min.js"></script>
<script src="assets/js/plugins/chartjs/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_pages_dashboard.js"></script>
<!-- Page JS Plugins -->
<script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_tables_datatables.js"></script>
<script>
    jQuery(function () {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>
</body>
</html>