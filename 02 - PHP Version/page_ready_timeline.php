<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Timeline Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="fa fa-rss"></i> Timeline<br><small>Put those updates in order!</small></h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Timeline</a></li>
    </ul>
    <!-- END Timeline Header -->

    <!-- Timeline Content Row -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Timeline Style Block -->
            <div class="block full">
                <!-- Timeline Style Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Timeline</strong> Style</h2>
                </div>
                <!-- END Timeline Style Title -->

                <!-- Timeline Style Content -->
                <!-- You can remove the class .block-content-full if you want the block to have its regular padding -->
                <div class="timeline block-content-full">
                    <h3 class="timeline-header">Web Conference <small><strong>June 14, 2014</strong></small></h3>
                    <!-- You can remove the class .timeline-hover if you don't want each event to be highlighted on mouse hover -->
                    <ul class="timeline-list timeline-hover">
                        <li>
                            <div class="timeline-icon"><i class="gi gi-cake"></i></div>
                            <div class="timeline-time">8:00 <strong>am</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Breakfast</strong></p>
                                <p class="push-bit">An awesome breakfast will wait for you at the lobby!</p>
                                <div class="row push">
                                    <div class="col-sm-6 col-md-4">
                                        <a href="img/placeholders/photos/photo6.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo6.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a href="img/placeholders/photos/photo7.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo7.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                            <div class="timeline-time">9:15 <strong>am</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Web Design Session</strong></p>
                                A1 Conference Room
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon"><i class="fa fa-coffee"></i></div>
                            <div class="timeline-time">10:30 <strong>am</strong></div>
                            <div class="timeline-content">
                                <strong>Coffee Break</strong>
                            </div>
                        </li>
                        <li class="active">
                            <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                            <div class="timeline-time">11:00 <strong>pm</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Web Development Session</strong></p>
                                B6 Conference Room
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon"><i class="fa fa-cutlery"></i></div>
                            <div class="timeline-time">1:30 <strong>pm</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Lunch</strong></p>
                                <p class="push-bit">Awesome food prepared by our awesome chefs!</p>
                                <div class="row push">
                                    <div class="col-sm-6 col-md-4">
                                        <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon"><i class="gi gi-beach_umbrella"></i></div>
                            <div class="timeline-time">3:00 <strong>pm</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Break</strong></p>
                                Relax time after lunch
                            </div>
                        </li>
                        <li class="active">
                            <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                            <div class="timeline-time">5:00 <strong>pm</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Web Standards Session</strong></p>
                                C1 Conference Room
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon"><i class="gi gi-drink"></i></div>
                            <div class="timeline-time">10:00 <strong>pm</strong></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>Happy Hour</strong></p>
                                <p class="push-bit">Free drinks at <a href="javascript:void(0)">Cafe-Bar</a>!</p>
                                <div id="gmap-timeline" class="gmap"></div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <div class="timeline-content">
                                <p class="push-bit"><strong>End of first day</strong></p>
                                <p class="push-bit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.</p>
                                <p>Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque!</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END Timeline Style Content -->
            </div>
            <!-- END Timeline Style Block -->
        </div>
        <div class="col-sm-6">
            <!-- Feed Style Block -->
            <div class="block">
                <!-- Feed Style Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Feed</strong> Style</h2>
                </div>
                <!-- END Feed Style Title -->

                <!-- Feed Style Content -->
                <div class="block-content-full">
                    <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
                    <ul class="media-list media-feed media-feed-hover">
                        <!-- Check in -->
                        <li class="media">
                            <a href="page_ready_user_profile.php" class="pull-left">
                                <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                            </a>
                            <div class="media-body">
                                <p class="push-bit">
                                    <span class="text-muted pull-right">
                                        <small>1 hour ago</small>
                                        <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                    </span>
                                    <strong><a href="page_ready_user_profile.php">Adventurer</a> checked in at <a href="javascript:void(0)">Cafe-Bar</a>.</strong>
                                </p>
                                <div id="gmap-checkin" class="gmap push"></div>
                                <p>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                </p>

                                <!-- Comments -->
                                <ul class="media-list push">
                                    <li class="media">
                                        <a href="page_ready_user_profile.php" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <a href="page_ready_user_profile.php"><strong>User</strong></a>
                                            <span class="text-muted"><small><em>1 hour ago</em></small></span>
                                            <p>Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.php" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <form action="page_ready_user_profile.php" method="post" onsubmit="return false;">
                                                <textarea id="profile-newsfeed-comment" name="profile-newsfeed-comment" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END Comments -->
                            </div>
                        </li>
                        <!-- END Check in -->

                        <!-- Story Published -->
                        <li class="media">
                            <a href="page_ready_user_profile.php" class="pull-left">
                                <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                            </a>
                            <div class="media-body">
                                <p class="push-bit">
                                    <span class="text-muted pull-right">
                                        <small>45 min now</small>
                                        <span class="text-danger" data-toggle="tooltip" title="From Web"><i class="fa fa-globe"></i></span>
                                    </span>
                                    <strong><a href="page_ready_user_profile.php">Explorer</a> published a new story.</strong>
                                </p>
                                <h5><a href="page_ready_article.php"><strong>The Mountain Trip</strong> &bull; Once in a lifetime experience</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti..</p>
                                <p>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-success"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                </p>
                            </div>
                        </li>
                        <!-- END Story Published -->

                        <!-- Photos Uploaded -->
                        <li class="media">
                            <a href="page_ready_user_profile.php" class="pull-left">
                                <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                            </a>
                            <div class="media-body">
                                <p class="push-bit">
                                    <span class="text-muted pull-right">
                                        <small>just now</small>
                                        <span class="text-success" data-toggle="tooltip" title="From Mobile"><i class="fa fa-mobile"></i></span>
                                    </span>
                                    <strong><a href="page_ready_user_profile.php">User</a> uploaded 2 new photos.</strong>
                                </p>
                                <div class="row push">
                                    <div class="col-sm-6 col-md-4">
                                        <a href="img/placeholders/photos/photo18.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo18.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a href="img/placeholders/photos/photo19.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo19.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                </p>

                                <!-- Comments -->
                                <ul class="media-list push">
                                    <li class="media">
                                        <a href="page_ready_user_profile.php" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <a href="page_ready_user_profile.php"><strong>User</strong></a>
                                            <span class="text-muted"><small><em>29 min ago</em></small></span>
                                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.php" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <a href="page_ready_user_profile.php"><strong>User</strong></a>
                                            <span class="text-muted"><small><em>18 min ago</em></small></span>
                                            <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a href="page_ready_user_profile.php" class="pull-left">
                                            <img src="img/placeholders/avatars/avatar.jpg" alt="Avatar" class="img-circle">
                                        </a>
                                        <div class="media-body">
                                            <form action="page_ready_user_profile.php" method="post" onsubmit="return false;">
                                                <textarea id="profile-newsfeed-comment1" name="profile-newsfeed-comment1" class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                                <button type="submit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Post Comment</button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                                <!-- END Comments -->
                            </div>
                        </li>
                        <!-- END Photos Uploaded -->

                        <!-- Status Updated -->
                        <li class="media">
                            <a href="page_ready_user_profile.php" class="pull-left">
                                <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                            </a>
                            <div class="media-body">
                                <p class="push-bit">
                                    <span class="text-muted pull-right">
                                        <small>5 hours ago</small>
                                        <span class="text-info" data-toggle="tooltip" title="From Custom App"><i class="fa fa-wrench"></i></span>
                                    </span>
                                    <strong><a href="page_ready_user_profile.php">User</a> updated status.</strong>
                                </p>
                                <p>Hey there! First post from the new application!</p>
                                <p>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                </p>
                            </div>
                        </li>
                        <li class="media text-center">
                            <a href="javascript:void(0)" class="btn btn-xs btn-default push">View more..</a>
                        </li>
                        <!-- END Status Updated -->
                    </ul>
                </div>
                <!-- END Feed Style Content -->
            </div>
            <!-- END Feed Style Block -->
        </div>
    </div>
    <!-- END Timeline Content Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyTimeline.js"></script>
<script>$(function(){ ReadyTimeline.init(); });</script>

<?php include 'inc/template_end.php'; ?>