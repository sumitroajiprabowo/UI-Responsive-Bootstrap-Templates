<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Form General Elements<br><small>Clean and professional forms for your UI!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Forms</li>
        <li><a href="">General</a></li>
    </ul>
    <!-- END Forms General Header -->

    <div class="row">
        <div class="col-md-6">
            <!-- Basic Form Elements Block -->
            <div class="block">
                <!-- Basic Form Elements Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                    </div>
                    <h2><strong>Basic Form</strong> Elements</h2>
                </div>
                <!-- END Form Elements Title -->

                <!-- Basic Form Elements Content -->
                <form action="page_forms_general.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Static</label>
                        <div class="col-md-9">
                            <p class="form-control-static">Username</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Text Input</label>
                        <div class="col-md-9">
                            <input type="text" id="example-text-input" name="example-text-input" class="form-control" placeholder="Text">
                            <span class="help-block">This is a help text</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email-input">Email Input</label>
                        <div class="col-md-9">
                            <input type="email" id="example-email-input" name="example-email-input" class="form-control" placeholder="Enter Email">
                            <span class="help-block">Please enter your email</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-password-input">Password</label>
                        <div class="col-md-9">
                            <input type="password" id="example-password-input" name="example-password-input" class="form-control" placeholder="Password">
                            <span class="help-block">Please enter a complex password</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-disabled-input">Disabled Input</label>
                        <div class="col-md-9">
                            <input type="text" id="example-disabled-input" name="example-disabled-input" class="form-control" placeholder="Disabled" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-textarea-input">Textarea</label>
                        <div class="col-md-9">
                            <textarea id="example-textarea-input" name="example-textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-select">Select</label>
                        <div class="col-md-9">
                            <select id="example-select" name="example-select" class="form-control" size="1">
                                <option value="0">Please select</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-multiple-select">Multiple select</label>
                        <div class="col-md-9">
                            <select id="example-multiple-select" name="example-multiple-select" class="form-control" size="5" multiple>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                                <option value="4">Option #4</option>
                                <option value="5">Option #5</option>
                                <option value="6">Option #6</option>
                                <option value="7">Option #7</option>
                                <option value="8">Option #8</option>
                                <option value="9">Option #9</option>
                                <option value="10">Option #10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Radios</label>
                        <div class="col-md-9">
                            <div class="radio">
                                <label for="example-radio1">
                                    <input type="radio" id="example-radio1" name="example-radios" value="option1"> Option 1
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio2">
                                    <input type="radio" id="example-radio2" name="example-radios" value="option2"> Option 2
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio3">
                                    <input type="radio" id="example-radio3" name="example-radios" value="option3"> Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Inline Radios</label>
                        <div class="col-md-9">
                            <label class="radio-inline" for="example-inline-radio1">
                                <input type="radio" id="example-inline-radio1" name="example-inline-radios" value="option1"> One
                            </label>
                            <label class="radio-inline" for="example-inline-radio2">
                                <input type="radio" id="example-inline-radio2" name="example-inline-radios" value="option2"> Two
                            </label>
                            <label class="radio-inline" for="example-inline-radio3">
                                <input type="radio" id="example-inline-radio3" name="example-inline-radios" value="option3"> Three
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Checkboxes</label>
                        <div class="col-md-9">
                            <div class="checkbox">
                                <label for="example-checkbox1">
                                    <input type="checkbox" id="example-checkbox1" name="example-checkbox1" value="option1"> Option 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="example-checkbox2">
                                    <input type="checkbox" id="example-checkbox2" name="example-checkbox2" value="option2"> Option 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="example-checkbox3">
                                    <input type="checkbox" id="example-checkbox3" name="example-checkbox3" value="option3"> Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Inline Checkboxes</label>
                        <div class="col-md-9">
                            <label class="checkbox-inline" for="example-inline-checkbox1">
                                <input type="checkbox" id="example-inline-checkbox1" name="example-inline-checkbox1" value="option1"> One
                            </label>
                            <label class="checkbox-inline" for="example-inline-checkbox2">
                                <input type="checkbox" id="example-inline-checkbox2" name="example-inline-checkbox2" value="option2"> Two
                            </label>
                            <label class="checkbox-inline" for="example-inline-checkbox3">
                                <input type="checkbox" id="example-inline-checkbox3" name="example-inline-checkbox3" value="option3"> Three
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-input">File input</label>
                        <div class="col-md-9">
                            <input type="file" id="example-file-input" name="example-file-input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-multiple-input">Multiple File input</label>
                        <div class="col-md-9">
                            <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Basic Form Elements Content -->
            </div>
            <!-- END Basic Form Elements Block -->
        </div>
        <div class="col-md-6">
            <!-- Horizontal Form Block -->
            <div class="block">
                <!-- Horizontal Form Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                    </div>
                    <h2><strong>Horizontal</strong> Form</h2>
                </div>
                <!-- END Horizontal Form Title -->

                <!-- Horizontal Form Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-email">Email</label>
                        <div class="col-md-9">
                            <input type="email" id="example-hf-email" name="example-hf-email" class="form-control" placeholder="Enter Email..">
                            <span class="help-block">Please enter your email</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-hf-password">Password</label>
                        <div class="col-md-9">
                            <input type="password" id="example-hf-password" name="example-hf-password" class="form-control" placeholder="Enter Password..">
                            <span class="help-block">Please enter your password</span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Horizontal Form Content -->
            </div>
            <!-- END Horizontal Form Block -->

            <!-- Normal Form Block -->
            <div class="block">
                <!-- Normal Form Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class">No Borders</a>
                    </div>
                    <h2><strong>Normal</strong> Form</h2>
                </div>
                <!-- END Normal Form Title -->

                <!-- Normal Form Content -->
                <form action="page_forms_general.php" method="post" class="form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label for="example-nf-email">Email</label>
                        <input type="email" id="example-nf-email" name="example-nf-email" class="form-control" placeholder="Enter Email..">
                        <span class="help-block">Please enter your email</span>
                    </div>
                    <div class="form-group">
                        <label for="example-nf-password">Password</label>
                        <input type="password" id="example-nf-password" name="example-nf-password" class="form-control" placeholder="Enter Password..">
                        <span class="help-block">Please enter your password</span>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </form>
                <!-- END Normal Form Content -->
            </div>
            <!-- END Normal Form Block -->

            <!-- Inline Form Block -->
            <div class="block full">
                <!-- Inline Form Title -->
                <div class="block-title">
                    <h2><strong>Inline</strong> Form</h2>
                </div>
                <!-- END Inline Form Title -->

                <!-- Inline Form Content -->
                <form action="page_forms_general.php" method="post" class="form-inline" onsubmit="return false;">
                    <div class="form-group">
                        <label class="sr-only" for="example-if-email">Email</label>
                        <input type="email" id="example-if-email" name="example-if-email" class="form-control" placeholder="Enter Email..">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="example-if-password">Password</label>
                        <input type="password" id="example-if-password" name="example-if-password" class="form-control" placeholder="Enter Password..">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> Login</button>
                        <button type="reset" class="btn btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </form>
                <!-- END Inline Form Content -->
            </div>
            <!-- END Inline Form Block -->

            <!-- Input Sizes Block -->
            <div class="block">
                <!-- Input Sizes Title -->
                <div class="block-title">
                    <h2>Input <strong>Sizes</strong></h2>
                </div>
                <!-- END Input Sizes Title -->

                <!-- Input Sizes Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="example-input-small">Small Input</label>
                        <div class="col-sm-6">
                            <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="example-input-normal">Normal Input</label>
                        <div class="col-sm-6">
                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="example-input-large">Large Input</label>
                        <div class="col-sm-6">
                            <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Grid Inputs</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder=".col-sm-3">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-3">
                            <input type="text" class="form-control" placeholder=".col-sm-5">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-3">
                            <input type="text" class="form-control" placeholder=".col-sm-7">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="text" class="form-control" placeholder=".col-sm-9">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END Input Sizes Content -->
            </div>
            <!-- END Input Sizes Block -->
        </div>
    </div>

    <!-- Input Groups Row -->
    <div class="row">
        <div class="col-sm-4">
            <!-- Input Groups - Icons/Text Block -->
            <div class="block">
                <!-- Input Groups - Icons/Text Title -->
                <div class="block-title">
                    <h2><strong>Icon/Text</strong> Groups</h2>
                </div>
                <!-- END Input Groups - Icons/Text Title -->

                <!-- Input Groups Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-euro"></i></span>
                                <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-sm btn-default">Action</button>
                        </div>
                    </div>
                </form>
                <!-- END Input Groups - Icons/Text Content -->
            </div>
            <!-- END Input Groups - Icons/Text Block -->
        </div>
        <div class="col-sm-4">
            <!-- Input Groups - Buttons Block -->
            <div class="block">
                <!-- Input Groups - Buttons Title -->
                <div class="block-title">
                    <h2><strong>Buttons</strong> Groups</h2>
                </div>
                <!-- END Input Groups - Buttons Title -->

                <!-- Input Groups - Buttons Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                                </span>
                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-facebook"></i></button>
                                </span>
                                <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-twitter"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-sm btn-default">Action</button>
                        </div>
                    </div>
                </form>
                <!-- END Input Groups - Buttons Content -->
            </div>
            <!-- END Input Groups - Buttons Block -->
        </div>
        <div class="col-sm-4">
            <!-- Input Groups - Dropdowns Block -->
            <div class="block">
                <!-- Input Groups - Dropdowns Title -->
                <div class="block-title">
                    <h2><strong>Dropdowns</strong> Groups</h2>
                </div>
                <!-- END Input Groups - Dropdowns Title -->

                <!-- Input Groups - Dropdowns Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                                <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Action</button>
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                                <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0)">Action</a></li>
                                        <li><a href="javascript:void(0)">Another action</a></li>
                                        <li><a href="javascript:void(0)">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-sm btn-default">Action</button>
                        </div>
                    </div>
                </form>
                <!-- END Input Groups - Dropdowns Content -->
            </div>
            <!-- END Input Groups - Dropdowns Block -->
        </div>
    </div>
    <!-- END Input Groups Row -->

    <!-- Input Grid Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Input Grid Block -->
            <div class="block">
                <!-- Input Grid Title -->
                <div class="block-title">
                    <h2>Use the grid for any layout! <small><code>.col-lg-*</code> <code>.col-md-*</code> <code>.col-sm-*</code></small></h2>
                </div>
                <!-- END Input Grid Title -->

                <!-- Input Grid Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered" onsubmit="return false;">
                    <div class="form-group">
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder=".col-md-7">
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder=".col-md-5">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder=".col-md-6">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder=".col-md-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder=".col-md-9">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder=".col-md-8">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder=".col-md-4">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder=".col-md-3">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-sm btn-primary">Action</button>
                            <button type="button" class="btn btn-sm btn-danger">Action</button>
                            <button type="button" class="btn btn-sm btn-warning">Action</button>
                            <button type="button" class="btn btn-sm btn-info">Action</button>
                            <button type="button" class="btn btn-sm btn-success">Action</button>
                        </div>
                    </div>
                </form>
                <!-- END Input Grid Content -->
            </div>
            <!-- END Input Grid Block -->
        </div>
        <div class="col-md-6">
            <!-- Input Grid Block -->
            <div class="block">
                <!-- Input Grid Title -->
                <div class="block-title">
                    <h2>Input Grid for small devices <small>The grid will remain intact <code>.col-xs-*</code></small></h2>
                </div>
                <!-- END Input Grid Title -->

                <!-- Input Grid Content -->
                <form action="page_forms_general.php" method="post" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-xs-7">
                            <input type="text" class="form-control" placeholder=".col-xs-7">
                        </div>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder=".col-xs-5">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input type="text" class="form-control" placeholder=".col-xs-6">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" placeholder=".col-xs-6">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-8">
                            <input type="text" class="form-control" placeholder=".col-xs-8">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" placeholder=".col-xs-4">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-3">
                            <input type="text" class="form-control" placeholder=".col-xs-3">
                        </div>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" placeholder=".col-xs-9">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder=".col-xs-5">
                        </div>
                        <div class="col-xs-7">
                            <input type="text" class="form-control" placeholder=".col-xs-7">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-sm btn-primary">Action</button>
                            <button type="button" class="btn btn-sm btn-danger">Action</button>
                            <button type="button" class="btn btn-sm btn-warning">Action</button>
                            <button type="button" class="btn btn-sm btn-info">Action</button>
                            <button type="button" class="btn btn-sm btn-success">Action</button>
                        </div>
                    </div>
                </form>
                <!-- END Input Grid Content -->
            </div>
            <!-- END Input Grid Block -->
        </div>
    </div>
    <!-- END Input Grid Row -->

    <!-- Form Example with Blocks in the Grid -->
    <div class="row">
        <div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Example Form</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="page_forms_general.php" class="form-bordered" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Username</span>
                            <input type="text" id="example-username3" name="example-username3" class="form-control">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Email</span>
                            <input type="email" id="example-email3" name="example-email3" class="form-control">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Password</span>
                            <input type="password" id="example-password3" name="example-password3" class="form-control">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-lock"></i> Register</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>
        <div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Example Form</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="page_forms_general.php" class="form-bordered" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" id="example-username2" name="example-username2" class="form-control" placeholder="Username">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" id="example-email2" name="example-email2" class="form-control" placeholder="Email">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" id="example-password2" name="example-password2" class="form-control" placeholder="Password">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-success">Register</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>
        <div class="col-sm-4">
            <!-- Example Form Block -->
            <div class="block">
                <!-- Example Form Title -->
                <div class="block-title">
                    <h2>Example Form</h2>
                </div>
                <!-- END Example Form Title -->

                <!-- Example Form Content -->
                <form action="page_forms_general.php" class="form-bordered" method="post" onsubmit="return false;">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            <input type="text" id="example-username" name="example-username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                            <input type="password" id="example-password" name="example-password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-power-off"></i> Register</button>
                    </div>
                </form>
                <!-- END Example Form Content -->
            </div>
            <!-- END Example Form Block -->
        </div>
    </div>
    <!-- END Form Example with Blocks in the Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsGeneral.js"></script>
<script>$(function(){ FormsGeneral.init(); });</script>

<?php include 'inc/template_end.php'; ?>