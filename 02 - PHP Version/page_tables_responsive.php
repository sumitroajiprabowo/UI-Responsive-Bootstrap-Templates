<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Table Responsive Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-iphone"></i>Responsive Tables<br><small>Play nice on various screen sizes!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Tables</li>
        <li><a href="">Responsive</a></li>
    </ul>
    <!-- END Table Responsive Header -->

    <!-- Responsive Full Block -->
    <div class="block">
        <!-- Responsive Full Title -->
        <div class="block-title">
            <h2><strong>Full Table</strong> Responsive</h2>
        </div>
        <!-- END Responsive Full Title -->

        <!-- Responsive Full Content -->
        <p>The first way to make a table responsive, is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way the table will be horizontally scrollable and all the data will be accessible on smaller screens (&lt; 768px). Try resizing your browser window to check it live!</p>
        <div class="table-responsive">
            <table class="table table-vcenter table-striped">
                <thead>
                    <tr>
                        <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                        <th>Client</th>
                        <th>Email</th>
                        <th>Subscription</th>
                        <th style="width: 150px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client1</a></td>
                        <td>client1@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client2</a></td>
                        <td>client2@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client3</a></td>
                        <td>client3@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client4</a></td>
                        <td>client4@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client5</a></td>
                        <td>client5@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client6</a></td>
                        <td>client6@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-info">Business</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                        <td><a href="page_ready_user_profile.php">client7</a></td>
                        <td>client7@example.com</td>
                        <td><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Responsive Full Content -->
    </div>
    <!-- END Responsive Full Block -->

    <!-- Responsive Partial Block -->
    <div class="block">
        <!-- Responsive Partial Title -->
        <div class="block-title">
            <h2><strong>Partial Table</strong> Responsive</h2>
        </div>
        <!-- END Responsive Partial Title -->

        <!-- Responsive Partial Content -->
        <p>The second way is to use specific CSS classes for hiding columns in various screen resolutions. This way you can hide the less important columns and keep the most valuable on mobiles. At the following example the <strong>Subscription</strong> column isn't visible on small and extra small screens and <strong>Email</strong> column isn't visible on extra small screens. Try resizing your browser window to check it live!</p>
        <table class="table table-vcenter table-striped">
            <thead>
                <tr>
                    <th style="width: 150px;" class="text-center"><i class="gi gi-user"></i></th>
                    <th>Client</th>
                    <th class="hidden-xs">Email</th>
                    <th class="hidden-sm hidden-xs">Subscription</th>
                    <th style="width: 150px;" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client1</a></td>
                    <td class="hidden-xs">client1@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-warning">Trial</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client2</a></td>
                    <td class="hidden-xs">client2@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client3</a></td>
                    <td class="hidden-xs">client3@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-info">Business</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client4</a></td>
                    <td class="hidden-xs">client4@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-success">VIP</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client5</a></td>
                    <td class="hidden-xs">client5@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client6</a></td>
                    <td class="hidden-xs">client6@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-info">Business</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-center"><img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="img-circle"></td>
                    <td><a href="page_ready_user_profile.php">client7</a></td>
                    <td class="hidden-xs">client7@example.com</td>
                    <td class="hidden-sm hidden-xs"><a href="javascript:void(0)" class="label label-primary">Personal</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Responsive Classes -->
        <p>Below you can find all the available classes you can use to make your tables responsive. These classes also work with most HTML elements, so you can make them visible only on the screens you want, too.</p>
        <div class="table-responsive">
            <table class="table table-borderless table-condensed text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center">
                            Extra small devices<br>
                            <small>Phones (&lt;768px)</small>
                        </th>
                        <th class="text-center">
                            Small devices<br>
                            <small>Tablets (&ge;768px)</small>
                        </th>
                        <th class="text-center">
                            Medium devices<br>
                            <small>Desktops (&ge;992px)</small>
                        </th>
                        <th class="text-center">
                            Large devices<br>
                            <small>Desktops (&ge;1200px)</small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><code>.visible-xs</code></th>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                    </tr>
                    <tr>
                        <th><code>.visible-sm</code></th>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                    </tr>
                    <tr>
                        <th><code>.visible-md</code></th>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                    </tr>
                    <tr>
                        <th><code>.visible-lg</code></th>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th><code>.hidden-xs</code></th>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <th><code>.hidden-sm</code></th>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <th><code>.hidden-md</code></th>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <th><code>.hidden-lg</code></th>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td class="success"><i class="fa fa-check text-success"></i></td>
                        <td><i class="fa fa-times text-danger"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Responsive Classes -->
        <!-- END Responsive Partial Content -->
    </div>
    <!-- END Responsive Partial Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>