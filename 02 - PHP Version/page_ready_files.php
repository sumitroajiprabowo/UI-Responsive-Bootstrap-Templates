<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Files Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-file"></i>Files<br><small>Manage your files</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Files</a></li>
    </ul>
    <!-- END Files Header -->

    <!-- Main Row -->
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <!-- Navigation Block -->
            <div class="block full">
                <!-- Navigation Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><i class="fa fa-compass"></i> Files <strong>Navigation</strong></h2>
                </div>
                <!-- END Navigation Title -->

                <!-- Filter by Type links -->
                <!-- Custom files functionality is initialized in js/pages/readyFiles.js -->
                <!-- Add the category value you want each link in .media-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
                <ul class="nav nav-pills nav-stacked nav-icons media-filter">
                    <li class="active">
                        <a href="javascript:void(0)" data-category="all">
                            <i class="fa fa-fw fa-folder-open themed-color-dark icon-push"></i> <strong>All</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="movie">
                            <i class="fa fa-fw fa-film text-danger icon-push"></i> <strong>Movies</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="photo">
                            <i class="fa fa-fw fa-picture-o text-success icon-push"></i> <strong>Photos</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="music">
                            <i class="fa fa-fw fa-music text-info icon-push"></i> <strong>Music</strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-category="book">
                            <i class="fa fa-fw fa-book text-warning icon-push"></i> <strong>Books</strong>
                        </a>
                    </li>
                </ul>
                <!-- END Filter by Type links -->
            </div>
            <!-- END Navigation Block -->

            <!-- Upload Block -->
            <div class="block full hidden-xs">
                <!-- Upload Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2><i class="fa fa-cloud-upload"></i> Upload <strong>File</strong></h2>
                </div>
                <!-- END Upload Title -->

                <!-- Upload Content -->
                <form action="page_ready_files.php" class="dropzone"></form>
                <!-- END Upload Content -->
            </div>
            <!-- END Upload Block -->
        </div>
        <div class="col-md-8 col-lg-9">
            <!-- Files Block -->
            <div class="block">
                <!-- Files Content -->
                <!-- Add the category value for each item in its data-category attribute (for the filter functionality to work) -->
                <div class="row media-filter-items">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="music">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mp3 fa-5x text-info"></i>
                            </div>
                            <h4>
                                <strong>Classical</strong>.mp3<br>
                                <small>5 min | 7.3MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo7.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Food</strong>.jpg<br>
                                <small>5.3MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo2.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Bubble</strong>.jpg<br>
                                <small>3.2MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo1.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Mountain</strong>.jpg<br>
                                <small>6.4MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="movie">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mov fa-5x text-danger"></i>
                            </div>
                            <h4>
                                <strong>The Movie</strong>.mov<br>
                                <small>190 min | 1.8GB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="movie">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mov fa-5x text-danger"></i>
                            </div>
                            <h4>
                                <strong>Mountain Trip</strong>.mov<br>
                                <small>75 min | 0.5GB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="movie">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mov fa-5x text-danger"></i>
                            </div>
                            <h4>
                                <strong>Blockbuster</strong>.mov<br>
                                <small>180 min | 1.2GB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="book">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-pdf fa-5x text-warning"></i>
                            </div>
                            <h4>
                                <strong>HTML Tutorials</strong>.pdf<br>
                                <small>500 Pages | 6.2MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="music">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mp3 fa-5x text-info"></i>
                            </div>
                            <h4>
                                <strong>Soundtrack</strong>.mp3<br>
                                <small>4 min | 4.9MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="book">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-pdf fa-5x text-warning"></i>
                            </div>
                            <h4>
                                <strong>The Scary Path</strong>.pdf<br>
                                <small>300 Pages | 1.5MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="photo">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="img/placeholders/photos/photo16.jpg" class="btn btn-xs btn-danger" data-toggle="lightbox-image"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-jpg fa-5x text-success"></i>
                            </div>
                            <h4>
                                <strong>Bridge</strong>.jpg<br>
                                <small>3.9MB</small>
                            </h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media-items animation-fadeInQuickInv" data-category="music">
                            <div class="media-items-options text-left">
                                <a href="javascript:void(0)" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="media-items-content">
                                <i class="fi fi-mp3 fa-5x text-info"></i>
                            </div>
                            <h4>
                                <strong>New Sun</strong>.mp3<br>
                                <small>3 min | 3.5MB</small>
                            </h4>
                        </div>
                    </div>
                </div>
                <!-- END Files Content -->
            </div>
            <!-- END Files Block -->
        </div>
    </div>
    <!-- END Main Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyFiles.js"></script>
<script>$(function(){ ReadyFiles.init(); });</script>

<?php include 'inc/template_end.php'; ?>