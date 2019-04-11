<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Search Results Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-search"></i>Search Results<br><small>UI for Projects, Images, Users and Classic search results!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Search Results</a></li>
    </ul>
    <!-- END Search Results Header -->

    <!-- Search Styles Block -->
    <div class="block">
        <!-- Search Styles Title -->
        <div class="block-title">
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#search-tab-projects">Projects</a></li>
                <li><a href="#search-tab-images">Images</a></li>
                <li><a href="#search-tab-users">Users</a></li>
                <li><a href="#search-tab-classic">Classic</a></li>
            </ul>
        </div>
        <!-- END Search Styles Title -->

        <!-- Search Styles Content -->
        <div class="tab-content">
            <!-- Projects Search -->
            <div class="tab-pane active" id="search-tab-projects">
                <!-- Search Info - Pagination -->
                <div class="block-section clearfix">
                    <ul class="pagination remove-margin pull-right">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="pagination remove-margin">
                        <li class="active"><span><strong>10</strong> Results</span></li>
                    </ul>
                </div>
                <!-- END Search Info - Pagination -->

                <!-- Projects Results -->
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th><i class="fa fa-briefcase"></i> PROJECT</th>
                            <th class="text-center hidden-xs" style="width: 20%;">TICKETS</th>
                            <th class="text-center hidden-xs" style="width: 20%;">SALES</th>
                            <th class="text-center" style="min-width: 120px; width: 20%;">EARNINGS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3><a href="javascript:void(0)"><strong>Freelancer Web Application</strong></a></h3>
                                <p>
                                    <a href="page_ready_user_profile.php" class="label label-default"><i class="fa fa-user"></i> Paul Porter</a>
                                    <a href="javascript:void(0)" class="label label-warning">PHP</a>
                                </p>
                                <p><em>Integer fermentum tincidunt auctor. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. </em></p>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">45</h3>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">3.265</h3>
                            </td>
                            <td class="text-center">
                                <h3 class="animation-pullDown text-success"><strong>$ 51.350</strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><a href="javascript:void(0)"><strong>Premium Admin Template</strong></a></h3>
                                <p>
                                    <a href="page_ready_user_profile.php" class="label label-default"><i class="fa fa-user"></i> Joe Phillips</a>
                                    <a href="javascript:void(0)" class="label label-warning">HTML</a>
                                </p>
                                <p><em>Integer fermentum tincidunt auctor. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. </em></p>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">69</h3>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">1.529</h3>
                            </td>
                            <td class="text-center">
                                <h3 class="animation-pullDown text-success"><strong>$ 25.920</strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><a href="javascript:void(0)"><strong>Responsive Wordpress Theme</strong></a></h3>
                                <p>
                                    <a href="page_ready_user_profile.php" class="label label-default"><i class="fa fa-user"></i> Jesse Fox</a>
                                    <a href="javascript:void(0)" class="label label-warning"><i class="si si-wordpress"></i> WP</a>
                                </p>
                                <p><em>Integer fermentum tincidunt auctor. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. </em></p>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">256</h3>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">5.136</h3>
                            </td>
                            <td class="text-center">
                                <h3 class="animation-pullDown text-success"><strong>$ 62.158</strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><a href="javascript:void(0)"><strong>Video Game</strong></a></h3>
                                <p>
                                    <a href="page_ready_user_profile.php" class="label label-default"><i class="fa fa-user"></i> Gary Parker</a>
                                    <a href="javascript:void(0)" class="label label-warning"><i class="fa fa-mobile"></i> Mobile</a>
                                </p>
                                <p><em>Integer fermentum tincidunt auctor. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. </em></p>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">358</h3>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">15.326</h3>
                            </td>
                            <td class="text-center">
                                <h3 class="animation-pullDown text-success"><strong>$ 22.000</strong></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3><a href="javascript:void(0)"><strong>Web Design App</strong></a></h3>
                                <p>
                                    <a href="page_ready_user_profile.php" class="label label-default"><i class="fa fa-user"></i> Willie Burke</a>
                                    <a href="javascript:void(0)" class="label label-warning"><i class="fa fa-desktop"></i> PC</a>
                                </p>
                                <p><em>Integer fermentum tincidunt auctor. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. </em></p>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">560</h3>
                            </td>
                            <td class="text-center hidden-xs">
                                <h3 class="animation-pullDown">20.698</h3>
                            </td>
                            <td class="text-center">
                                <h3 class="animation-pullDown text-success"><strong>$ 98.512</strong></h3>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END Projects Results -->

                <!-- Bottom Navigation -->
                <div class="block-section text-right">
                    <ul class="pagination remove-margin">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- END Bottom Navigation -->
            </div>
            <!-- END Projects Search -->

            <!-- Images Search -->
            <div class="tab-pane" id="search-tab-images">
                <!-- Search Info - Pagination -->
                <div class="block-section clearfix">
                    <ul class="pagination remove-margin pull-right">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="pagination remove-margin">
                        <li class="active"><span><strong>28</strong> Results</span></li>
                    </ul>
                </div>
                <!-- END Search Info - Pagination -->

                <!-- Images Results -->
                <div class="gallery" data-toggle="lightbox-gallery">
                    <div class="row">
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo15.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo15.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo10.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo10.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo11.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo11.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo12.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo12.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo13.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo13.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo14.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo14.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo15.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo15.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo5.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo5.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo16.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo16.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo17.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo17.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 gallery-image">
                            <img src="img/placeholders/photos/photo18.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo18.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo22.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo22.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo3.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo3.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo1.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo1.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Images Results -->

                <!-- Bottom Navigation -->
                <div class="block-section text-right">
                    <ul class="pagination remove-margin">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- END Bottom Navigation -->
            </div>
            <!-- END Images Search -->

            <!-- Users Search -->
            <div class="tab-pane" id="search-tab-users">
                <!-- Search Info - Pagination -->
                <div class="block-section clearfix">
                    <ul class="pagination remove-margin pull-right">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="pagination remove-margin">
                        <li class="active"><span><strong>30</strong> Results</span></li>
                    </ul>
                </div>
                <!-- END Search Info - Pagination -->

                <!-- Users Results -->
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Subscription</th>
                                <th style="width: 150px;" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user1</a></td>
                                <td>user1@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user2</a></td>
                                <td>user2@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user3</a></td>
                                <td>user3@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user4</a></td>
                                <td>user4@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user5</a></td>
                                <td>user5@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user6</a></td>
                                <td>user6@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user7</a></td>
                                <td>user7@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user8</a></td>
                                <td>user8@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user9</a></td>
                                <td>user9@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                                <td><a href="page_ready_user_profile.php">user10</a></td>
                                <td>user10@example.com</td>
                                <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-xs">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END Users Results -->

                <!-- Bottom Navigation -->
                <div class="block-section text-right">
                    <ul class="pagination remove-margin">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- END Bottom Navigation -->
            </div>
            <!-- END Users Search -->

            <!-- Classic Search -->
            <div class="tab-pane" id="search-tab-classic">
                <!-- Search Info - Pagination -->
                <div class="block-section clearfix">
                    <ul class="pagination remove-margin pull-right">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                    <ul class="pagination remove-margin">
                        <li class="active"><span><strong>30</strong> Results</span></li>
                    </ul>
                </div>
                <!-- END Search Info - Pagination -->

                <!-- Classic Results -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">68 <i class="fa fa-comments"></i></span>
                                <span class="text-success">360 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">96 <i class="fa fa-comments"></i></span>
                                <span class="text-success">214 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">10 <i class="fa fa-comments"></i></span>
                                <span class="text-success">69 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">52 <i class="fa fa-comments"></i></span>
                                <span class="text-success">10 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">12 <i class="fa fa-comments"></i></span>
                                <span class="text-success">52 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">13 <i class="fa fa-comments"></i></span>
                                <span class="text-success">1 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">90 <i class="fa fa-comments"></i></span>
                                <span class="text-success">72 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">90 <i class="fa fa-comments"></i></span>
                                <span class="text-success">72 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">2 <i class="fa fa-comments"></i></span>
                                <span class="text-success">12 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="block-section">
                            <h4 class="sub-header"><i class="fa fa-angle-right"></i> <a href="javascript:void(0)"><strong>Responsive &amp; Premium Admin Template</strong></a></h4>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> &bull;
                                <a href="javascript:void(0)">http://example.com/</a> &bull;
                                <span class="text-warning">8 <i class="fa fa-comments"></i></span>
                                <span class="text-success">63 <i class="fa fa-thumbs-up"></i></span>
                            </p>
                            <p>Donec lacinia venenatis metus at bibendum. In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- END Classic Results -->

                <!-- Bottom Navigation -->
                <div class="block-section text-right">
                    <ul class="pagination remove-margin">
                        <li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- END Bottom Navigation -->
            </div>
            <!-- END Classic Search -->
        </div>
        <!-- END Search Styles Content -->
    </div>
    <!-- END Search Styles Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>