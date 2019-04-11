<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Wizard Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-magic"></i>Form Wizard<br><small>Break easily your forms into steps!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Forms</li>
        <li><a href="">Wizard</a></li>
    </ul>
    <!-- END Wizard Header -->

    <!-- Progress Bar Wizard Block -->
    <div class="block">
        <!-- Progress Bars Wizard Title -->
        <div class="block-title">
            <h2><strong>Progress Bar</strong> Wizard</h2>
        </div>
        <!-- END Progress Bar Wizard Title -->

        <!-- Progress Bar Wizard Content -->
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="block-section">
                    <h3 class="sub-header text-center"><strong>Sign Up with 3 easy steps!</strong></h3>
                    <p class="clearfix"><i class="fa fa-plus fa-5x text-primary pull-left"></i>Sign up today and receive <span class="text-success"><strong>30% discount</strong></span> on all plans! Our web application will save you time and enable you to work faster and more efficiently.</p>
                    <p>
                        <a href="javascript:void(0)" class="btn btn-lg btn-primary btn-block">Learn More.. <i class="fa fa-arrow-right"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <!-- Wizard Progress Bar, functionality initialized in js/pages/formsWizard.js -->
                <div class="progress progress-striped active">
                    <div id="progress-bar-wizard" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                </div>
                <!-- END Wizard Progress Bar -->

                <!-- Progress Wizard Content -->
                <form id="progress-wizard" action="page_forms_wizard.php" method="post" class="form-horizontal">
                    <!-- First Step -->
                    <div id="progress-first" class="step">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-username">Username</label>
                            <div class="col-md-8">
                                <input type="text" id="example-progress-username" name="example-progress-username" class="form-control" placeholder="Your username..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-email">Email</label>
                            <div class="col-md-8">
                                <input type="text" id="example-progress-email" name="example-progress-email" class="form-control" placeholder="test@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-password">Password</label>
                            <div class="col-md-8">
                                <input type="password" id="example-progress-password" name="example-progress-password" class="form-control" placeholder="Choose a crazy one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-password2">Retype Password</label>
                            <div class="col-md-8">
                                <input type="password" id="example-progress-password2" name="example-progress-password2" class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="progress-second" class="step">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Firstname</label>
                            <div class="col-md-8">
                                <input type="text" id="example-progress-firstname" name="example-progress-firstname" class="form-control" placeholder="John..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-lastname">Lastname</label>
                            <div class="col-md-8">
                                <input type="text" id="example-progress-lastname" name="example-progress-lastname" class="form-control" placeholder="Doe..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-address">Address</label>
                            <div class="col-md-8">
                                <input type="text" id="example-progress-address" name="example-progress-address" class="form-control" placeholder="Where do you live?">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-city">City</label>
                            <div class="col-md-8">
                                <input type="text" id="example-progress-city" name="example-progress-city" class="form-control" placeholder="Which one?">
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Third Step -->
                    <div id="progress-third" class="step">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-bio">Bio</label>
                            <div class="col-md-8">
                                <textarea id="example-progress-bio" name="example-progress-bio" rows="5" class="form-control" placeholder="Tell us your story.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-newsletter">Newsletter</label>
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label for="example-progress-newsletter">
                                        <input type="checkbox" id="example-progress-newsletter" name="example-progress-newsletter"> Sign up
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><a href="#modal-terms" data-toggle="modal">Terms</a></label>
                            <div class="col-md-8">
                                <label class="switch switch-primary" for="example-progress-terms">
                                    <input type="checkbox" id="example-progress-terms" name="example-progress-terms" value="1">
                                    <span data-toggle="tooltip" title="I agree to the terms!"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END Third Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-sm btn-warning" id="back3" value="Back">
                            <input type="submit" class="btn btn-sm btn-primary" id="next3" value="Next">
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Progress Wizard Content -->
            </div>
        </div>
        <!-- END Progress Bar Wizard Content -->
    </div>
    <!-- END Progress Bar Wizard Block -->

    <!-- Wizards Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Basic Wizard Block -->
            <div class="block">
                <!-- Basic Wizard Title -->
                <div class="block-title">
                    <h2><strong>Basic</strong> Wizard</h2>
                </div>
                <!-- END Basic Wizard Title -->

                <!-- Basic Wizard Content -->
                <form id="basic-wizard" action="page_forms_wizard.php" method="post" class="form-horizontal form-bordered">
                    <!-- First Step -->
                    <div id="first" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-4 active">
                                    <span>1. Account</span>
                                </div>
                                <div class="col-xs-4">
                                    <span>2. Personal</span>
                                </div>
                                <div class="col-xs-4">
                                    <span>3. Extras</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-username">Username</label>
                            <div class="col-md-6">
                                <input type="text" id="example-username" name="example-username" class="form-control" placeholder="Your username..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-email">Email</label>
                            <div class="col-md-6">
                                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="test@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-password">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="example-password" name="example-password" class="form-control" placeholder="Choose a crazy one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-password2">Retype Password</label>
                            <div class="col-md-6">
                                <input type="password" id="example-password2" name="example-password2" class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="second" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-4 done">
                                    <span><i class="fa fa-check"></i></span>
                                </div>
                                <div class="col-xs-4 active">
                                    <span>2. Personal</span>
                                </div>
                                <div class="col-xs-4">
                                    <span>3. Extras</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-firstname">Firstname</label>
                            <div class="col-md-6">
                                <input type="text" id="example-firstname" name="example-firstname" class="form-control" placeholder="John..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-lastname">Lastname</label>
                            <div class="col-md-6">
                                <input type="text" id="example-lastname" name="example-lastname" class="form-control" placeholder="Doe..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-address">Address</label>
                            <div class="col-md-6">
                                <input type="text" id="example-address" name="example-address" class="form-control" placeholder="Where do you live?">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-city">City</label>
                            <div class="col-md-6">
                                <input type="text" id="example-city" name="example-city" class="form-control" placeholder="Which one?">
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Third Step -->
                    <div id="third" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-4 done">
                                    <span><i class="fa fa-check"></i></span>
                                </div>
                                <div class="col-xs-4 done">
                                    <span><i class="fa fa-check"></i></span>
                                </div>
                                <div class="col-xs-4 active">
                                    <span>3. Extras</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-bio">Bio</label>
                            <div class="col-md-8">
                                <textarea id="example-bio" name="example-bio" rows="5" class="form-control" placeholder="Tell us your story.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-newsletter">Newsletter</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label for="example-newsletter">
                                        <input type="checkbox" id="example-newsletter" name="example-newsletter"> Sign up
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><a href="#modal-terms" data-toggle="modal">Terms</a></label>
                            <div class="col-md-6">
                                <label class="switch switch-primary" for="example-terms">
                                    <input type="checkbox" id="example-terms" name="example-terms" value="1">
                                    <span data-toggle="tooltip" title="I agree to the terms!"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END Third Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-sm btn-warning" id="back" value="Back">
                            <input type="submit" class="btn btn-sm btn-primary" id="next" value="Next">
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Basic Wizard Content -->
            </div>
            <!-- END Basic Wizard Block -->
        </div>
        <div class="col-md-6">
            <!-- Wizard with Validation Block -->
            <div class="block">
                <!-- Wizard with Validation Title -->
                <div class="block-title">
                    <h2><strong>Validation</strong> Wizard</h2>
                </div>
                <!-- END Wizard with Validation Title -->

                <!-- Wizard with Validation Content -->
                <form id="advanced-wizard" action="page_forms_wizard.php" method="post" class="form-horizontal form-bordered">
                    <!-- First Step -->
                    <div id="advanced-first" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-6 active">
                                    <span>1. Account</span>
                                </div>
                                <div class="col-xs-6">
                                    <span>2. Info</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_username">Username <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_username" name="val_username" class="form-control" placeholder="Your username.." required>
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_email">Email <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_email" name="val_email" class="form-control" placeholder="test@example.com" required>
                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_password">Password <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="val_password" name="val_password" class="form-control" placeholder="Choose a crazy one.." required>
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_confirm_password">Retype Password <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="val_confirm_password" name="val_confirm_password" class="form-control" placeholder="..and confirm it!" required>
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="advanced-second" class="step">
                        <!-- Step Info -->
                        <div class="wizard-steps">
                            <div class="row">
                                <div class="col-xs-6 done">
                                    <span>1. Account</span>
                                </div>
                                <div class="col-xs-6 active">
                                    <span>2. Info</span>
                                </div>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-advanced-bio">Bio</label>
                            <div class="col-md-8">
                                <textarea id="example-advanced-bio" name="example-advanced-bio" rows="6" class="form-control" placeholder="Tell us your story.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-advanced-newsletter">Newsletter</label>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label for="example-advanced-newsletter">
                                        <input type="checkbox" id="example-advanced-newsletter" name="example-advanced-newsletter">  Sign up
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><a href="#modal-terms" data-toggle="modal">Terms</a> <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <label class="switch switch-primary" for="val_terms">
                                    <input type="checkbox" id="val_terms" name="val_terms" value="1">
                                    <span data-toggle="tooltip" title="I agree to the terms!"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-sm btn-warning" id="back2" value="Back">
                            <input type="submit" class="btn btn-sm btn-primary" id="next2" value="Next">
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Wizard with Validation Content -->
            </div>
            <!-- END Wizard with Validation Block -->
        </div>
    </div>
    <!-- END Wizards Row -->

    <!-- Clickable Wizard Block -->
    <div class="block">
        <!-- Clickable Wizard Title -->
        <div class="block-title">
            <h2><strong>Clickable</strong> Wizard</h2>
        </div>
        <!-- END Clickable Wizard Title -->

        <!-- Clickable Wizard Content -->
        <form id="clickable-wizard" action="page_forms_wizard.php" method="post" class="form-horizontal form-bordered">
            <!-- First Step -->
            <div id="clickable-first" class="step">
                <!-- Step Info -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified clickable-steps">
                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-first"><strong>1. Account</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Personal</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Extras</strong></a></li>
                        </ul>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-username">Username</label>
                    <div class="col-md-5">
                        <input type="text" id="example-clickable-username" name="example-clickable-username" class="form-control" placeholder="Your username..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-email">Email</label>
                    <div class="col-md-5">
                        <input type="text" id="example-clickable-email" name="example-clickable-email" class="form-control" placeholder="test@example.com">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-password">Password</label>
                    <div class="col-md-5">
                        <input type="password" id="example-clickable-password" name="example-clickable-password" class="form-control" placeholder="Choose a crazy one..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-password2">Confirm Password</label>
                    <div class="col-md-5">
                        <input type="password" id="example-clickable-password2" name="example-clickable-password2" class="form-control" placeholder="..and confirm it!">
                    </div>
                </div>
            </div>
            <!-- END First Step -->

            <!-- Second Step -->
            <div id="clickable-second" class="step">
                <!-- Step Info -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified clickable-steps">
                            <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Account</strong></a></li>
                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><strong>2. Personal</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Extras</strong></a></li>
                        </ul>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-firstname">Firstname</label>
                    <div class="col-md-5">
                        <input type="text" id="example-clickable-firstname" name="example-clickable-firstname" class="form-control" placeholder="John..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-lastname">Lastname</label>
                    <div class="col-md-5">
                        <input type="text" id="example-clickable-lastname" name="example-clickable-lastname" class="form-control" placeholder="Doe..">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-country">Country</label>
                    <div class="col-md-5">
                        <input type="text" id="example-clickable-country" name="example-clickable-country" class="form-control" placeholder="Where do you live?">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-city">City</label>
                    <div class="col-md-5">
                        <input type="text" id="example-clickable-city" name="example-clickable-city" class="form-control" placeholder="Which one?">
                    </div>
                </div>
            </div>
            <!-- END Second Step -->

            <!-- Third Step -->
            <div id="clickable-third" class="step">
                <!-- Step Info -->
                <div class="form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified clickable-steps">
                            <li><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-check"></i> <strong>1. Account</strong></a></li>
                            <li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-check"></i> <strong>2. Personal</strong></a></li>
                            <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><strong>3. Extras</strong></a></li>
                        </ul>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-bio">Bio</label>
                    <div class="col-md-8">
                        <textarea id="example-clickable-bio" name="example-clickable-bio" rows="6" class="form-control" placeholder="Tell us your story.."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="example-clickable-newsletter">Newsletter</label>
                    <div class="col-md-8">
                        <div class="checkbox">
                            <label for="example-clickable-newsletter">
                                <input type="checkbox" id="example-clickable-newsletter" name="example-clickable-newsletter">  Sign up
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label"><a href="#modal-terms" data-toggle="modal">Terms</a></label>
                    <div class="col-md-8">
                        <label class="switch switch-primary" for="example-clickable-terms">
                            <input type="checkbox" id="example-clickable-terms" name="example-clickable-terms" value="1">
                            <span data-toggle="tooltip" title="I agree to the terms!"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- END Third Step -->

            <!-- Form Buttons -->
            <div class="form-group form-actions">
                <div class="col-md-8 col-md-offset-4">
                    <button type="reset" class="btn btn-sm btn-warning" id="back4">Previous</button>
                    <button type="submit" class="btn btn-sm btn-primary" id="next4">Next</button>
                </div>
            </div>
            <!-- END Form Buttons -->
        </form>
        <!-- END Clickable Wizard Content -->
    </div>
    <!-- END Clickable Wizard Block -->

    <!-- Terms Modal -->
    <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title"><i class="gi gi-pen"></i> Service Terms</h3>
                </div>
                <div class="modal-body">
                    <h4 class="sub-header">1.1 | General</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <h4 class="sub-header">1.2 | Account</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <h4 class="sub-header">1.3 | Service</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <h4 class="sub-header">1.4 | Payments</h4>
                    <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Ok, I've read them!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsWizard.js"></script>
<script>$(function(){ FormsWizard.init(); });</script>

<?php include 'inc/template_end.php'; ?>