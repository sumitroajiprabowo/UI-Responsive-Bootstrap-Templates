<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Progress - Loading Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-sun-o fa-spin"></i>Progress &amp; Loading<br><small>Indicators for every situation!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Progress &amp; Loading</a></li>
    </ul>
    <!-- END Progress - Loading Header -->

    <!-- Top Loading Bar Block -->
    <div class="block full">
        <!-- Top Loading Bar Title -->
        <div class="block-title">
            <h2><strong>Top</strong> Loading Bar</h2>
        </div>
        <!-- END Top Loading Bar Title -->

        <!-- Top Loading Bar Content -->
        <p>An awesome top loading bar, so you can easily add progress to your ajax calls. Themed to match every available color theme. For a sneak peak, just start loading and change themes from the sidebar!</p>
        <!-- Top loading functionality is initialized in js/pages/uiProgress.js -->
        <button class="btn btn-sm btn-success" id="top-loading-start" data-loading-text="Loading...">Start Loading</button>
        <button class="btn btn-sm btn-danger" id="top-loading-stop" data-loading-text="Stop Loading">Stop Loading</button>
        <!-- END Top Loading Bar Content -->
    </div>
    <!-- END Top Loading Bar Block -->

    <!-- Growl Notifications Block -->
    <div class="block full">
        <!-- Growl Notifications Title -->
        <div class="block-title">
            <h2><strong>Growl</strong> Notifications</h2>
        </div>
        <!-- END Growl Notifications Title -->

        <!-- Growl Notifications Content -->
        <!-- Notifications functionality is initialized in js/pages/uiProgress.js -->
        <button type="button" class="btn btn-sm btn-success btn-growl" data-growl="success"><i class="fa fa-check fa-fw"></i> Success</button>
        <button type="button" class="btn btn-sm btn-info btn-growl" data-growl="info"><i class="fa fa-info fa-fw"></i> Info</button>
        <button type="button" class="btn btn-sm btn-warning btn-growl" data-growl="warning"><i class="fa fa-exclamation-triangle fa-fw"></i> Warning</button>
        <button type="button" class="btn btn-sm btn-danger btn-growl" data-growl="danger"><i class="fa fa-times fa-fw"></i> Danger</button>
        <!-- END Growl Notifications Content -->
    </div>
    <!-- END Growl Notifications Block -->

    <!-- FontAwesome Block -->
    <div class="block">
        <!-- FontAwesome Title -->
        <div class="block-title">
            <h2><strong>Font Awesome</strong> Loaders</h2>
        </div>
        <!-- END FontAwesome Title -->

        <!-- FontAwesome Content -->
        <div class="row">
            <div class="col-md-6">
                <table class="table table-borderless remove-margin">
                    <tbody>
                        <tr>
                            <td><code>.fa</code> <code>.fa-spinner</code> <code>.fa-spin</code></td>
                            <td class="text-center"><i class="fa fa-spinner fa-spin"></i></td>
                        </tr>
                        <tr>
                            <td><code>.fa</code> <code>.fa-spinner</code> <code>.fa-spin</code> <code>.fa-2x</code></td>
                            <td class="text-center"><i class="fa fa-spinner fa-2x fa-spin"></i></td>
                        </tr>
                        <tr>
                            <td><code>.fa</code> <code>.fa-spinner</code> <code>.fa-spin</code> <code>.fa-3x</code></td>
                            <td class="text-center"><i class="fa fa-spinner fa-3x fa-spin"></i></td>
                        </tr>
                        <tr>
                            <td><code>.fa</code> <code>.fa-spinner</code> <code>.fa-spin</code> <code>.fa-4x</code></td>
                            <td class="text-center"><i class="fa fa-spinner fa-4x fa-spin"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><code>.fa</code> <code>.fa-asterisk</code> <code>.fa-spin</code></td>
                            <td class="text-center"><i class="fa fa-asterisk fa-spin text-warning"></i></td>
                        </tr>
                        <tr>
                            <td><code>.fa</code> <code>.fa-asterisk</code> <code>.fa-spin</code> <code>.fa-2x</code></td>
                            <td class="text-center"><i class="fa fa-asterisk fa-spin fa-2x text-info"></i></td>
                        </tr>
                        <tr>
                            <td><code>.fa</code> <code>.fa-asterisk</code> <code>.fa-spin</code> <code>.fa-3x</code></td>
                            <td class="text-center"><i class="fa fa-asterisk fa-spin fa-3x text-success"></i></td>
                        </tr>
                        <tr>
                            <td><code>.fa</code> <code>.fa-asterisk</code> <code>.fa-spin</code> <code>.fa-4x</code></td>
                            <td class="text-center"><i class="fa fa-asterisk fa-spin fa-4x text-danger"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END FontAwesome Content -->
    </div>
    <!-- END FontAwesome Block -->

    <!-- Progress Bars Block -->
    <div class="block">
        <!-- Progress Bars Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <!-- Randomize functionality is initialized in js/pages/uiProgress.js -->
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bars">Randomize</a>
            </div>
            <h2><strong>Progress</strong> Bars</h2>
        </div>
        <!-- END Progress Bars Title -->

        <!-- Normal and Stacked -->
        <div class="row">
            <div class="col-md-6 bars-container">
                <h4 class="sub-header">Normal</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                </div>
            </div>
            <div class="col-md-6 bars-container">
                <h4 class="sub-header">Striped</h4>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
                </div>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                </div>
            </div>
        </div>
        <!-- END Normal and Stacked -->

        <!-- Striped and Animated -->
        <div class="row">
            <div class="col-md-6 bars-stacked-container">
                <h4 class="sub-header">Stacked</h4>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">10%</div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
                <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">10%</div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 10%">10%</div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">30%</div>
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
            </div>
            <div class="col-md-6 bars-container">
                <h4 class="sub-header">Striped Animated (on modern browsers)</h4>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
                </div>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40%</div>
                </div>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
                </div>
            </div>
        </div>
        <!-- END Striped and Animated -->
    </div>
    <!-- END Progress Bars Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/uiProgress.js"></script>
<script>$(function(){ UiProgress.init(); });</script>

<?php include 'inc/template_end.php'; ?>