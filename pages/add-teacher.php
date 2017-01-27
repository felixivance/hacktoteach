<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Add New Teacher <small>.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Teachers</li>
                <li><a class="link-effect" href="">Add New Teacher</a></li>
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
                    <h3 class="block-title">Enter the Techer's Details below</h3>
                </div>
                <div class="block-content block-content-narrow">
                    <!-- jQuery Validation (.js-validation-material class is initialized in js/pages/base_forms_validation.js) -->
                    <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <form class="js-validation-material form-horizontal push-10-t" action="dashboard" method="post">

                        <div class="form-group">
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-firstname2" name="fname" placeholder="Enter teachers' firstname..">
                                    <label for="val-firstname2">Firstname</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-lastname2" name="lname" placeholder="Enter teachers' lastname..">
                                    <label for="val-lastname2">Lastname</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <input class="form-control" type="text" id="val-digits2" name="id_no" placeholder="293 ....">
                                    <label for="val-digits2">ID Number</label>
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
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <select onChange="dropdownTip(this.value)" class="form-control" id="val-skill2" name="duration">
                                        <option value="">Please select</option>
                                        <option value="1200">April</option>
                                        <option value="600">August</option>
                                        <option value="300">December</option>
                                    </select>
                                    <label for="val-skill2">When to Start</label>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            function dropdownTip(value) {
                                console.log(value);
                                document.getElementById("result").innerHTML = value;
                            }
                        </script>
                        <label>Monthly Payment will be</label>
                        <div id="result" class="alert alert-success"></div>
                        </div>
                        <input type="hidden" name="add-teacher">
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
    </div>
