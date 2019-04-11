<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Contacts Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-parents"></i>Contacts<br><small>Manage all your contacts!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Contacts</a></li>
    </ul>
    <!-- END Contacts Header -->

    <!-- Main Row -->
    <div class="row">
        <div class="col-lg-8">
            <!-- Contacts Block -->
            <div class="block">
                <!-- Contacts Title -->
                <div class="block-title">
                    <div class="block-options text-center">
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">A</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">B</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">C</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">D</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">E</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">F</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">G</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">H</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">I</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">J</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">K</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">L</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">M</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">N</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">O</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">P</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">Q</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">R</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">S</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">T</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">V</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">U</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">W</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">X</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">Y</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default">Z</a>
                    </div>
                </div>
                <!-- END Contacts Title -->

                <!-- Contacts Content -->
                <div class="row style-alt">
                    <?php $contact_cat = array('Trip', 'Friends', 'Family', 'Work'); for ($i = 0; $i < 30; $i++) { ?>
                    <!-- Contact Widget -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="widget">
                            <div class="widget-simple">
                                <a href="page_ready_user_profile.php">
                                    <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="avatar" class="widget-image img-circle pull-left animation-fadeIn">
                                </a>
                                <h4 class="widget-content text-right">
                                    <a href="page_ready_user_profile.php"><strong>Name</strong></a><br>
                                    <span class="btn-group">
                                        <a href="javascript:void(0)" class="btn btn-xs btn-default" data-toggle="tooltip" title="Category"><?php echo $contact_cat[rand(0, 3)]; ?></a>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                    </span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- END Contact Widget -->

                    <?php } ?>
                </div>
                <!-- END Contacts Content -->
            </div>
            <!-- END Contacts Block -->
        </div>
        <div class="col-lg-4">
            <!-- Edit Contact Block -->
            <div class="block">
                <!-- Edit Contact Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-danger enable-tooltip" data-toggle="block-hide" title="Remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h2><i class="fa fa-pencil"></i> John Doe</h2>
                </div>
                <!-- END Edit Contact Title -->

                <!-- Edit Contact Content -->
                <form action="page_ready_contacts.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle">
                        </label>
                        <div class="col-xs-9">
                            <i class="fa fa-fw fa-upload"></i> <a href="javascript:void(0)">Upload New Avatar</a><br>
                            <i class="fa fa-fw fa-picture-o"></i> <a href="javascript:void(0)">Choose from Library</a><br><br>
                            <i class="fa fa-fw fa-times"></i> <a href="javascript:void(0)" class="text-danger">Remove Avatar</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="edit-contact-name">Name</label>
                        <div class="col-xs-9">
                            <input type="text" id="edit-contact-name" name="edit-contact-name" class="form-control" value="John Doe" placeholder="Enter Full Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="edit-contact-email">Email</label>
                        <div class="col-xs-9">
                            <input type="email" id="edit-contact-email" name="edit-contact-email" class="form-control" value="test@example.com" placeholder="Enter Email..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="edit-contact-phone">Phone</label>
                        <div class="col-xs-9">
                            <input type="text" id="edit-contact-phone" name="edit-contact-phone" class="form-control" value="(999) 999-9999" placeholder="(000) 000-0000">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="edit-contact-mobile">Mobile</label>
                        <div class="col-xs-9">
                            <input type="text" id="edit-contact-mobile" name="edit-contact-mobile" class="form-control" placeholder="Enter Mobile Number..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="edit-contact-address">Address</label>
                        <div class="col-xs-9">
                            <input type="text" id="edit-contact-address" name="edit-contact-address" class="form-control" value="Earth" placeholder="Enter Address..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="edit-contact-group">Group</label>
                        <div class="col-xs-9">
                            <input type="text" id="edit-contact-group" name="edit-contact-group" class="input-tags" value="Friends">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-9 col-xs-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Save Changes</button>
                        </div>
                    </div>
                </form>
                <!-- END Edit Contact Content -->
            </div>
            <!-- END Edit Contact Block -->

            <!-- Add Contact Block -->
            <div class="block">
                <!-- Add Contact Title -->
                <div class="block-title">
                    <h2><i class="fa fa-plus"></i> Add Contact</h2>
                </div>
                <!-- END Add Contact Title -->

                <!-- Add Contact Content -->
                <form action="page_ready_contacts.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-xs-3 control-label text-muted">NO AVATAR</label>
                        <div class="col-xs-9">
                            <i class="fa fa-fw fa-upload"></i> <a href="javascript:void(0)">Upload New Avatar</a><br>
                            <i class="fa fa-fw fa-picture-o"></i> <a href="javascript:void(0)">Choose from Library</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-name">Name</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-name" name="add-contact-name" class="form-control" placeholder="Enter Full Name..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-email">Email</label>
                        <div class="col-xs-9">
                            <input type="email" id="add-contact-email" name="add-contact-email" class="form-control" placeholder="Enter Email..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-phone">Phone</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-phone" name="add-contact-phone" class="form-control" placeholder="(000) 000-0000">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-mobile">Mobile</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-mobile" name="add-contact-mobile" class="form-control" placeholder="Enter Mobile Number..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-address">Address</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-address" name="edit-contact-address" class="form-control" placeholder="Enter Address..">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label" for="add-contact-group">Group</label>
                        <div class="col-xs-9">
                            <input type="text" id="add-contact-group" name="add-contact-group" class="input-tags" value="All Contacts">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-9 col-xs-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add Contact</button>
                        </div>
                    </div>
                </form>
                <!-- END Add Contact Content -->
            </div>
            <!-- END Add Contact Block -->
        </div>
    </div>
    <!-- END Main Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>