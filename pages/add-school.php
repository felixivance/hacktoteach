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
                    <form class="js-validation-material form-horizontal push-10-t" action="dashboard" method="post">
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
                                        <option value="Kibera">Kibera</option>
                                        <option value="Namkuru">Mukuru</option>
                                        <option value="Mathare">Mathare</option>
                                        <option value="Soweto">Soweto</option>
                                    </select>
                                    <label for="val-skill2">Location</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="add-school" >
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


</div>
<!-- END Page Content -->