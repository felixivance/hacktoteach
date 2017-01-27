<?php

$query = "SELECT * FROM teachers";
$result = mysqli_query($conn, $query);

?>

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Registered Teachers
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Teachers</li>
                <li><a class="link-effect" href="">Registered Teachers</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table class="table table-bordered table-striped js-dataTable-full">
                <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Name</th>
                    <th class="hidden-xs">Email</th>
                    <th class="hidden-xs">ID #</th>
                    <th class="hidden-xs" style="width: 15%;">Duration</th>
                    <th class="hidden-xs" style="width: 15%;">Credit Score</th>
                    <th class="text-center" style="width: 10%;">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['id'];?></td>
                    <td class="font-w600"><?php echo $row['fname'].' '.$row['lname'];?></td>
                    <td class="hidden-xs"><?php echo $row['email'];?></td>
                    <td class="hidden-xs"><?php echo $row['id_no'];?> </td>
                    <td class="hidden-xs"><?php echo $row['duration'];?> </td>
                    <td class="hidden-xs"><?php echo $row['credit_score'];?> </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                        </div>
                    </td>
                </tr>
                <?php }?>


                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->


</div>
<!-- END Page Content -->