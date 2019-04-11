<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Tasks Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-tasks"></i>Tasks<br><small>Manage your to-dos!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Tasks</a></li>
    </ul>
    <!-- END Tasks Header -->

    <!-- Tasks Row -->
    <div class="row">
        <div class="col-sm-4 col-lg-3">
            <!-- Task Lists Block -->
            <div class="block full">
                <!-- Task Lists Title -->
                <div class="block-title clearfix">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><i class="fa fa-tasks"></i> Tasks <strong>List</strong></h2>
                </div>
                <!-- END Task Lists Title -->

                <!-- Task Lists Content -->
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">7</span>
                            <i class="fa fa-briefcase fa-fw"></i> <strong>Work</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">4</span>
                            <i class="fa fa-lock fa-fw"></i> <strong>Personal</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">3</span>
                            <i class="fa fa-plane fa-fw"></i> <strong>Vacation</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">5</span>
                            <i class="fa fa-users fa-fw"></i> <strong>Friends</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <span class="badge pull-right">1</span>
                            <i class="fa fa-building fa-fw"></i> <strong>University</strong>
                        </a>
                    </li>
                </ul>
                <!-- END Task Lists Content -->
            </div>
            <!-- END Task Lists Block -->

            <!-- Account Stats Block -->
            <div class="block">
                <!-- Account Status Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <span class="label label-danger">85%</span>
                    </div>
                    <h2><i class="fa fa-user"></i> Account <strong>Status</strong></h2>
                </div>
                <!-- END Account Status Title -->

                <!-- Account Stats Content -->
                <div class="row block-section text-center">
                    <div class="col-xs-12">
                        <div class="pie-chart block-section" data-percent="85" data-line-width="2" data-bar-color="#e74c3c" data-track-color="#ffffff">
                            <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="pie-avatar img-circle">
                        </div>
                    </div>
                </div>
                <table class="table table-borderless table-striped table-vcenter">
                    <tbody>
                        <tr>
                            <td class="text-right" style="width: 50%;"><strong>Active Plan</strong></td>
                            <td>VIP <a href="page_ready_pricing_tables.php" data-toggle="tooltip" title="Upgrade to Pro"><i class="fa fa-arrow-up"></i></a></td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Tasks Storage</strong></td>
                            <td class="text-danger"><strong>85</strong> of <strong>100</strong> MB</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Plan Valid</strong></td>
                            <td><span class="text-success"><strong>5</strong> months left</span></td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Account Status Content -->
            </div>
            <!-- END Account Status Block -->
        </div>
        <div class="col-sm-8 col-lg-9">
            <!-- Add new task functionality (initialized in js/pages/readyTasks.js) -->
            <form id="add-task-form" class="push">
                <div class="input-group input-group-lg">
                    <input type="text" id="add-task" name="add-task" class="form-control" placeholder="Add New Task..">
                    <div class="input-group-btn">
                        <button type="submit" id="add-task-btn" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </form>

            <!-- Task List -->
            <ul class="task-list">
                <li>
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Update Backend plugins
                    </label>
                </li>
                <li>
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Frontend Template
                    </label>
                </li>
                <li class="in-1x">
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Create Parallax Page
                    </label>
                </li>
                <li class="in-2x">
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Boxed layout support
                    </label>
                </li>
                <li class="task-done in-2x">
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Use awesome images
                    </label>
                </li>
                <li class="in-1x">
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Add LessCSS support
                    </label>
                </li>
                <li>
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Create PSD mockup files
                    </label>
                </li>
                <li class="task-done">
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Create and publish freebie packs
                    </label>
                </li>
                <li>
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Logo Design
                    </label>
                </li>
                <li>
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Website Design
                    </label>
                </li>
                <li>
                    <a href="javascript:void(0)" class="task-close"><i class="fa fa-times"></i></a>
                    <label class="checkbox-inline">
                        <input type="checkbox"> Fix some JS bugs
                    </label>
                </li>
            </ul>
            <!-- END Task List -->
        </div>
    </div>
    <!-- END Tasks Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyTasks.js"></script>
<script>$(function(){ ReadyTasks.init(); });</script>

<?php include 'inc/template_end.php'; ?>