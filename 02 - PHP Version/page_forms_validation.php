<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Validation Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-warning_sign"></i>Form Validation<br><small>Tools for easy form validation and user assist!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Forms</li>
        <li><a href="">Validation</a></li>
    </ul>
    <!-- END Validation Header -->

    <div class="row">
        <div class="col-md-6">
            <!-- Form Validation Example Block -->
            <div class="block">
                <!-- Form Validation Example Title -->
                <div class="block-title">
                    <h2><strong>Form Validation</strong> Example</h2>
                </div>
                <!-- END Form Validation Example Title -->

                <!-- Form Validation Example Content -->
                <form id="form-validation" action="page_forms_validation.php" method="post" class="form-horizontal form-bordered">
                    <fieldset>
                        <legend><i class="fa fa-angle-right"></i> Vital Info</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_username">Username <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_username" name="val_username" class="form-control" placeholder="Your username..">
                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_email">Email <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_email" name="val_email" class="form-control" placeholder="test@example.com">
                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_password">Password <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="val_password" name="val_password" class="form-control" placeholder="Choose a crazy one..">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_confirm_password">Confirm Password <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="val_confirm_password" name="val_confirm_password" class="form-control" placeholder="..and confirm it!">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><i class="fa fa-angle-right"></i> Personal</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_bio">Mini Bio <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <textarea id="val_bio" name="val_bio" rows="6" class="form-control" placeholder="Tell us your story.."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_skill">Best Skill <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <select id="val_skill" name="val_skill" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="html">HTML</option>
                                    <option value="css">CSS</option>
                                    <option value="javascript">Javascript</option>
                                    <option value="php">PHP</option>
                                    <option value="mysql">MySQL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_website">Website <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_website" name="val_website" class="form-control" value="http://">
                                    <span class="input-group-addon"><i class="gi gi-globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend><i class="fa fa-angle-right"></i> Extras</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_digits">Digits <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_digits" name="val_digits" class="form-control" placeholder="1">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_number">Number <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_number" name="val_number" class="form-control" placeholder="1.0">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="val_range">Range [1, 1000] <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="val_range" name="val_range" class="form-control" placeholder="100">
                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><a href="#modal-terms" data-toggle="modal">Service Terms</a> <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <label class="switch switch-primary" for="val_terms">
                                    <input type="checkbox" id="val_terms" name="val_terms" value="1">
                                    <span data-toggle="tooltip" title="I agree to the terms!"></span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Form Validation Example Content -->

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
            <!-- END Validation Block -->
        </div>
        <div class="col-md-6">
            <!-- User Assist Block -->
            <div class="block">
                <!-- User Assist Title -->
                <div class="block-title">
                    <h2><strong>User Assist</strong> Elements</h2>
                </div>
                <!-- END User Assist Title -->

                <!-- User Assist Content -->
                <form action="page_forms_validation.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group has-success">
                        <label class="col-md-4 control-label" for="example-text-input4">Success</label>
                        <div class="col-md-6">
                            <input type="text" id="example-text-input4" name="example-text-input4" class="form-control" placeholder="...">
                            <span class="help-block">By using the class <code>.has-success</code></span>
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-4 control-label" for="example-text-input5">Warning</label>
                        <div class="col-md-6">
                            <input type="text" id="example-text-input5" name="example-text-input5" class="form-control" placeholder="...">
                            <span class="help-block">By using the class <code>.has-warning</code></span>
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <label class="col-md-4 control-label" for="example-text-input6">Error</label>
                        <div class="col-md-6">
                            <input type="text" id="example-text-input6" name="example-text-input6" class="form-control" placeholder="...">
                            <span class="help-block">By using the class <code>.has-error</code></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-text-input">Message</label>
                        <div class="col-md-6">
                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Enter username..">
                            <span class="help-block">Please enter your username</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-text-input2">Tooltip</label>
                        <div class="col-md-6">
                            <input type="text" id="example-text-input2" name="example-text-input2" class="form-control" placeholder="Hover me.." data-toggle="tooltip" title="This is a help tooltip!">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-text-input3">Popover</label>
                        <div class="col-md-6">
                            <input type="text" id="example-text-input3" name="example-text-input3" class="form-control" placeholder="Focus me.." data-toggle="popover" data-placement="top" title="Popover Title" data-content="This is a help popover! You can add your requirements in here!">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END User Assist Content -->
            </div>
            <!-- END User Assist Block -->

            <!-- Masked Inputs Block -->
            <div class="block">
                <!-- Masked Inputs Title -->
                <div class="block-title">
                    <h4><strong>Masked</strong> Inputs</h4>
                </div>
                <!-- END Masked Inputs Title -->

                <!-- Masked Inputs Content -->
                <form action="page_forms_validation.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_date">Date</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_date" name="masked_date" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_date2">Date 2</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_date2" name="masked_date2" class="form-control" placeholder="dd-mm-yyyy">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_phone">Phone</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_phone" name="masked_phone" class="form-control" placeholder="(999) 999-9999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_phone_ext">Phone + Ext</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_phone_ext" name="masked_phone_ext" class="form-control" placeholder="(999) 999-9999? x99999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_taxid">Tax ID</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_taxid" name="masked_taxid" class="form-control" placeholder="99-9999999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_ssn">SSN</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_ssn" name="masked_ssn" class="form-control" placeholder="999-99-9999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="masked_pkey">Product Key</label>
                        <div class="col-md-6">
                            <input type="text" id="masked_pkey" name="masked_pkey" class="form-control" placeholder="a*-999-a999">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-ok"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Masked Inputs Content -->
            </div>
            <!-- END Masked Inputs Block -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsValidation.js"></script>
<script>$(function() { FormsValidation.init(); });</script>

<?php include 'inc/template_end.php'; ?>