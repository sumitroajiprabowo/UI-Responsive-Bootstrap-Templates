<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Dashboard 2 Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li class="active">
                <a href="javascript:void(0)"><i class="fa fa-home"></i> Home</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="gi gi-charts"></i> Sales</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="gi gi-briefcase"></i> Projects</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="gi gi-video_hd"></i> Movies</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="gi gi-music"></i> Music</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cubes"></i> Apps</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-pencil"></i> Profile</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-cogs"></i> Settings</a>
            </li>
        </ul>
    </div>
    <!-- END Dashboard 2 Header -->

    <!-- Dashboard 2 Content -->
    <div class="row">
        <div class="col-md-6">
            <!-- Web Server Block -->
            <div class="block full">
                <!-- Web Server Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span id="dash-chart-live-info" class="label label-primary">%</span>
                        <span class="label label-danger animation-pulse">CPU Load</span>
                    </div>
                    <h2><strong>Web</strong> Server #1</h2>
                </div>
                <!-- END Web Server Title -->

                <!-- Web Server Content -->
                <!-- Flot Charts (initialized in js/pages/index2.js), for more examples you can check out http://www.flotcharts.org/ -->
                <div id="dash-chart-live" class="chart"></div>
                <!-- END Web Server Content -->
            </div>
            <!-- END Web Server Block -->

            <!-- Mini Sales Charts Block -->
            <!-- Jquery Sparkline (initialized in js/pages/index2.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
            <div class="block full">
                <!-- Mini Sales Charts Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                    <a href="javascript:void(0)">This Month</a>
                                    <a href="javascript:void(0)">This Year</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2><strong>Sales</strong> This Week</h2>
                </div>
                <!-- END Mini Sales Charts Title -->

                <!-- Mini Sales Charts Content -->
                <div class="row text-center">
                    <div class="col-sm-4">
                        <span id="mini-sales1">2,5,6,7,10,16,18</span>
                        <h4>WP Theme</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-sales2">5,6,8,3,11,15,35</span>
                        <h4>Web App</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-sales3">7,8,9,8,8,10,12</span>
                        <h4>Icon Set</h4>
                    </div>
                </div>
                <!-- END Mini Sales Charts Content -->
            </div>
            <!-- END Mini Sales Charts Block -->

            <!-- Mini Earnings Charts Block -->
            <!-- Jquery Sparkline (initialized in js/pages/index2.js), for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
            <div class="block full">
                <!-- Mini Earnings Charts Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li>
                                    <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i> This Week</a>
                                    <a href="javascript:void(0)">This Month</a>
                                    <a href="javascript:void(0)">This Year</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h2><strong>Earnings</strong> This Week</h2>
                </div>
                <!-- END Mini Earnings Charts Title -->

                <!-- Mini Earnings Charts Content -->
                <div class="row text-center">
                    <div class="col-sm-4">
                        <span id="mini-earnings1">200,500,600,700,1000,1600,1800</span>
                        <h4>WP Theme</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-earnings2">500,600,800,300,1100,1500,3500</span>
                        <h4>Web App</h4>
                    </div>
                    <div class="col-sm-4">
                        <span id="mini-earnings3">700,800,900,800,800,1000,1200</span>
                        <h4>Icon Set</h4>
                    </div>
                </div>
                <!-- END Mini Earnings Charts Content -->
            </div>
            <!-- END Mini Earnings Charts Block -->

            <!-- Quick Post Block -->
            <div class="block">
                <!-- Quick Post Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Post Options"><i class="fa fa-pencil"></i></a>
                    </div>
                    <h2><strong>Quick</strong> Post</h2>
                </div>
                <!-- END Quick Post Title -->

                <!-- Quick Post Content -->
                <form action="index2.php" method="post" class="form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <input type="text" id="qpost-title" name="qpost-title" class="form-control" placeholder="Enter a title..">
                    </div>
                    <div class="form-group">
                        <input type="text" id="qpost-tags" name="qpost-tags" class="input-tags" value="tutorial, learn, javascript">
                    </div>
                    <div class="form-group">
                        <textarea id="qpost-content" name="qpost-content" rows="11" class="form-control" placeholder="Enter content.."></textarea>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Publish</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </form>
                <!-- END Quick Post Content -->
            </div>
            <!-- END Quick Post Block -->
        </div>
        <div class="col-md-6">
            <!-- Timeline Block -->
            <div class="block">
                <!-- Timeline Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Latest</strong> News</h2>
                </div>
                <!-- END Timeline Title -->

                <!-- Timeline Content -->
                <div class="block-content-full">
                    <div class="timeline">
                        <ul class="timeline-list">
                            <li class="active">
                                <div class="timeline-icon"><i class="gi gi-airplane"></i></div>
                                <div class="timeline-time"><small>just now</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Jordan Carter</strong></a></p>
                                    <p class="push-bit">The trip was an amazing and a life changing experience!!</p>
                                    <p class="push-bit"><a href="page_ready_article.php" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> Read the article</a></p>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo1.jpg" alt="image">
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo22.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo22.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                                <div class="timeline-time"><small>5 min ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Administrator</strong></a></p>
                                    <strong>Free courses</strong> for all our customers at A1 Conference Room - 9:00 <strong>am</strong> tomorrow!
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="gi gi-drink"></i></div>
                                <div class="timeline-time"><small>3 hours ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Ella Winter</strong></a></p>
                                    <p class="push-bit"><strong>Happy Hour!</strong> Free drinks at <a href="javascript:void(0)">Cafe-Bar</a> all day long!</p>
                                    <div id="gmap-timeline-dash2" class="gmap" style="height: 220px;"></div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-cutlery"></i></div>
                                <div class="timeline-time"><small>yesterday</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Patricia Woods</strong></a></p>
                                    <p class="push-bit">Today I had the lunch of my life! It was delicious!</p>
                                    <div class="row push">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                                <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-smile-o"></i></div>
                                <div class="timeline-time"><small>2 days ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Administrator</strong></a></p>
                                    To thank you all for your support we would like to let you know that you will receive free feature updates for life! You are awesome!
                                </div>
                            </li>
                            <li class="active">
                                <div class="timeline-icon"><i class="fa fa-pencil"></i></div>
                                <div class="timeline-time"><small>1 week ago</small></div>
                                <div class="timeline-content">
                                    <p class="push-bit"><a href="page_ready_user_profile.php"><strong>Nicole Ward</strong></a></p>
                                    <p class="push-bit">Consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>
                                    Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.
                                </div>
                            </li>
                            <li class="text-center">
                                <a href="javascript:void(0)" class="btn btn-xs btn-default">View more..</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END Timeline Content -->
            </div>
            <!-- END Timeline Block -->
        </div>
    </div>
    <!-- END Dashboard 2 Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/index2.js"></script>
<script>$(function(){ Index2.init(); });</script>

<?php include 'inc/template_end.php'; ?>