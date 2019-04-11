<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Navigation - Extras Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-direction"></i>Navigation &amp; More<br><small>Navigation elements, modals, tooltips and more!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Navigation &amp; More</a></li>
    </ul>
    <!-- END Navigation - Extras Header -->

    <!-- Sidebars Control Block -->
    <div class="block">
        <!-- Sidebars Control Title -->
        <div class="block-title">
            <h2>Sidebars Control</h2>
        </div>
        <!-- END Sidebars Control Title -->

        <!-- Sidebars Control Content -->
        <p>You can easily control the sidebars, just by attaching a function to the onclick event of a button or a link. If we hadn't set the main sidebar to be partial by default, it would toggle completely off screen.</p>
        <p class="hidden-xs hidden-sm"><span class="text-danger">Toggle #2:</span> When the sidebar closes, the other one opens - applies to screens larger than 991px</p>
        <div class="row block-section">
            <div class="col-md-6 text-center">
                <h3 class="sub-header">Main Sidebar</h3>
                <button class="btn btn-sm btn-success" onclick="App.sidebar('open-sidebar');">Open</button>
                <button class="btn btn-sm btn-danger" onclick="App.sidebar('close-sidebar');">Close</button>
                <button class="btn btn-sm btn-primary" onclick="App.sidebar('toggle-sidebar');">Toggle #1</button>
                <button class="btn btn-sm btn-info hidden-xs hidden-sm" onclick="App.sidebar('toggle-sidebar', 'toggle-other');">Toggle #2</button>
            </div>
            <div class="col-md-6 text-center">
                <h3 class="sub-header">Alternative Sidebar</h3>
                <button class="btn btn-sm btn-success" onclick="App.sidebar('open-sidebar-alt');">Open</button>
                <button class="btn btn-sm btn-danger" onclick="App.sidebar('close-sidebar-alt');">Close</button>
                <button class="btn btn-sm btn-primary" onclick="App.sidebar('toggle-sidebar-alt');">Toggle #1</button>
                <button class="btn btn-sm btn-info hidden-xs hidden-sm" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">Toggle #2</button>
            </div>
        </div>
        <!-- END Sidebars Control Content -->
    </div>
    <!-- END Sidebars Control Block -->

    <!-- Tooltips, Popovers and Modals Block -->
    <div class="block">
        <!-- Popovers, Tooltips and Modals Title -->
        <div class="block-title">
            <h2>Tooltips, Popovers and Modals</h2>
        </div>
        <!-- END Tooltips, Popovers and Modals Title -->

        <!-- Tooltips, Popovers and Modals Content -->
        <div class="row">
            <div class="col-sm-4">
                <!-- Tooltips, you can also use the class 'enable-tooltip' instead of data-toggle attribute -->
                <div class="block-section text-center">
                    <h4 class="sub-header">Tooltips</h4>
                    <a href="javascript:void(0)" class="btn btn-primary" data-toggle="tooltip" title="General tooltip!">Tooltip</a><br>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top!"><i class="fa fa-chevron-up fa-fw"></i></a><br>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right!"><i class="fa fa-chevron-right fa-fw"></i></a><br>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom!"><i class="fa fa-chevron-down fa-fw"></i></a><br>
                    <a href="javascript:void(0)" class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left!"><i class="fa fa-chevron-left fa-fw"></i></a><br>
                </div>
                <!-- END Tooltips -->
            </div>
            <div class="col-sm-4">
                <!-- Popovers, you can also use the class 'enable-popover' instead of data-toggle attribute -->
                <div class="block-section text-center">
                    <h4 class="sub-header">Popovers</h4>
                    <button class="btn btn-primary" data-toggle="popover" data-content="This is an information popup! Use it easily with the content you want!" title="Title">Popover</button><br>
                    <button class="btn btn-sm btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="top" title="Title"><i class="fa fa-chevron-up fa-fw"></i></button><br>
                    <button class="btn btn-sm btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="right" title="Title"><i class="fa fa-chevron-right fa-fw"></i></button><br>
                    <button class="btn btn-sm btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="bottom" title="Title"><i class="fa fa-chevron-down fa-fw"></i></button><br>
                    <button class="btn btn-sm btn-default" data-toggle="popover" data-content="This is an information popover! Use it easily with the content you want!" data-placement="left" title="Title"><i class="fa fa-chevron-left fa-fw"></i></button>
                </div>
                <!-- END Popovers -->
            </div>
            <div class="col-sm-4">
                <!-- Modals -->
                <!-- For advanced modal usage you can check out http://getbootstrap.com/javascript/#modals -->
                <div class="block-section text-center">
                    <h4 class="sub-header">Modals</h4>
                    <!-- Modal links -->
                    <a href="#modal-regular" class="btn btn-primary" data-toggle="modal">Modal</a><br>
                    <a href="#modal-regular2" class="btn btn-sm btn-default" data-toggle="modal">Fade In</a><br>
                    <a href="#modal-regular3" class="btn btn-sm btn-default" data-toggle="modal">Tabs</a><br>
                    <a href="#modal-small" class="btn btn-sm btn-default" data-toggle="modal">Small</a><br>
                    <a href="#modal-large" class="btn btn-sm btn-default" data-toggle="modal">Large</a>
                </div>
                <!-- END Modals -->

                <!-- Regular Modal -->
                <div id="modal-regular" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title">Modal Title</h3>
                            </div>
                            <div class="modal-body">
                                Modal Content..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->

                <!-- Regular Modal 2 -->
                <div id="modal-regular2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title">Modal Title</h3>
                            </div>
                            <div class="modal-body">
                                Modal Content..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal 2 -->

                <!-- Regular Modal 3 -->
                <div id="modal-regular3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active"><a href="#modal-tabs-profile">Profile</a></li>
                                    <li><a href="#modal-tabs-settings" data-toggle="tooltip" title="Settings"><i class="fa fa-cogs"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="modal-tabs-profile">Profile..</div>
                                    <div class="tab-pane" id="modal-tabs-settings">Settings..</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal 3 -->

                <!-- Small Modal -->
                <div id="modal-small" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title">Modal Title</h3>
                            </div>
                            <div class="modal-body">
                                Modal Content..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Small Modal -->

                <!-- Large Modal -->
                <div id="modal-large" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h3 class="modal-title">Modal Title</h3>
                            </div>
                            <div class="modal-body">
                                Modal Content..
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Large Modal -->
            </div>
        </div>
        <!-- END Tooltips, Popovers and Modals Content -->
    </div>
    <!-- END Tooltips, Popovers and Modals Block -->

    <!-- List Group Block -->
    <div class="block">
        <!-- List Group Title -->
        <div class="block-title">
            <h2>List Group</h2>
        </div>
        <!-- END List Group Title -->

        <!-- List Group Content -->
        <div class="row">
            <div class="col-md-6">
                <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">10</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">9</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">15</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item active">
                        <span class="badge">8</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">99+</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">19</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">1</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">10</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item active">
                        <span class="badge">99+</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">3</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">999+</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item">
                        <span class="badge">22</span>
                        <h4 class="list-group-item-heading">Title</h4>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- END List Group Content -->
    </div>
    <!-- END List Group Block -->

    <!-- Navs Block -->
    <div class="block">
        <!-- Navs Title -->
        <div class="block-title">
            <h2>Navigation Elements</h2>
        </div>
        <!-- END Navs Title -->

        <!-- Navs Content -->
        <div class="row">
            <!-- Tabs -->
            <div class="col-md-4">
                <div class="block-section">
                    <h4 class="sub-header">Tabs <small><code>.nav</code> <code>.nav-tabs</code></small></h4>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="javascript:void(0)">Profile</a></li>
                        <li><a href="javascript:void(0)">Activity</a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-cog"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END Tabs -->

            <!-- Pills -->
            <div class="col-md-4">
                <div class="block-section">
                    <h4 class="sub-header">Pills <small><code>.nav</code> <code>.nav-pills</code></small></h4>
                    <ul class="nav nav-pills">
                        <li class="active"><a href="javascript:void(0)">Profile</a></li>
                        <li><a href="javascript:void(0)">Activity</a></li>
                        <li class="disabled"><a href="javascript:void(0)">Disabled</a></li>
                    </ul>
                </div>
            </div>
            <!-- END Pills -->

            <!-- Stacked Pills -->
            <div class="col-md-4">
                <div class="block-section">
                    <h4 class="sub-header">Stacked Pills <small><code>.nav</code> <code>.nav-pills</code> <code>.nav-stacked</code></small></h4>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="javascript:void(0)"><span class="badge pull-right">10</span>News</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><span class="badge pull-right">9</span>Activity</a>
                        </li>
                        <li class="disabled">
                            <a href="javascript:void(0)"><span class="badge pull-right">0</span>Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Stacked Pills -->
        </div>
        <!-- END Navs Content -->
    </div>
    <!-- END Navs Block -->

    <!-- Working Tabs Block -->
    <div class="block full">
        <!-- Working Tabs Title -->
        <div class="block-title">
            <h2>Working Tabs <small>Block and Simple</small></h2>
        </div>
        <!-- END Working Tabs Title -->

        <!-- Working Tabs Content -->
        <div class="row">
            <div class="col-md-6">
                <!-- Block Tabs -->
                <div class="block full">
                    <!-- Block Tabs Title -->
                    <div class="block-title">
                        <div class="block-options pull-right">
                            <div class="btn-group">
                                <a class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"><i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li>
                                        <a href="javascript:void(0)">Action</a>
                                        <a href="javascript:void(0)">Action 2</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)">Another Action</a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" data-toggle="tabs">
                            <li class="active"><a href="#example-tabs2-activity">Activity</a></li>
                            <li><a href="#example-tabs2-profile">Profile</a></li>
                            <li><a href="#example-tabs2-options" data-toggle="tooltip" title="Settings"><i class="fa fa-cogs"></i></a></li>
                        </ul>
                    </div>
                    <!-- END Block Tabs Title -->

                    <!-- Tabs Content -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="example-tabs2-activity">Block tabs..</div>
                        <div class="tab-pane" id="example-tabs2-profile">Profile..</div>
                        <div class="tab-pane" id="example-tabs2-options">Settings..</div>
                    </div>
                    <!-- END Tabs Content -->
                </div>
                <!-- END Block Tabs -->
            </div>
            <div class="col-md-6">
                <!-- Default Tabs -->
                <ul class="nav nav-tabs push" data-toggle="tabs">
                    <li class="active"><a href="#example-tabs-news">Activity</a></li>
                    <li><a href="#example-tabs-profile">Profile</a></li>
                    <li><a href="#example-tabs-messages" data-toggle="tooltip" title="Messages"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#example-tabs-settings" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="example-tabs-news">News..</div>
                    <div class="tab-pane" id="example-tabs-profile">Profile..</div>
                    <div class="tab-pane" id="example-tabs-messages">Messages..</div>
                    <div class="tab-pane" id="example-tabs-settings">Settings..</div>
                </div>
                <!-- END Default Tabs -->
            </div>
        </div>
        <!-- END Working Tabs Content -->
    </div>
    <!-- END Working Tabs Block -->

    <!-- Breadcrumb Block -->
    <div class="block">
        <!-- Breadcrumb Title -->
        <div class="block-title">
            <h2>Breadcrumb <small>A <code>&lt;ol&gt;</code> list with <code>.breadcrumb</code> class</small></h2>
        </div>
        <!-- END Breadcrumb Title -->

        <!-- Breadcrumb Content -->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)"><i class="fa fa-home"></i></a></li>
            <li><a href="javascript:void(0)">Profile</a></li>
            <li><a href="javascript:void(0)">Settings</a></li>
        </ol>
        <!-- END Breadcrumb Content -->
    </div>
    <!-- END Breadcrumb Block -->

    <!-- Pagination Block -->
    <div class="block">
        <!-- Pagination Title -->
        <div class="block-title">
            <h2>Pagination <small>A <code>&lt;ul&gt;</code> with <code>.pagination</code> class</small></h2>
        </div>
        <!-- END Pagination Title -->

        <!-- Pagination Content -->
        <!-- Default Pagination and States -->
        <div class="row">
            <div class="col-md-6">
                <h4 class="sub-header">Default Pagination</h4>
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="javascript:void(0)">&laquo;</a></li>
                        <li><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="sub-header">Active and Disabled States</h4>
                <div class="text-center">
                    <ul class="pagination">
                        <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                        <li class="active"><a href="javascript:void(0)">1</a></li>
                        <li><a href="javascript:void(0)">2</a></li>
                        <li><a href="javascript:void(0)">3</a></li>
                        <li><a href="javascript:void(0)">4</a></li>
                        <li><a href="javascript:void(0)">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END Default Pagination and States -->

        <!-- Pagination Sizes and Icons -->
        <h4 class="sub-header">Sizes and Icons <small><code>.pagination .pagination-sm</code> <code>.pagination</code> <code>.pagination .pagination-lg</code></small></h4>
        <!-- Pagination Row -->
        <div class="row">
            <div class="col-md-4 text-center">
                <ul class="pagination pagination-sm">
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <ul class="pagination">
                    <li><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <ul class="pagination pagination-lg">
                    <li><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
                    <li><a href="javascript:void(0)">1</a></li>
                    <li class="active"><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- END Pagination Row -->
        <!-- END Pagination Sizes and Icons -->

        <!-- Pagination Alignment -->
        <h4 class="sub-header">Alignments <small>The same as aligning a paragraph (using <code>.text-center</code> or <code>.text-right</code> on pagination's container)</small></h4>
        <div>
            <ul class="pagination">
                <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">4</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <div class="text-center">
            <ul class="pagination">
                <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">4</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <div class="text-right">
            <ul class="pagination">
                <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="javascript:void(0)">1</a></li>
                <li><a href="javascript:void(0)">2</a></li>
                <li><a href="javascript:void(0)">3</a></li>
                <li><a href="javascript:void(0)">4</a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <!-- END Pagination Alignment -->
        <!-- END Pagination Content -->
    </div>
    <!-- END Pagination Block -->

    <!-- Pager Block -->
    <div class="block">
        <!-- Pager Title -->
        <div class="block-title">
            <h2>Pager <small>For simpler navigation</small></h2>
        </div>
        <!-- END Pager Title -->

        <!-- Pager Content -->
        <div class="row">
            <div class="col-md-3">
                <div class="block full">
                    <ul class="pager">
                        <li><a href="javascript:void(0)">Link</a></li>
                        <li><a href="javascript:void(0)">Link</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block full">
                    <ul class="pager">
                        <li class="previous disabled"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i> Prev</a></li>
                        <li class="next"><a href="javascript:void(0)">Next <i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block full">
                    <ul class="pager">
                        <li class="previous"><a href="javascript:void(0)">Prev</a></li>
                        <li class="next disabled"><a href="javascript:void(0)">Next</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="block full">
                    <ul class="pager">
                        <li class="previous"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="next"><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END Pager Content -->
    </div>
    <!-- END Pager Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>