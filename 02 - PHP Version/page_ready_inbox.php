<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Inbox Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="gi gi-envelope"></i> Inbox<br><small>Your Message Center</small></h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li>Message Center</li>
        <li><a href="">Inbox</a></li>
    </ul>
    <!-- END Inbox Header -->

    <!-- Inbox Content -->
    <div class="row">
        <!-- Inbox Menu -->
        <div class="col-sm-4 col-lg-3">
            <!-- Menu Block -->
            <div class="block full">
                <!-- Menu Title -->
                <div class="block-title clearfix">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                    </div>
                    <div class="block-options pull-left">
                        <a href="page_ready_inbox_compose.php" class="btn btn-alt btn-sm btn-default"><i class="fa fa-pencil"></i> Compose Message</a>
                    </div>
                </div>
                <!-- END Menu Title -->

                <!-- Menu Content -->
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="page_ready_inbox.php">
                            <span class="badge pull-right">5</span>
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Inbox</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">10</span>
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Starred</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Sent</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">2</span>
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Drafts</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Archive</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Spam</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-angle-right fa-fw"></i> <strong>Trash</strong>
                        </a>
                    </li>
                </ul>
                <!-- END Menu Content -->
            </div>
            <!-- END Menu Block -->

            <!-- Tags Block -->
            <div class="block full">
                <!-- Tags Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Add Tag"><i class="fa fa-plus"></i></a>
                    </div>
                    <h2> <i class="fa fa-tags"></i> User <strong>Tags</strong></h2>
                </div>
                <!-- END Tags Title -->

                <!-- Tags Content -->
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">1680</span>
                            <i class="fa fa-tag fa-fw text-success"></i> <strong>Work</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">350</span>
                            <i class="fa fa-tag fa-fw text-warning"></i> <strong>Friends</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">651</span>
                            <i class="fa fa-tag fa-fw text-danger"></i> <strong>Projects</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">156</span>
                            <i class="fa fa-tag fa-fw text-info"></i> <strong>For Later</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">296</span>
                            <i class="fa fa-tag fa-fw text-muted"></i> <strong>Sites</strong>
                        </a>
                    </li>
                </ul>
                <!-- END Tags Content -->
            </div>
            <!-- END Tags Block -->

            <!-- Account Stats Block -->
            <div class="block">
                <!-- Account Status Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-warning">70%</span>
                    </div>
                    <h2><i class="fa fa-user"></i> Account <strong>Status</strong></h2>
                </div>
                <!-- END Account Status Title -->

                <!-- Account Stats Content -->
                <div class="row block-section text-center">
                    <div class="col-xs-12">
                        <div class="pie-chart block-section" data-percent="70" data-line-width="2" data-bar-color="#e67e22" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Active Plan</strong></td>
                            <td>Business <a href="page_ready_pricing_tables.php" data-toggle="tooltip" title="Upgrade to VIP"><i class="fa fa-arrow-up"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Plan Valid</strong></td>
                            <td><span class="text-danger"><strong>5</strong> days left</span></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Storage Usage</strong></td>
                            <td class="text-warning"><strong>21</strong> of <strong>30</strong> GB</td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Account Status Content -->
            </div>
            <!-- END Account Status Block -->

            <!-- Online Users Block -->
            <div class="block">
                <!-- Online Users Title -->
                <div class="block-title">
                    <h2><i class="fa fa-circle text-success"></i> Online <strong>Users</strong></h2>
                </div>
                <!-- END Online Users Title -->

                <!-- Online Users Content -->
                <div class="row text-center">
                    <div class="col-xs-6 block-section">
                        <a href="page_ready_user_profile.php">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-6 block-section">
                        <a href="page_ready_user_profile.php">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-6 block-section">
                        <a href="page_ready_user_profile.php">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                    <div class="col-xs-6 block-section">
                        <a href="page_ready_user_profile.php">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle" data-toggle="tooltip" title="Username">
                        </a>
                    </div>
                </div>
                <!-- END Online Users Content -->
            </div>
            <!-- END Online Users Block -->
        </div>
        <!-- END Inbox Menu -->

        <!-- Messages List -->
        <div class="col-sm-8 col-lg-9">
            <!-- Messages List Block -->
            <div class="block">
                <!-- Messages List Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Inbox <strong>(5)</strong></h2>
                </div>
                <!-- END Messages List Title -->

                <!-- Messages List Content -->
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox-all" name="checkbox-all">
                                </td>
                                <td colspan="3">
                                    <div class="btn-group btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Archive Selected"><i class="fa fa-briefcase"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Star Selected"><i class="fa fa-star"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-default" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                                <td class="text-right" colspan="3">
                                    <strong>1-30</strong> from <strong>5250</strong>
                                    <div class="btn-group btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fa fa-angle-left"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Use the first row as a prototype for your column widths -->
                            <tr>
                                <td class="text-center" style="width: 30px;">
                                    <input type="checkbox" id="checkbox1" name="checkbox1">
                                </td>
                                <td class="text-center" style="width: 30px;">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center" style="width: 30px;">
                                    <a href="javascript:void(0)" class="text-success msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td style="width: 20%;">Debra Stanley</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>New Follower</strong></a>
                                    <span class="text-muted">Hey, just wanted to let you know..</span>
                                </td>
                                <td class="text-center" style="width: 30px;">
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right" style="width: 90px;"><em>just now</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox2" name="checkbox2">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-success msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Sarah Cole</td>
                                <td>
                                    <span class="label label-info">For Later</span>
                                    <a href="page_ready_inbox_message.php"><strong>Your subscription was updated</strong></a>
                                    <span class="text-muted">We are glad you decided to..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 min ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox3" name="checkbox3">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-success msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Bryan Porter</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>A great opportunity</strong></a>
                                    <span class="text-muted">With the growing demand on..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>10 min ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox4" name="checkbox4">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-success msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Jose Duncan</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Account Activation</strong></a>
                                    <span class="text-muted">Hey Admin, about my account..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>30 min ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox5" name="checkbox5">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-success msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Henry Ellis</td>
                                <td>
                                    <span class="label label-danger">Projects</span>
                                    <a href="page_ready_inbox_message.php"><strong>You reached 10.000 Followers!</strong></a>
                                    <span class="text-muted">Dear Sir/Madam, I'm glad to inform you..</span>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right"><em>40 min ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox6" name="checkbox6">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Stephen Estrada</td>
                                <td>
                                    <span class="label label-warning">Friends</span>
                                    <a href="page_ready_inbox_message.php"><strong>The Trip was amazing!</strong></a>
                                    <span class="text-muted">I wish you could come with us at..</span>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right"><em>55 min ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox7" name="checkbox7">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Henry Mendez</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Update is available</strong></a>
                                    <span class="text-muted">An update is under way for..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 hours ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox8" name="checkbox8">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Anthony Weber</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>PSD Freebies</strong></a>
                                    <span class="text-muted">At our site you will find amazing..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>3 hours ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox9" name="checkbox9">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Aaron Webb</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Discount available</strong></a>
                                    <span class="text-muted">Due to the fact that you..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>3 hours ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox10" name="checkbox10">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Julie Parker</td>
                                <td>
                                    <span class="label label-success">Work</span>
                                    <a href="page_ready_inbox_message.php"><strong>New Sale!</strong></a>
                                    <span class="text-muted">You had a new sale and earned..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>5 hours ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox11" name="checkbox11">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Billy Berry</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Action Required for your account!</strong></a>
                                    <span class="text-muted">Your account is inactive and..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>7 hours ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox12" name="checkbox12">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Jacqueline Evans</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>New Photo Pack!</strong></a>
                                    <span class="text-muted">Our new photo pack is available..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>7 hours ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox13" name="checkbox13">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Janice Holland</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Product is released!</strong></a>
                                    <span class="text-muted">This is a notification about..</span>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right"><em>yesterday</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox14" name="checkbox14">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Nancy Bryant</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Now on Sale!</strong></a>
                                    <span class="text-muted">Our Book is out! You can..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>yesterday</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox15" name="checkbox15">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>James Romero</td>
                                <td>
                                    <span class="label label-info">For Later</span>
                                    <a href="page_ready_inbox_message.php"><strong>Monthly Report</strong></a>
                                    <span class="text-muted">The monthly report you request for..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>yesterday</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox16" name="checkbox16">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Diana Martinez</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Trial Started!</strong></a>
                                    <span class="text-muted">You 30-day trial has now started and..</span>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right"><em>2 days ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox17" name="checkbox17">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Ruth Gibson</td>
                                <td>
                                    <span class="label label-danger">Projects</span>
                                    <a href="page_ready_inbox_message.php"><strong>Choosing the right font</strong></a>
                                    <span class="text-muted">Choosing a font for your site isn’t..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 days ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox18" name="checkbox18">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Theresa White</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>An update is available..</strong></a>
                                    <span class="text-muted">A product you purchased has..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 days ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox19" name="checkbox19">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Amy Cruz</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Bug Report!</strong></a>
                                    <span class="text-muted">It has come to my attention that..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>1 week ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox20" name="checkbox20">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Jennifer Wilson</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Support Needed</strong></a>
                                    <span class="text-muted">Please, could you help me out a little..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>1 week ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox21" name="checkbox21">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Kelly Alvarez</td>
                                <td>
                                    <span class="label label-success">Work</span>
                                    <a href="page_ready_inbox_message.php"><strong>Invoice #INV001645</strong></a>
                                    <span class="text-muted">This is the invoice for..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>1 week ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox22" name="checkbox22">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Online Bank</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Balance changed</strong></a>
                                    <span class="text-muted">There was a change in your account..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox23" name="checkbox23">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Samantha Little</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Hey!!</strong></a>
                                    <span class="text-muted">I thought just drop a mail and..</span>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right"><em>2 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox24" name="checkbox24">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Craig Henry</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Building a new website</strong></a>
                                    <span class="text-muted">Recently, I started learning..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox25" name="checkbox25">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Facebook</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Friend Request!</strong></a>
                                    <span class="text-muted">You have a new friend request..</span>
                                </td>
                                <td>
                                    <i class="fa fa-paperclip"></i>
                                </td>
                                <td class="text-right"><em>2 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox26" name="checkbox26">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Helen West</td>
                                <td>
                                    <span class="label label-danger">Projects</span>
                                    <a href="page_ready_inbox_message.php"><strong>New project!</strong></a>
                                    <span class="text-muted">Let’s start by letting you know that..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>2 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox27" name="checkbox27">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Facebook</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Friend Request!</strong></a>
                                    <span class="text-muted">You have a new friend request..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>3 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox28" name="checkbox28">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Linkedin</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>New Job!</strong></a>
                                    <span class="text-muted">A new job position is waiting..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>3 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox29" name="checkbox29">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-warning msg-fav-btn"><i class="fa fa-star"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Twitter</td>
                                <td>
                                    <span class="label label-success">Work</span>
                                    <a href="page_ready_inbox_message.php"><strong>New Follower!</strong></a>
                                    <span class="text-muted">You have a new follower..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>3 weeks ago</em></td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" id="checkbox30" name="checkbox30">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-fav-btn"><i class="fa fa-star-o"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="text-muted msg-read-btn"><i class="fa fa-circle"></i></a>
                                </td>
                                <td>Aaron Lawson</td>
                                <td>
                                    <a href="page_ready_inbox_message.php"><strong>Hey man!</strong></a>
                                    <span class="text-muted">I just wanted to let you know..</span>
                                </td>
                                <td></td>
                                <td class="text-right"><em>3 weeks ago</em></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END Messages List Content -->
            </div>
            <!-- END Messages List Block -->
        </div>
        <!-- END Messages List -->
    </div>
    <!-- END Inbox Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyInbox.js"></script>
<script>$(function(){ ReadyInbox.init(); });</script>

<?php include 'inc/template_end.php'; ?>