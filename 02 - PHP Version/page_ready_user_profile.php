<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- User Profile Header -->
    <!-- For an image header add the class 'content-header-media' and an image as in the following example -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="pull-right img-circle">
            <h1>John Doe <br><small>Life Explorer &amp; Traveller</small></h1>
        </div>
        <!-- For best results use an image with a resolution of 2560x248 pixels (You can also use a blurred image with ratio 10:1 - eg: 1000x100 pixels - it will adjust and look great!) -->
        <img src="img/placeholders/headers/profile_header.jpg" alt="header image" class="animation-pulseSlow">
    </div>
    <!-- END User Profile Header -->

    <!-- User Profile Content -->
    <div class="row">
        <!-- First Column -->
        <div class="col-md-6 col-lg-7">
            <!-- Updates Block -->
            <div class="block">
                <!-- Updates Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Privacy Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><strong>Share</strong> something..</h2>
                </div>
                <!-- END Updates Title -->

                <!-- Update Status Form -->
                <form action="page_ready_user_profile.php" method="post" class="block-content-full block-content-mini-padding" onsubmit="return false;">
                    <textarea id="default-textarea" name="default-textarea" rows="2" class="form-control push-bit" placeholder="What are you thinking?"></textarea>
                    <div class="clearfix">
                        <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-pencil"></i> Post</button>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Voice"><i class="fa fa-microphone"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add File"><i class="fa fa-file"></i></a>
                    </div>
                </form>
                <!-- END Update Status Form -->
            </div>
            <!-- END Updates Block -->

            <!-- Newsfeed Block -->
            <div class="block">
                <!-- Newsfeed Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="label label-danger animation-pulse">Live Feed</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Customize Feed"><i class="fa fa-pencil"></i></a>
                    </div>
                    <h2><strong>Newsfeed</strong></h2>
                </div>
                <!-- END Newsfeed Title -->

                <!-- Newsfeed Content -->
                <div class="block-content-full">
                    <!-- You can remove the class .media-feed-hover if you don't want each event to be highlighted on mouse hover -->
                    <ul class="media-list media-feed media-feed-hover">
                        <!-- Photos Uploaded -->
                        <!-- Example effect of the following update showing up in Newsfeed (initialized in js/pages/readyProfile.js) -->
                        <li id="newsfeed-update-example" class="media display-none">
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
                                        <a href="img/placeholders/photos/photo13.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo13.jpg" alt="image">
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <a href="img/placeholders/photos/photo23.jpg" data-toggle="lightbox-image">
                                            <img src="img/placeholders/photos/photo23.jpg" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <p>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i> Like</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i> Comment</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i> Share</a>
                                </p>
                            </div>
                        </li>
                        <!-- END Photos Uploaded -->

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
                        <!-- END Story Published -->

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
                            </div>
                        </li>
                        <!-- END Check in -->

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
                        <li class="media text-center">
                            <a href="javascript:void(0)" class="btn btn-xs btn-default push">View more..</a>
                        </li>
                        <!-- END Status Updated -->
                    </ul>
                </div>
                <!-- END Newsfeed Content -->
            </div>
            <!-- END Newsfeed Block -->
        </div>
        <!-- END First Column -->

        <!-- Second Column -->
        <div class="col-md-6 col-lg-5">
            <!-- Info Block -->
            <div class="block">
                <!-- Info Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Friend Request"><i class="fa fa-plus"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Hire"><i class="fa fa-briefcase"></i></a>
                    </div>
                    <h2>About <strong>John Doe</strong> <small>&bull; <i class="fa fa-file-text text-primary"></i> <a href="javascript:void(0)" data-toggle="tooltip" title="Download Bio in PDF">Bio</a></small></h2>
                </div>
                <!-- END Info Title -->

                <!-- Info Content -->
                <table class="table table-borderless table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 20%;"><strong>Info</strong></td>
                            <td>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non.</td>
                        </tr>
                        <tr>
                            <td><strong>Founder</strong></td>
                            <td><a href="javascript:void(0)">Company Inc</a></td>
                        </tr>
                        <tr>
                            <td><strong>Education</strong></td>
                            <td><a href="javascript:void(0)">University Name</a></td>
                        </tr>
                        <tr>
                            <td><strong>Projects</strong></td>
                            <td><a href="javascript:void(0)" class="label label-danger">168</a></td>
                        </tr>
                        <tr>
                            <td><strong>Best Skills</strong></td>
                            <td>
                                <a href="javascript:void(0)" class="label label-info">HTML</a>
                                <a href="javascript:void(0)" class="label label-info">CSS</a>
                                <a href="javascript:void(0)" class="label label-info">Javascript</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Info Content -->
            </div>
            <!-- END Info Block -->

            <!-- Photos Block -->
            <div class="block">
                <!-- Photos Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                    </div>
                    <h2>Best <strong>Photos</strong> <small>&bull; <a href="javascript:void(0)">25 Albums</a></small></h2>
                </div>
                <!-- END Photos Title -->

                <!-- Photos Content -->
                <div class="gallery" data-toggle="lightbox-gallery">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo12.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo12.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo15.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo15.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo3.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo3.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo4.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo4.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo5.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo6.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo20.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo20.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo17.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo17.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo14.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo14.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo9.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo9.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo11.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo11.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="img/placeholders/photos/photo10.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo10.jpg" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Photos Content -->
            </div>
            <!-- END Photos Block -->

            <!-- Friends Block -->
            <div class="block">
                <!-- Friends Title -->
                <div class="block-title">
                    <h2>New <strong>Friends</strong> <small>&bull; <a href="javascript:void(0)">450</a></small></h2>
                </div>
                <!-- END Friends Title -->

                <!-- Friends Content -->
                <div class="row text-center">
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-lg-2 block-section">
                        <a href="javascript:void(0)">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="image" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                </div>
                <!-- END Friends Content -->
            </div>
            <!-- END Friends Block -->

            <!-- Twitter Block -->
            <div class="block full">
                <!-- Twitter Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                    </div>
                    <h2>Twitter <strong>Feed</strong></h2>
                </div>
                <!-- END Twitter Title -->

                <!-- Twitter Content -->
                <div class="block-top block-content-mini-padding">
                    <form action="page_ready_user_profile.php" method="post" onsubmit="return false;">
                        <textarea id="profile-tweet" name="profile-tweet" class="form-control push-bit" rows="3" placeholder="Share something on Twitter.."></textarea>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-twitter"></i> Tweet</button>
                            <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Photo"><i class="fa fa-camera"></i></a>
                        </div>
                    </form>
                </div>
                <ul class="media-list">
                    <li class="media">
                        <a href="page_ready_user_profile.php" class="pull-left">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <span class="text-muted pull-right"><small><em>30 min ago</em></small></span>
                            <a href="page_ready_user_profile.php"><strong>John Doe</strong></a>
                            <p>In hac <a href="javascript:void(0)">habitasse</a> platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. <a href="javascript:void(0)" class="text-danger"><strong>#dev</strong></a></p>
                        </div>
                    </li>
                    <li class="media">
                        <a href="page_ready_user_profile.php" class="pull-left">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <span class="text-muted pull-right"><small><em>3 hours ago</em></small></span>
                            <a href="page_ready_user_profile.php"><strong>John Doe</strong></a>
                            <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                        </div>
                    </li>
                    <li class="media">
                        <a href="page_ready_user_profile.php" class="pull-left">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <span class="text-muted pull-right"><small><em>yesterday</em></small></span>
                            <a href="page_ready_user_profile.php"><strong>John Doe</strong></a>
                            <p>In hac habitasse platea dictumst. Proin ac nibh rutrum <a href="javascript:void(0)">lectus</a> rhoncus eleifend <a href="javascript:void(0)" class="text-danger"><strong>#design</strong></a></p>
                        </div>
                    </li>
                    <li class="media">
                        <a href="page_ready_user_profile.php" class="pull-left">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <span class="text-muted pull-right"><small><em>2 days ago</em></small></span>
                            <a href="page_ready_user_profile.php"><strong>John Doe</strong></a>
                            <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.</p>
                        </div>
                    </li>
                    <li class="media">
                        <a href="page_ready_user_profile.php" class="pull-left">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                        <div class="media-body">
                            <span class="text-muted pull-right"><small><em>3 days ago</em></small></span>
                            <a href="page_ready_user_profile.php"><strong>John Doe</strong></a>
                            <p>In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend.</p>
                        </div>
                    </li>
                </ul>
                <!-- END Twitter Content -->
            </div>
            <!-- END Twitter Block -->
        </div>
        <!-- END Second Column -->
    </div>
    <!-- END User Profile Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyProfile.js"></script>
<script>$(function(){ ReadyProfile.init(); });</script>

<?php include 'inc/template_end.php'; ?>