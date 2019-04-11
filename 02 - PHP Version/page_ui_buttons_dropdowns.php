<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Buttons - Dropdowns Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-sampler"></i>Buttons &amp; Dropdowns<br><small>Various options and easy to use dropdowns!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Buttons &amp; Dropdowns</a></li>
    </ul>
    <!-- END Buttons - Dropdowns Header -->

    <!-- Default Style Block -->
    <div class="block full">
        <!-- Default Style Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-sm btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                <a href="javascript:void(0)" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Please pay attention!"><i class="fa fa-exclamation-triangle"></i></a>
                <a href="javascript:void(0)" class="btn btn-sm btn-success" data-toggle="tooltip" title="Quick settings"><i class="fa fa-cog"></i></a>
                <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-sm btn-info dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options"><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)"><i class="gi gi-cloud pull-right"></i>Simple Action</a>
                            <a href="javascript:void(0)"><i class="gi gi-airplane pull-right"></i>Another Action</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-wrench fa-fw pull-right"></i>Separated Action</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2><strong>Default</strong></h2>
        </div>
        <!-- END Default Style Title -->

        <!-- Default Style Content -->
        <div class="row">
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Extra Small</h4>
                    <button type="button" class="btn btn-xs btn-default">Default</button>
                    <button type="button" class="btn btn-xs btn-primary">Primary</button>
                    <button type="button" class="btn btn-xs btn-info">Info</button>
                    <button type="button" class="btn btn-xs btn-success">Success</button>
                    <button type="button" class="btn btn-xs btn-warning">Warning</button>
                    <button type="button" class="btn btn-xs btn-danger">Danger</button>
                    <button type="button" class="btn btn-xs btn-link">Link</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Small</h4>
                    <button type="button" class="btn btn-sm btn-default">Default</button>
                    <button type="button" class="btn btn-sm btn-primary">Primary</button>
                    <button type="button" class="btn btn-sm btn-info">Info</button>
                    <button type="button" class="btn btn-sm btn-success">Success</button>
                    <button type="button" class="btn btn-sm btn-warning">Warning</button>
                    <button type="button" class="btn btn-sm btn-danger">Danger</button>
                    <button type="button" class="btn btn-sm btn-link">Link</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Normal</h4>
                    <button type="button" class="btn btn-default">Default</button>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-link">Link</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Large</h4>
                    <button type="button" class="btn btn-lg btn-default">Default</button>
                    <button type="button" class="btn btn-lg btn-primary">Primary</button>
                    <button type="button" class="btn btn-lg btn-info">Info</button>
                    <button type="button" class="btn btn-lg btn-success">Success</button>
                    <button type="button" class="btn btn-lg btn-warning">Warning</button>
                    <button type="button" class="btn btn-lg btn-danger">Danger</button>
                    <button type="button" class="btn btn-lg btn-link">Link</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Disabled</h4>
                    <button type="button" class="btn btn-default disabled">Default</button>
                    <button type="button" class="btn btn-primary disabled">Primary</button>
                    <button type="button" class="btn btn-info disabled">Info</button>
                    <button type="button" class="btn btn-success disabled">Success</button>
                    <button type="button" class="btn btn-warning disabled">Warning</button>
                    <button type="button" class="btn btn-danger disabled">Danger</button>
                    <button type="button" class="btn btn-link disabled">Link</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Block</h4>
                    <button type="button" class="btn btn-block btn-primary">Primary</button>
                </div>
            </div>
        </div>
        <!-- END Default Style Content -->
    </div>
    <!-- END Default Style Block -->

    <!-- Buttons Alternative Style Block -->
    <div class="block">
        <!-- Buttons Alternative Style Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="tooltip" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-warning" data-toggle="tooltip" title="Please pay attention!"><i class="fa fa-exclamation-triangle"></i></a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-success" data-toggle="tooltip" title="Quick settings"><i class="fa fa-cog"></i></a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-info dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options"><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)"><i class="gi gi-cloud pull-right"></i>Simple Action</a>
                            <a href="javascript:void(0)"><i class="gi gi-airplane pull-right"></i>Another Action</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-wrench fa-fw pull-right"></i>Separated Action</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2><strong>Alternative</strong></h2>
        </div>
        <!-- END Buttons Alternative Style Title -->

        <!-- Buttons Alternative Style Content -->
        <div class="row">
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Extra Small</h4>
                    <button type="button" class="btn btn-alt btn-xs btn-default">Default</button>
                    <button type="button" class="btn btn-alt btn-xs btn-primary">Primary</button>
                    <button type="button" class="btn btn-alt btn-xs btn-info">Info</button>
                    <button type="button" class="btn btn-alt btn-xs btn-success">Success</button>
                    <button type="button" class="btn btn-alt btn-xs btn-warning">Warning</button>
                    <button type="button" class="btn btn-alt btn-xs btn-danger">Danger</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Small</h4>
                    <button type="button" class="btn btn-alt btn-sm btn-default">Default</button>
                    <button type="button" class="btn btn-alt btn-sm btn-primary">Primary</button>
                    <button type="button" class="btn btn-alt btn-sm btn-info">Info</button>
                    <button type="button" class="btn btn-alt btn-sm btn-success">Success</button>
                    <button type="button" class="btn btn-alt btn-sm btn-warning">Warning</button>
                    <button type="button" class="btn btn-alt btn-sm btn-danger">Danger</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Normal</h4>
                    <button type="button" class="btn btn-alt btn-default">Default</button>
                    <button type="button" class="btn btn-alt btn-primary">Primary</button>
                    <button type="button" class="btn btn-alt btn-info">Info</button>
                    <button type="button" class="btn btn-alt btn-success">Success</button>
                    <button type="button" class="btn btn-alt btn-warning">Warning</button>
                    <button type="button" class="btn btn-alt btn-danger">Danger</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-section">
                    <h4 class="sub-header">Large</h4>
                    <button type="button" class="btn btn-alt btn-lg btn-default">Default</button>
                    <button type="button" class="btn btn-alt btn-lg btn-primary">Primary</button>
                    <button type="button" class="btn btn-alt btn-lg btn-info">Info</button>
                    <button type="button" class="btn btn-alt btn-lg btn-success">Success</button>
                    <button type="button" class="btn btn-alt btn-lg btn-warning">Warning</button>
                    <button type="button" class="btn btn-alt btn-lg btn-danger">Danger</button>
                </div>
            </div>
        </div>
        <!-- END Buttons Alternative Style Content -->
    </div>
    <!-- END Buttons Alternative Style Block -->

    <!-- Buttons and Icons Block -->
    <div class="block">
        <!-- Buttons and Icons Title -->
        <div class="block-title">
            <h2>With <strong>Icons</strong></h2>
        </div>
        <!-- END Buttons and Icons Title -->

        <!-- Buttons and Icons Content -->
        <div class="row">
            <div class="col-sm-2">
                <div class="block-section text-center">
                    <button class="btn btn-xs btn-primary"><i class="gi gi-adjust"></i></button><br>
                    <button class="btn btn-sm btn-primary"><i class="gi gi-adjust"></i></button><br>
                    <button class="btn btn-primary"><i class="gi gi-adjust"></i></button><br>
                    <button class="btn btn-lg btn-primary"><i class="gi gi-adjust"></i></button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="block-section text-center">
                    <button class="btn btn-xs btn-info"><i class="fa fa-twitter"></i> Tweet</button><br>
                    <button class="btn btn-sm btn-info"><i class="fa fa-twitter"></i> Tweet</button><br>
                    <button class="btn btn-info"><i class="fa fa-twitter"></i> Tweet</button><br>
                    <button class="btn btn-lg btn-info"><i class="fa fa-twitter"></i> Tweet</button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="block-section text-center">
                    <button class="btn btn-xs btn-success"><i class="fa fa-plus"></i> New</button><br>
                    <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> New</button><br>
                    <button class="btn btn-success"><i class="fa fa-plus"></i> New</button><br>
                    <button class="btn btn-lg btn-success"><i class="fa fa-plus"></i> New</button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="block-section text-center">
                    <button class="btn btn-xs btn-warning"><i class="fa fa-exclamation-triangle"></i></button><br>
                    <button class="btn btn-sm btn-warning"><i class="fa fa-exclamation-triangle"></i></button><br>
                    <button class="btn btn-warning"><i class="fa fa-exclamation-triangle"></i></button><br>
                    <button class="btn btn-lg btn-warning"><i class="fa fa-exclamation-triangle"></i></button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="block-section text-center">
                    <button class="btn btn-xs btn-danger">Error <i class="fa fa-times"></i></button><br>
                    <button class="btn btn-sm btn-danger">Error <i class="fa fa-times"></i></button><br>
                    <button class="btn btn-danger">Error <i class="fa fa-times"></i></button><br>
                    <button class="btn btn-lg btn-danger">Error <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="block-section text-center">
                    <button class="btn btn-xs btn-default"><i class="fa fa-wrench"></i> Settings</button><br>
                    <button class="btn btn-sm btn-default"><i class="fa fa-wrench"></i> Settings</button><br>
                    <button class="btn btn-default"><i class="fa fa-wrench"></i> Settings</button><br>
                    <button class="btn btn-lg btn-default"><i class="fa fa-wrench"></i> Settings</button>
                </div>
            </div>
        </div>
        <!-- END Buttons and Icons Content -->
    </div>
    <!-- END Buttons and Icons Block -->

    <!-- Toolbars Block -->
    <div class="block full">
        <!-- Toolbars Title -->
        <div class="block-title">
            <h2><strong>Toolbars</strong></h2>
        </div>
        <!-- END Toolbars Title -->

        <!-- Toolbars Content -->
        <div class="row">
            <div class="col-md-6">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-file"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-scissors"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-files-o"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-clipboard"></i></button>
                    </div>
                    <div class="btn-group" data-toggle="buttons">
                        <button class="btn btn-primary"><i class="fa fa-bold"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-italic"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-underline"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-strikethrough"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="btn-toolbar">
                    <div class="btn-group">
                        <button class="btn btn-danger"><i class="fa fa-align-left"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-align-center"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-align-right"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-warning"><i class="fa fa-outdent"></i></button>
                        <button class="btn btn-warning"><i class="fa fa-indent"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-info"><i class="fa fa-list-ul"></i></button>
                        <button class="btn btn-info"><i class="fa fa-list-ol"></i></button>
                        <button class="btn btn-info"><i class="fa fa-table"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-custom">
                            <li>
                                <a href="javascript:void(0)">Action 1</a>
                                <a href="javascript:void(0)">Action 2</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)">Another Action</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Toolbars Content -->
    </div>
    <!-- END Toolbars Block -->

    <!-- Button Groups and Dropdowns Block -->
    <div class="block">
        <!-- Button Groups and Dropdowns Title -->
        <div class="block-title">
            <h2><strong>Button Groups</strong> and <strong>Dropdowns</strong></h2>
        </div>
        <!-- END Button Groups and Dropdowns Title -->

        <!-- Buttons Groups and Dropdowns Content -->
        <!-- Button Groups and Dropdowns -->
        <div class="block-section">
            <h4 class="sub-header">Button Groups and Dropdowns</h4>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-alt btn-primary dropdown-toggle">Alternative <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-custom text-left">
                            <li class="dropdown-header">Header</li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-plus pull-right"></i>Action</a>
                                <a href="javascript:void(0)"><i class="fa fa-video-camera pull-right"></i>Another Action</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-pencil pull-right"></i>Edit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu text-left">
                            <li class="dropdown-header">Header</li>
                            <li><a href="javascript:void(0)">Action</a></li>
                            <li><a href="javascript:void(0)">Another Action</a></li>
                            <li class="divider"></li>
                            <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="btn-group dropup text-left">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-alt btn-success dropdown-toggle">Alternative <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-custom">
                            <li class="dropdown-header">Header</li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-plus pull-right"></i>Action</a>
                                <a href="javascript:void(0)"><i class="fa fa-video-camera pull-right"></i>Another Action</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-pencil pull-right"></i>Edit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group dropup text-left">
                        <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Dropup <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Header</li>
                            <li><a href="javascript:void(0)">Action</a></li>
                            <li><a href="javascript:void(0)">Another Action</a></li>
                            <li class="divider"></li>
                            <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="btn-group">
                        <div class="btn-group">
                            <a href="javascript:void(0)" data-toggle="dropdown" class="btn btn-alt btn-danger dropdown-toggle"><span class="caret"></span></a>
                            <ul class="dropdown-menu text-left">
                                <li class="dropdown-header">Header</li>
                                <li><a href="javascript:void(0)">Action</a></li>
                                <li><a href="javascript:void(0)">Another Action</a></li>
                                <li class="divider"></li>
                                <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
                            </ul>
                        </div>
                        <a class="btn btn-alt btn-danger"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-alt btn-danger">Split</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Button Groups and Dropdowns -->

        <!-- Button Groups -->
        <div class="block-section">
            <h4 class="sub-header">Button Groups</h4>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="btn-group btn-group-xs" data-toggle="buttons">
                        <button class="btn btn-default">Left</button>
                        <button class="btn btn-default">Middle</button>
                        <button class="btn btn-default">Right</button>
                    </div><br>
                    <div class="btn-group btn-group-xs" data-toggle="buttons">
                        <button class="btn btn-alt btn-default">Left</button>
                        <button class="btn btn-alt btn-default">Middle</button>
                        <button class="btn btn-alt btn-default">Right</button>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-success"><i class="fa fa-play"></i></button>
                        <button class="btn btn-warning"><i class="fa fa-pause"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-stop"></i></button>
                    </div><br>
                    <div class="btn-group btn-group-sm">
                        <button class="btn btn-alt btn-success"><i class="fa fa-play"></i></button>
                        <button class="btn btn-alt btn-warning"><i class="fa fa-pause"></i></button>
                        <button class="btn btn-alt btn-danger"><i class="fa fa-stop"></i></button>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="btn-group">
                        <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Left</button>
                        <button class="btn btn-primary">Middle</button>
                        <button class="btn btn-primary">Right <i class="fa fa-arrow-right"></i></button>
                    </div><br>
                    <div class="btn-group">
                        <button class="btn btn-alt btn-primary"><i class="fa fa-arrow-left"></i> Left</button>
                        <button class="btn btn-alt btn-primary">Middle</button>
                        <button class="btn btn-alt btn-primary">Right <i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="btn-group btn-group-lg">
                        <button class="btn btn-info"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-info"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info"><i class="fa fa-files-o"></i></button>
                    </div><br>
                    <div class="btn-group btn-group-lg">
                        <button class="btn btn-alt btn-info"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-alt btn-info"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-alt btn-info"><i class="fa fa-files-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Button Groups -->

        <!-- Vertical Button Groups -->
        <div class="block-section">
            <h4 class="sub-header">Vertical Button Groups</h4>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="btn-group-vertical btn-group-xs" data-toggle="buttons">
                        <button class="btn btn-default">Top</button>
                        <button class="btn btn-default">Middle</button>
                        <button class="btn btn-default">Down</button>
                    </div>
                    <div class="btn-group-vertical btn-group-xs" data-toggle="buttons">
                        <button class="btn btn-alt btn-alt btn-default">Top</button>
                        <button class="btn btn-alt btn-default">Middle</button>
                        <button class="btn btn-alt btn-default">Down</button>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="btn-group-vertical btn-group-sm">
                        <button class="btn btn-success"><i class="fa fa-play"></i></button>
                        <button class="btn btn-warning"><i class="fa fa-pause"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-stop"></i></button>
                    </div>
                    <div class="btn-group-vertical btn-group-sm">
                        <button class="btn btn-alt btn-success"><i class="fa fa-play"></i></button>
                        <button class="btn btn-alt btn-warning"><i class="fa fa-pause"></i></button>
                        <button class="btn btn-alt btn-danger"><i class="fa fa-stop"></i></button>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="btn-group-vertical">
                        <button class="btn btn-primary"><i class="fa fa-chevron-up fa-fw"></i> Top</button>
                        <button class="btn btn-primary">Middle</button>
                        <button class="btn btn-primary"><i class="fa fa-chevron-down fa-fw"></i> Down</button>
                    </div>
                    <div class="btn-group-vertical">
                        <button class="btn btn-alt btn-primary"><i class="fa fa-chevron-up fa-fw"></i> Top</button>
                        <button class="btn btn-alt btn-primary">Middle</button>
                        <button class="btn btn-alt btn-primary"><i class="fa fa-chevron-down fa-fw"></i> Down</button>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="btn-group-vertical btn-group-lg">
                        <button class="btn btn-info"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-info"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-info"><i class="fa fa-files-o"></i></button>
                    </div>
                    <div class="btn-group-vertical btn-group-lg">
                        <button class="btn btn-alt btn-info"><i class="fa fa-plus"></i></button>
                        <button class="btn btn-alt btn-info"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-alt btn-info"><i class="fa fa-files-o"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Vertical Button Groups -->
        <!-- END Button Groups and Dropdowns Content -->
    </div>
    <!-- END Button Groups and Dropdowns Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>