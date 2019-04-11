<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Typography Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-font"></i>Typography<br><small>Clean looks with many elements to use!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Typography</a></li>
    </ul>
    <!-- END Typography Header -->

    <!-- Alerts Row -->
    <div class="row">
        <div class="col-md-3">
            <!-- Success Alert Block -->
            <div class="block">
                <!-- Success Alert Title -->
                <div class="block-title">
                    <h2><strong>Success</strong> Alert</h2>
                </div>
                <!-- END Success Alert Title -->

                <!-- Success Alert Content -->
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-check-circle"></i> Success</h4> Settings <a href="javascript:void(0)" class="alert-link">updated</a>!
                </div>
                <!-- END Success Alert Content -->
            </div>
            <!-- END Success Alert Block -->
        </div>
        <div class="col-md-3">
            <!-- Info Alert Block -->
            <div class="block">
                <!-- Info Alert Title -->
                <div class="block-title">
                    <h2><strong>Info</strong> Alert</h2>
                </div>
                <!-- END Info Alert Title -->

                <!-- Info Alert Content -->
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-info-circle"></i> Info</h4> Today is a nice <a href="javascript:void(0)" class="alert-link">day</a>!
                </div>
                <!-- END Info Alert Content -->
            </div>
            <!-- END Info Alert Block -->
        </div>
        <div class="col-md-3">
            <!-- Warning Alert Block -->
            <div class="block">
                <!-- Warning Alert Title -->
                <div class="block-title">
                    <h2><strong>Warning</strong> Alert</h2>
                </div>
                <!-- END Warning Alert Title -->

                <!-- Warning Alert Content -->
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-exclamation-circle"></i> Warning</h4>Just to be <a href="javascript:void(0)" class="alert-link">safe</a>!
                </div>
                <!-- END Warning Alert Content -->
            </div>
            <!-- END Warning Alert Block -->
        </div>
        <div class="col-md-3">
            <!-- Danger Alert Block -->
            <div class="block">
                <!-- Danger Alert Title -->
                <div class="block-title">
                    <h2><strong>Danger</strong> Alert</h2>
                </div>
                <!-- END Danger Alert Title -->

                <!-- Danger Alert Content -->
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="fa fa-times-circle"></i> Error</h4> Oh no! Update <a href="javascript:void(0)" class="alert-link">failed</a>!
                </div>
                <!-- END Danger Alert Content -->
            </div>
            <!-- END Danger Alert Block -->
        </div>
    </div>
    <!-- END Alerts Row -->

    <!-- Blockquotes Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Blockquote Left Block -->
            <div class="block">
                <!-- Blockquote Left Title -->
                <div class="block-title">
                    <h4><strong>Left</strong> Blockquote</h4>
                </div>
                <!-- END Blockquote Left Title -->

                <!-- Blockquote Left Content -->
                <div class="clearfix">
                    <blockquote class="pull-left">
                        <p>This is a blockquote with source info</p>
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <!-- END Blockquote Left Content -->
            </div>
            <!-- END Blockquote Left Block -->
        </div>
        <div class="col-md-6">
            <!-- Blockquote Right Block -->
            <div class="block">
                <!-- Blockquote Right Title -->
                <div class="block-title">
                    <h4><strong>Right</strong> Blockquote</h4>
                </div>
                <!-- END Blockquote Right Title -->

                <!-- Blockquote Right Content -->
                <div class="clearfix">
                    <blockquote class="pull-right">
                        <p>This is a blockquote pulled right</p>
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <!-- END Blockquote Right Content -->
            </div>
            <!-- END Blockquote Right Block -->
        </div>
    </div>
    <!-- END Blockquotes Row -->

    <!-- Headings Block -->
    <div class="block full">
        <!-- Headings Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <!-- Changing class functionality is initialized in js/pages/uiTypography.js -->
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-headings-page" data-toggle="tooltip" title="Toggle class">.page-header</a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default toggle-headings-sub" data-toggle="tooltip" title="Toggle class">.sub-header</a>
            </div>
            <h2><strong>Headings</strong></h2>
        </div>
        <!-- END Headings Title -->

        <!-- Headings Content -->
        <div class="row headings-container">
            <div class="col-md-6">
                <h1>h1. Heading</h1>
                <h2>h2. Heading</h2>
                <h3>h3. Heading</h3>
                <h4>h4. Heading</h4>
                <h5>h5. Heading</h5>
                <h6>h6. Heading</h6>
            </div>
            <div class="col-md-6">
                <h1 class="text-success">h1. Heading</h1>
                <h2 class="text-warning">h2. Heading</h2>
                <h3 class="text-danger">h3. Heading</h3>
                <h4 class="text-muted">h4. Heading</h4>
                <h5 class="text-info">h5. Heading</h5>
                <h6 class="text-primary">h6. Heading</h6>
            </div>
        </div>
        <!-- END Headings Content -->
    </div>
    <!-- END Headings Block -->

    <!-- Text Block -->
    <div class="block">
        <!-- Text Title -->
        <div class="block-title">
            <h2><strong>Text</strong></h2>
        </div>
        <!-- END Text Title -->

        <!-- Paragraphs and Links -->
        <h4 class="sub-header">Paragraphs</h4>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Lead paragraph! Summarize your content!</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. <a href="javascript:void(0)">Proin</a> ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula <strong>hendrerit</strong> nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque</p>
            </div>
            <div class="col-md-6">
                <p><em>Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? <strong>Etiam</strong> egestas fringilla enim, id convallis lectus laoreet at. <a href="javascript:void(0)">Fusce</a> purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.</em></p>
                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Maecenas <a href="javascript:void(0)">ultrices</a>, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. <a href="javascript:void(0)">Proin</a> ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <!-- END Paragraphs and Links -->

        <!-- Emphasis and Well -->
        <div class="row">
            <!-- Emphasis Text -->
            <div class="col-md-6">
                <h4 class="sub-header">Emphasis Text</h4>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><code>.text-primary</code></td>
                            <td><a href="javascript:void(0)">Link</a> - <span class="text-primary">Primary Text</span></td>
                        </tr>
                        <tr>
                            <td><code>.text-success</code></td>
                            <td><a href="javascript:void(0)" class="text-success">Link</a> - <span class="text-success">Success Text</span></td>
                        </tr>
                        <tr>
                            <td><code>.text-info</code></td>
                            <td><a href="javascript:void(0)" class="text-info">Link</a> - <span class="text-info">Info Text</span></td>
                        </tr>
                        <tr>
                            <td><code>.text-warning</code></td>
                            <td><a href="javascript:void(0)" class="text-warning">Link</a> - <span class="text-warning">Warning Text</span></td>
                        </tr>
                        <tr>
                            <td><code>.text-danger</code></td>
                            <td><a href="javascript:void(0)" class="text-danger">Link</a> - <span class="text-danger">Danger Text</span></td>
                        </tr>
                        <tr>
                            <td><code>.text-muted</code></td>
                            <td><a href="javascript:void(0)" class="text-muted">Link</a> - <span class="text-muted">Muted Text</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END Emphasis Text -->

            <!-- Well Paragraph -->
            <div class="col-md-6">
                <h4 class="sub-header">Well Paragraph</h4>
                <p class="well well-sm"><strong>Small Well</strong> <code>.well</code> <code>.well-sm</code><br>Gives the paragraph an inset effect!</p>
                <p class="well"><strong>Normal Well</strong> <code>.well</code><br>Gives the paragraph an inset effect!</p>
                <p class="well well-lg"><strong>Large Well</strong> <code>.well</code> <code>.well-lg</code><br>Gives the paragraph an inset effect!</p>
            </div>
            <!-- END Well Paragraph -->
        </div>
        <!-- END Emphasis and Well -->
    </div>
    <!-- END Text Block -->

    <!-- Labels and Badges -->
    <div class="block full">
        <!-- Labels and Badges Title -->
        <div class="block-title">
            <h2><strong>Labels</strong> and <strong>Badges</strong></h2>
        </div>
        <!-- END Labels and Badges Title -->

        <!-- Labels and Badges Content -->
        <h4 class="sub-header">Labels</h4>
        <div class="row">
            <div class="col-sm-4">
                <p>
                    <code>.label</code> <code>.label-default</code>
                </p>
                <p>
                    <span class="label label-default">Default</span>
                    <span class="label label-default"><i class="fa fa-pencil"></i></span>
                    <a href="javascript:void(0)" class="label label-default">Link</a>
                </p>
                <p>
                    <code>.label</code> <code>.label-primary</code>
                </p>
                <p>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-primary"><i class="fa fa-envelope"></i></span>
                    <a href="javascript:void(0)" class="label label-primary">Link</a>
                </p>
            </div>
            <div class="col-sm-4">
                <p>
                    <code>.label</code> <code>.label-info</code>
                </p>
                <p>
                    <span class="label label-info">Info</span>
                    <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                    <a href="javascript:void(0)" class="label label-info">Link</a>
                </p>
                <p>
                    <code>.label</code> <code>.label-success</code>
                </p>
                <p>
                    <span class="label label-success">Success</span>
                    <span class="label label-success"><i class="fa fa-check"></i></span>
                    <a href="javascript:void(0)" class="label label-success">Link</a>
                </p>
            </div>
            <div class="col-sm-4">
                <p>
                    <code>.label</code> <code>.label-warning</code>
                </p>
                <p>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span>
                    <a href="javascript:void(0)" class="label label-warning">Link</a>
                </p>
                <p>
                    <code>.label</code> <code>.label-danger</code>
                </p>
                <p>
                    <span class="label label-danger">Danger</span>
                    <span class="label label-danger"><i class="fa fa-times"></i></span>
                    <a href="javascript:void(0)" class="label label-danger">Link</a>
                </p>
            </div>
        </div>
        <h4 class="sub-header">Badges</h4>
        <p>
            <code>.badge</code>
        </p>
        <p>
            <span class="badge">Badge</span>
            <span class="badge">125</span>
            <span class="badge"><i class="fa fa-archive"></i></span>
        </p>
        <!-- END Labels and Badges Content -->
    </div>
    <!-- END Labels and Badges Block -->

    <!-- Lists Row -->
    <div class="row">
        <div class="col-md-3">
            <!-- Ordered List Block -->
            <div class="block full">
                <!-- Ordered List Title -->
                <div class="block-title">
                    <h2><strong>Ordered</strong> <small><code>&lt;ol&gt;</code></small></h2>
                </div>
                <!-- END Ordered List Title -->

                <!-- Ordered List Content -->
                <ol>
                    <li>First item</li>
                    <li>Second item</li>
                    <li>Third item</li>
                    <li>
                        Sublist
                        <ol>
                            <li>First subitem</li>
                            <li>Second subitem</li>
                            <li>Third subitem</li>
                        </ol>
                    </li>
                    <li>Another item</li>
                </ol>
                <!-- END Ordered List Content -->
            </div>
            <!-- END Ordered List Block -->
        </div>
        <div class="col-md-3">
            <!-- Unordered List Block -->
            <div class="block full">
                <!-- Unordered List Title -->
                <div class="block-title">
                    <h2><strong>Unordered</strong> <small><code>&lt;ul&gt;</code></small></h2>
                </div>
                <!-- END Unordered List Title -->

                <!-- Unordered List Content -->
                <ul>
                    <li>First item</li>
                    <li>Second item</li>
                    <li>Third item</li>
                    <li>
                        Sublist
                        <ul>
                            <li>First subitem</li>
                            <li>Second subitem</li>
                            <li>Third subitem</li>
                        </ul>
                    </li>
                    <li>Another item</li>
                </ul>
                <!-- END Unordered List Content -->
            </div>
            <!-- END Unordered List Block -->
        </div>
        <div class="col-md-3">
            <!-- Icon List Block -->
            <div class="block full">
                <!-- Icon List Title -->
                <div class="block-title">
                    <h2><strong>Icon</strong> <small><code>.fa-ul</code></small></h2>
                </div>
                <!-- END Icon List Title -->

                <!-- Icon List Content -->
                <ul class="fa-ul">
                    <li><i class="fa fa-pencil fa-li"></i>First item</li>
                    <li><i class="fa fa-pencil fa-li text-primary"></i>Second item</li>
                    <li><i class="fa fa-pencil fa-li text-warning"></i>Third item</li>
                    <li>
                        <i class="fa fa-pencil fa-li text-success"></i>Sublist
                        <ul class="fa-ul">
                            <li><i class="fa fa-facebook fa-li text-info"></i>First subitem</li>
                            <li><i class="fa fa-twitter fa-li text-info"></i>Second subitem</li>
                            <li><i class="fa fa-youtube-play fa-li text-danger"></i>Third subitem</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-pencil fa-li text-muted"></i>Another item</li>
                </ul>
                <!-- END Icon List Content -->
            </div>
            <!-- END Icon List Block -->
        </div>
        <div class="col-md-3">
            <!-- Unstyled List Block -->
            <div class="block full">
                <!-- Unstyled List Title -->
                <div class="block-title">
                    <h2><strong>Unstyled</strong> <small><code>.list-unstyled</code></small></h2>
                </div>
                <!-- END Unstyled List Title -->

                <!-- Unstyled List Content -->
                <ul class="list-unstyled">
                    <li>First item</li>
                    <li>Second item</li>
                    <li>Third item</li>
                    <li>
                        Sublist
                        <ul class="list-unstyled">
                            <li>First subitem</li>
                            <li>Second subitem</li>
                            <li>Third subitem</li>
                        </ul>
                    </li>
                    <li>Another item</li>
                </ul>
                <!-- END Unstyled List Content -->
            </div>
            <!-- END Unstyled List Block -->
        </div>
    </div>
    <!-- END Lists Row -->

    <!-- Description Lists -->
    <div class="row">
        <div class="col-md-6">
            <!-- Description List Default Block -->
            <div class="block">
                <!-- Description List Default Title -->
                <div class="block-title">
                    <h2><strong>Default</strong> Description List</h2>
                </div>
                <!-- END Description List Default Title -->

                <!-- Description List Default Content -->
                <dl>
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                </dl>
                <!-- END  Default Content -->
            </div>
            <!-- END Description List Default Block -->
        </div>
        <div class="col-md-6">
            <!-- Description List Horizontal Block -->
            <div class="block">
                <!-- Description List Horizontal Title -->
                <div class="block-title">
                    <h2><strong>Horizontal</strong> Description List</h2>
                </div>
                <!-- END Description List Horizontal Title -->

                <!-- Description List Horizontal Content -->
                <dl class="dl-horizontal">
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                </dl>
                <!-- END Description List Horizontal Content -->
            </div>
            <!-- END Description List Horizontal Block -->
        </div>
    </div>
    <!-- END Description Lists -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/uiTypography.js"></script>
<script>$(function(){ UiTypography.init(); });</script>

<?php include 'inc/template_end.php'; ?>