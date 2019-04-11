<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Bug Tracker Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-bug"></i>Bug Tracker<br><small>Track those little bugs!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Bug Tracker</a></li>
    </ul>
    <!-- END Bug Tracker Header -->

    <!-- Tracker Block -->
    <div class="block">
        <!-- Tracker Title -->
        <div class="block-title clearfix">
            <div class="block-options pull-right">
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options">Sort By <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i>Newest</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Oldest</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Most Commented</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Least Commented</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Recently Updated</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-cog fa-fw pull-right"></i>More Options</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block-options">
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-default">Issues</a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-default">Pull Requests</a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-default">Labels</a>
                </div>
            </div>
        </div>
        <!-- END Tracker Title -->

        <!-- Tracker Content -->
        <div class="block-content-full">
            <!-- Issues -->
            <table class="table table-borderless table-striped table-vcenter">
                <thead>
                    <tr>
                        <td colspan="3">
                            <ul class="list-inline remove-margin">
                                <li>
                                    <i class="fa fa-warning"></i>
                                    <a href="javascript:void(0)" class="text-danger"><strong>130 Open</strong></a>
                                </li>
                                <li>
                                    <i class="fa fa-check"></i>
                                    <a href="javascript:void(0)" class="text-success"><strong>9,585 Closed</strong></a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Fix for modal on mobile</strong>
                            <span class="label label-success">css</span>
                            <div class="text-muted">#96851 opened 11 hours ago by <a href="javascript:void(0)">user215</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 3
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Tab key select radio button in buttons group in form submits no data</strong>
                            <span class="label label-success">css</span>
                            <span class="label label-warning">js</span>
                            <div class="text-muted">#15358 opened 3 days ago by <a href="javascript:void(0)">user219</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 6
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Holder.js causing responsiveness problem on JS docs page docs</strong>
                            <span class="label label-default">docs</span>
                            <div class="text-muted">#25813 opened 7 days ago by <a href="javascript:void(0)">user199</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 9
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Bootstrap 3 not rendering properly arrow of dropdowns in IE9</strong>
                            <span class="label label-success">css</span>
                            <div class="text-muted">#68145 opened 15 days ago by <a href="javascript:void(0)">user159</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 9
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Arrow Keydown event triggers click event for all [role="menu]</strong>
                            <span class="label label-success">js</span>
                            <span class="label label-danger">confirmed</span>
                            <div class="text-muted">#13817 opened 15 days ago by <a href="javascript:void(0)">user692</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 5
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Affix doesn't update in iOS UIWebview js</strong>
                            <span class="label label-warning">js</span>
                            <div class="text-muted">#85152 opened 16 days ago by <a href="javascript:void(0)">user192</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 16
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Affix doesn't update in iOS UIWebview js</strong>
                            <span class="label label-warning">js</span>
                            <div class="text-muted">#85581 opened 19 days ago by <a href="javascript:void(0)">user922</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 7
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Navigation must be cleaned up and changed</strong>
                            <span class="label label-info">html</span>
                            <div class="text-muted">#36821 opened 1 month ago by <a href="javascript:void(0)">user752</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 26
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Modal behind backdrop when parent is position:relative with z-index</strong>
                            <span class="label label-success">css</span>
                            <span class="label label-danger">confirmed</span>
                            <div class="text-muted">#81551 opened 1 month ago by <a href="javascript:void(0)">user052</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 3
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Markup need to be cleaned up</strong>
                            <span class="label label-info">html</span>
                            <div class="text-muted">#13551 opened 1 month ago by <a href="javascript:void(0)">user069</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 13
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Plugin documentation must be update to reflect the latest changes</strong>
                            <span class="label label-default">docs</span>
                            <div class="text-muted">#87512 opened 2 months ago by <a href="javascript:void(0)">user169</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 96
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Modal does not open on Android 4.0.1/Chrome</strong>
                            <span class="label label-warning">js</span>
                            <span class="label label-danger">Confirmed</span>
                            <div class="text-muted">#24987 opened 2 months ago by <a href="javascript:void(0)">user359</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 17
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Inline forms are being displayed incorrectly in IE8</strong>
                            <span class="label label-info">html</span>
                            <div class="text-muted">#17982 opened 2 months ago by <a href="javascript:void(0)">user989</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 31
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>iOS 8.x modal scroll issue</strong>
                            <span class="label label-success">css</span>
                            <span class="label label-danger">Confirmed</span>
                            <div class="text-muted">#16325 opened 2 months ago by <a href="javascript:void(0)">user399</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 1
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Open modal is shifting fixed navbar to the right </strong>
                            <span class="label label-success">css</span>
                            <div class="text-muted">#36987 opened 3 months ago by <a href="javascript:void(0)">user629</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 11
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="text-success">
                                <i class="fa fa-exclamation-circle fa-2x" data-toggle="tooltip" title="View all"></i>
                            </a>
                        </td>
                        <td>
                            <strong>Tooltips auto placement calculates available space wrongly</strong>
                            <span class="label label-warning">js</span>
                            <span class="label label-danger">Confirmed</span>
                            <div class="text-muted">#25874 opened 3 months ago by <a href="javascript:void(0)">user369</a></div>
                        </td>
                        <td class="text-center" style="width: 60px;">
                            <a href="javascript:void(0)" class="btn btn-default">
                                <i class="fa fa-comments"></i> 9
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Issues -->

            <!-- Pagination -->
            <div class="text-center">
                <ul class="pagination pagination-sm">
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">4</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <!-- END Pagination -->
        </div>
        <!-- END Tracker Content -->
    </div>
    <!-- END Tracker Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>