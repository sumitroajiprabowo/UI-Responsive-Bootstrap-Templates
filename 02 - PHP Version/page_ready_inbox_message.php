<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Inbox Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="fa fa-eye"></i> View Message<br><small>Your Message Center</small></h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li>Message Center</li>
        <li><a href="">View Message</a></li>
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
                    <li>
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

        <!-- View Message -->
        <div class="col-sm-8 col-lg-9">
            <!-- View Message Block -->
            <div class="block full">
                <!-- View Message Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                    </div>
                    <h2><strong>The project is live!</strong> <small><span class="label label-success">Work</span></small></h2>
                </div>
                <!-- END View Message Title -->

                <!-- Message Meta -->
                <table class="table table-borderless table-vcenter remove-margin">
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 80px;">
                                <a href="page_ready_user_profile.php" class="pull-left">
                                    <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="Avatar" class="img-circle">
                                </a>
                            </td>
                            <td class="hidden-xs">
                                <a href="page_ready_user_profile.php"><strong>Explorer</strong></a> to <a href="page_ready_user_profile.php"><strong>Me</strong></a>
                            </td>
                            <td class="text-right"><strong>June 5, 2014 - 09:10 am</strong></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <!-- END Message Meta -->

                <!-- Message Body -->
                <p>Hey <strong>Admin</strong>,</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
                <p>Best Regards</p>
                <hr>
                <!-- END Message Body -->

                <!-- Attachments Row -->
                <div class="row block-section">
                    <div class="col-xs-4 col-sm-2 text-center">
                        <a href="img/placeholders/photos/photo1.jpg" data-toggle="lightbox-image">
                            <img src="img/placeholders/photos/photo1.jpg" alt="photo" class="img-responsive push-bit">
                        </a>
                        <span class="text-muted">IMG0001.JPG</span>
                    </div>
                    <div class="col-xs-4 col-sm-2 text-center">
                        <a href="img/placeholders/photos/photo2.jpg" data-toggle="lightbox-image">
                            <img src="img/placeholders/photos/photo2.jpg" alt="photo" class="img-responsive push-bit">
                        </a>
                        <span class="text-muted">IMG0002.JPG</span>
                    </div>
                    <div class="col-xs-4 col-sm-2 text-center">
                        <a href="img/placeholders/photos/photo3.jpg" data-toggle="lightbox-image">
                            <img src="img/placeholders/photos/photo3.jpg" alt="photo" class="img-responsive push-bit">
                        </a>
                        <span class="text-muted">IMG0003.JPG</span>
                    </div>
                </div>
                <!-- END Attachments Row -->

                <!-- Quick Reply Form -->
                <form action="page_ready_inbox_message.php" method="post" onsubmit="return false;">
                    <textarea id="message-quick-reply" name="message-quick-reply" rows="5" class="form-control push-bit" placeholder="Your message.."></textarea>
                    <button class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Quick Reply</button>
                </form>
                <!-- END Quick Reply Form -->
            </div>
            <!-- END View Message Block -->
        </div>
        <!-- END View Message -->
    </div>
    <!-- END Inbox Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>