<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Charts Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-pie_chart"></i>Charts<br><small>Professional charts for your data!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Components</li>
        <li><a href="">Charts</a></li>
    </ul>
    <!-- END Charts Header -->

    <!-- Mini Charts Row -->
    <!-- Jquery Sparkline (initialized in js/pages/compCharts.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Mini Bar Charts Block -->
            <div class="block full">
                <!-- Mini Bar Charts Title -->
                <div class="block-title">
                    <h2><strong>Mini Bar</strong> Charts</h2>
                </div>
                <!-- END Mini Bar Charts Title -->

                <!-- Mini Bar Charts Content -->
                <div class="row text-center">
                    <div class="col-sm-4">
                        <span id="mini-chart-bar1">2,10,5,6,7,10,3,4</span>
                        <h4 class="text-center">Projects</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-chart-bar2">500,1200,750,3000,1350,1485,980,750</span>
                        <h4 class="text-center">Income</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-chart-bar3">17,8,6,12,20,1,10,5</span>
                        <h4 class="text-center">Updates</h4>
                    </div>
                </div>
                <!-- END Mini Bar Charts Content -->
            </div>
            <!-- END Mini Bar Charts Block -->
        </div>
        <div class="col-sm-6">
            <!-- Mini Line Charts Block -->
            <div class="block full">
                <!-- Mini Line Charts Title -->
                <div class="block-title">
                    <h2><strong>Mini Line</strong> Charts</h2>
                </div>
                <!-- END Mini Line Charts Title -->

                <!-- Mini Line Charts Content -->
                <div class="row text-center">
                    <div class="col-sm-4">
                        <span id="mini-chart-line1">2,10,5,6,7,10,3,4</span>
                        <h4 class="text-center">Projects</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-chart-line2">500,1200,750,3000,1350,1485,980,750</span>
                        <h4 class="text-center">Income</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-chart-line3">17,8,6,12,20,1,10,5</span>
                        <h4 class="text-center">Updates</h4>
                    </div>
                </div>
                <!-- END Mini Line Charts Content -->
            </div>
            <!-- END Mini Line Charts Block -->
        </div>
    </div>
    <!-- END Mini Charts Row -->

    <!-- Easy Pie Charts Block -->
    <div class="block">
        <!-- Easy Pie Charts Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <!-- Randomize functionality (initialized in js/pages/compCharts.js) -->
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-pies">Randomize</a>
            </div>
            <h2><strong>Easy Pie</strong> Charts</h2>
        </div>
        <!-- END Easy Pie Charts Title -->

        <!-- Easy Pie Charts Content -->
        <div class="row text-center">
            <div class="col-md-6">
                <h4 class="sub-header"><i class="gi gi-user"></i> People</h4>
                <div class="row">
                    <div class="col-xs-6">
                        <!-- Easy Pie Charts (initialized in js/app.js -> uiInit()) -->
                        <!-- Just add the class .pie-chart as well as the values you would like at data-percent and data-size (default is 80px) -->
                        <!-- You can also change the bar color, the track color or line width by setting the 'data-bar-color', 'data-track-color' and 'data-line-width' attributes respectively -->
                        <div class="pie-chart block-section" data-percent="70" data-line-width="2" data-bar-color="#1bbae1" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="pie-chart block-section" data-percent="25" data-line-width="2" data-bar-color="#9d1be1" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="pie-chart block-section" data-percent="45" data-line-width="2" data-bar-color="#1be1a2" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="pie-chart block-section" data-percent="90" data-line-width="2" data-bar-color="#e17d1b" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="pie-chart block-section" data-percent="60" data-line-width="2" data-bar-color="#e11b1b" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="pie-chart block-section" data-percent="20" data-line-width="2" data-bar-color="#e11b8b" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="sub-header"><i class="fa fa-bar-chart-o"></i> Data</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="pie-chart block-section" data-percent="30" data-size="130">
                            <span>30%</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pie-chart block-section" data-percent="90" data-size="130">
                            <span>90%</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pie-chart block-section" data-percent="50" data-size="130">
                            <span>50%</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="pie-chart block-section" data-percent="40" data-size="130">
                            <span>40%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Easy Pie Charts Content -->
    </div>
    <!-- END Easy Pie Charts Block -->

    <!-- Classic and Bars Chart -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Classic Chart Block -->
            <div class="block full">
                <!-- Classic Chart Title -->
                <div class="block-title">
                    <h2><strong>Classic</strong> Chart</h2>
                </div>
                <!-- END Classic Chart Title -->

                <!-- Classic Chart Content -->
                <!-- Flot Charts (initialized in js/pages/compCharts.js), for more examples you can check out http://www.flotcharts.org/ -->
                <div id="chart-classic" class="chart"></div>
                <!-- END Classic Chart Content -->
            </div>
            <!-- END Classic Chart Block -->
        </div>
        <div class="col-sm-6">
            <!-- Bars Chart Block -->
            <div class="block full">
                <!-- Bars Chart Title -->
                <div class="block-title">
                    <h2><strong>Bars</strong> Chart</h2>
                </div>
                <!-- END Bars Chart Title -->

                <!-- Bars Chart Content -->
                <!-- Flot Charts (initialized in js/pages/compCharts.js), for more examples you can check out http://www.flotcharts.org/ -->
                <div id="chart-bars" class="chart"></div>
                <!-- END Bars Chart Content -->
            </div>
            <!-- END Bars Chart Block -->
        </div>
    </div>
    <!-- END Classic and Bars Chart -->

    <!-- Live Chart Block -->
    <div class="block full">
        <!-- Live Chart Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <span id="chart-live-info" class="label label-primary">%</span>
                <span class="label label-danger animation-pulse">Live feed..</span>
            </div>
            <h2><strong>Live</strong> Chart</h2>
        </div>
        <!-- END Live Chart Title -->

        <!-- Live Chart Content -->
        <!-- Flot Charts (initialized in js/pages/compCharts.js), for more examples you can check out http://www.flotcharts.org/ -->
        <div id="chart-live" class="chart"></div>
        <!-- END Live Chart Content -->
    </div>
    <!-- END Live Chart Block -->

    <!-- Pie and Stacked Chart -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Pie Chart Block -->
            <div class="block full">
                <!-- Pie Chart Title -->
                <div class="block-title">
                    <h2><strong>Pie</strong> Chart</h2>
                </div>
                <!-- END Pie Title -->

                <!-- Pie Chart Content -->
                <div id="chart-pie" class="chart"></div>
                <!-- END Pie Chart Content -->
            </div>
            <!-- END Pie Chart Block -->
        </div>
        <div class="col-sm-6">
            <!-- Stacked Chart Block -->
            <div class="block full">
                <!-- Stacked Chart Title -->
                <div class="block-title">
                    <h2><strong>Stacked</strong> Chart</h2>
                </div>
                <!-- END Stacked Chart Title -->

                <!-- Stacked Chart Content -->
                <!-- Flot Charts (initialized in js/pages/compCharts.js), for more examples you can check out http://www.flotcharts.org/ -->
                <div id="chart-stacked" class="chart"></div>
                <!-- END Stacked Chart Content -->
            </div>
            <!-- END Stacked Chart Block -->
        </div>
    </div>
    <!-- END Pie and Stacked Chart -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compCharts.js"></script>
<script>$(function(){ CompCharts.init(); });</script>

<?php include 'inc/template_end.php'; ?>