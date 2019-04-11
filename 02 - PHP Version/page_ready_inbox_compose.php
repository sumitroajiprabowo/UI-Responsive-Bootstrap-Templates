<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Inbox Header -->
    <div class="content-header">
        <div class="header-section">
            <h1><i class="gi gi-pencil"></i> Compose Message<br><small>Your Message Center</small></h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li>Message Center</li>
        <li><a href="">Compose Message</a></li>
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

        <!-- Compose Message List -->
        <div class="col-sm-8 col-lg-9">
            <!-- Compose Message Block -->
            <div class="block">
                <!-- Compose Message Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" id="cc-input-btn" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show Cc field"><i class="fa fa-plus"></i> Cc</a>
                        <a href="javascript:void(0)" id="bcc-input-btn"  class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show Bcc field"><i class="fa fa-plus"></i> Bcc</a>
                    </div>
                    <h2>Compose <strong>Message</strong></h2>
                </div>
                <!-- END Compose Message Title -->

                <!-- Compose Message Content -->
                <form action="page_ready_inbox_compose.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-to">To</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="email" id="compose-to" name="compose-to" class="form-control form-control-borderless" placeholder="Where to?">
                        </div>
                    </div>
                    <div id="cc-input" class="form-group display-none">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-to-cc">Cc</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="email" id="compose-to-cc" name="compose-to-cc" class="form-control form-control-borderless" placeholder="Enter Cc emails..">
                        </div>
                    </div>
                    <div id="bcc-input" class="form-group display-none">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-to-bcc">Bcc</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="email" id="compose-to-bcc" name="compose-to-bcc" class="form-control form-control-borderless" placeholder="Enter Bcc emails..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-subject">Subject</label>
                        <div class="col-md-9 col-lg-10">
                            <input type="email" id="compose-subject" name="compose-subject" class="form-control form-control-borderless" placeholder="Your subject..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-lg-2 control-label" for="compose-message">Message</label>
                        <div class="col-md-9 col-lg-10">
                            <textarea id="compose-message" name="compose-message" rows="20" class="form-control" placeholder="Your message.."></textarea>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3 col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> Send</button>
                            <button type="button" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i> Save Draft</button>
                        </div>
                    </div>
                </form>
                <!-- END Compose Message Content -->
            </div>
            <!-- END Compose Message Block -->
        </div>
        <!-- END Compose Message -->
    </div>
    <!-- END Inbox Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyInboxCompose.js"></script>
<script>$(function(){ ReadyInboxCompose.init(); });</script>

<?php include 'inc/template_end.php'; ?>