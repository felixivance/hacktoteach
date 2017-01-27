<!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('assets/img/photos/photo3@2x.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">Dashboard</h1>
        <h2 class="h5 text-white-op animated zoomIn">Welcome Administrator</h2>
    </div>
</div>
<!-- END Page Header -->

<!-- Stats -->
<div class="content bg-white border-b">
    <div class="row items-push text-uppercase">
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Enrollments</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="#">3</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Enrollments</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="#">28</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Good Credit Score</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="#">90%</a>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="font-w700 text-gray-darker animated fadeIn">Average Credit Score</div>
            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
            <a class="h2 font-w300 text-primary animated flipInX" href="#">10%</a>
        </div>
    </div>
</div>
<!-- END Stats -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <!-- Main Dashboard Chart -->
            <div class="block">
                <div class="block-header">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Weekly Contributions Overview</h3>
                </div>
                <div class="block-content block-content-full bg-gray-lighter text-center">
                    <!-- Chart.js Charts (initialized in js/pages/base_pages_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
                    <div style="height: 374px;"><canvas class="js-dash-chartjs-lines"></canvas></div>
                </div>

            </div>
            <!-- END Main Dashboard Chart -->
        </div>
        <div class="col-lg-4">
            <!-- Content Grid -->
            <div class="content-grid">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Author of the Month -->
                        <a class="block block-link-hover2" href="base_pages_profile.html">
                            <div class="block-header">
                                <h3 class="block-title text-center">Agent of the Month</h3>
                            </div>
                            <div class="block-content block-content-full text-center bg-image" style="background-image: url('assets/img/photos/photo2.jpg');">
                                <div>
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="assets/img/avatars/avatar1.jpg" alt="">
                                </div>
                                <div class="h5 text-white push-15-t push-5">Good Babies Nursery</div>
                                <div class="h5 text-white-op">Kibera</div>
                            </div>
                            <div class="block-content">
                                <div class="row items-push text-center">
                                    <div class="col-xs-6">
                                        <div class="push-5"><i class="si si-briefcase fa-2x"></i></div>
                                        <div class="h5 font-w300 text-muted">9 Enrollments</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="push-5"><i class="si si-anchor fa-2x"></i></div>
                                        <div class="h5 font-w300 text-muted">34 All Time</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- END Author of the Month -->

                        <!-- Mini Stats -->
                        <a class="block block-link-hover3" href="javascript:void(0)">
                            <table class="block-table text-center">
                                <tbody>
                                <tr>
                                    <td style="width: 50%;">
                                        <div class="push-30 push-30-t">
                                            <i class="si si-graph fa-3x text-primary"></i>
                                        </div>
                                    </td>
                                    <td class="bg-gray-lighter" style="width: 50%;">
                                        <div class="h1 font-w700"><span class="h2 text-muted">%</span> 98</div>
                                        <div class="h5 text-muted text-uppercase push-5-t">Paying</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </a>

                        <!-- END Mini Stats -->
                    </div>
                </div>
            </div>
            <!-- END Content Grid -->
        </div>
    </div>
</div>
<!-- END Page Content -->