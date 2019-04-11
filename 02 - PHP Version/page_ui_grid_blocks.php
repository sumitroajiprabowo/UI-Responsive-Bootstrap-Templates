<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Blocks - Grid Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-show_big_thumbnails"></i>Grid &amp; Blocks<br><small>Create your pages using the flexible grid and the blocks!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Grid &amp; Blocks</a></li>
    </ul>
    <!-- END Blocks - Grid Header -->

    <!-- Block -->
    <div class="block">
        <!-- Block Title -->
        <div class="block-title">
            <h2><strong>Example</strong> Title</h2>
        </div>
        <!-- END Block Title -->

        <!-- Block Content -->
        <p>Example content..</p>
        <!-- END Block Content -->
    </div>
    <!-- END Block -->

    <!-- Block with Options Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Block with Options -->
            <div class="block">
                <!-- Block with Options Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Post on Twitter"><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                        <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options"><span class="caret"></span></a>
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
                    <h2><strong>Example</strong> Title</h2>
                </div>
                <!-- END Block with Options Title -->

                <!-- Block with Options Content -->
                <p>You can have a block with options to the top right..</p>
                <!-- END Block with Options Content -->
            </div>
            <!-- END Block with Options -->
        </div>
        <div class="col-md-6">
            <!-- Block with Options Left -->
            <div class="block">
                <!-- Block with Options Left Title -->
                <div class="block-title clearfix">
                    <div class="block-options pull-left">
                        <div class="btn-group btn-group-sm">
                            <a href="javascript:void(0)" class="btn btn-alt btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options"><span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-custom">
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
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Post on Twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                    <h2 class="pull-right"><strong>Example</strong> Title</h2>
                </div>
                <!-- END Block with Options Left Title -->

                <!-- Block with Options Left Content -->
                <p>...or to the top left!</p>
                <!-- END Block with Options Left Content -->
            </div>
            <!-- END Block with Options Left -->
        </div>
    </div>
    <!-- END Block with Options Row -->

    <!-- Interactive Block -->
    <div class="block">
        <!-- Interactive Title -->
        <div class="block-title">
            <!-- Interactive block controls (initialized in js/app.js -> interactiveBlocks()) -->
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-hide"><i class="fa fa-times"></i></a>
            </div>
            <h2><strong>Interactive</strong> Block</h2>
        </div>
        <!-- END Interactive Title -->

        <!-- Interactive Content -->
        <!-- The content you will put inside div.block-content, will be toggled -->
        <div class="block-content">
            <p>You can add controls to a block and make it interactive (test the functionality from the top right block buttons):</p>
            <ul class="fa-ul list-li-push">
                <li><i class="fa fa-li fa-check text-success"></i> Toggle block's content</li>
                <li><i class="fa fa-li fa-check text-success"></i> Toggle it fullscreen</li>
                <li><i class="fa fa-li fa-check text-success"></i> or Hide it!</li>
            </ul>
        </div>
        <p class="text-muted">You can also have content that ignores toggling..</p>
        <!-- END Interactive Content -->
    </div>
    <!-- END Interactive Block -->

    <!-- Grids Content Block -->
    <div class="block">
        <!-- Grids Content Title -->
        <div class="block-title">
            <h2><strong>12 Column</strong> Grids</h2>
        </div>
        <!-- END Grids Content Title -->

        <!-- Grids Content Content -->
        <h4 class="sub-header">Grid <small><code>.col-xs-*</code> (never collapsing)</small></h4>
        <div class="row">
            <div class="col-xs-6">
                <div class="block"><p><code>.col-xs-6</code></p></div>
            </div>
            <div class="col-xs-6">
                <div class="block"><p><code>.col-xs-6</code></p></div>
            </div>
        </div>
        <h4 class="sub-header">Grid <small><code>.col-sm-*</code> (collapsed at 768px)</small></h4>
        <div class="row">
            <div class="col-sm-6">
                <div class="block"><p><code>.col-sm-6</code></p></div>
            </div>
            <div class="col-sm-6">
                <div class="block"><p><code>.col-sm-6</code></p></div>
            </div>
        </div>
        <h4 class="sub-header">Grid <small><code>.col-md-*</code> (collapsed at 992px)</small></h4>
        <div class="row">
            <div class="col-md-6">
                <div class="block"><p><code>.col-md-6</code></p></div>
            </div>
            <div class="col-md-6">
                <div class="block"><p><code>.col-md-6</code></p></div>
            </div>
        </div>
        <h4 class="sub-header">Grid <small><code>.col-lg-*</code> (collapsed at 1200px)</small></h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="block"><p><code>.col-lg-6</code></p></div>
            </div>
            <div class="col-lg-6">
                <div class="block"><p><code>.col-lg-6</code></p></div>
            </div>
        </div>
        <h4 class="sub-header">Example</h4>
        <div class="row">
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-3">
                <div class="block"><p><code>.col-sm-3</code></p></div>
            </div>
            <div class="col-sm-3">
                <div class="block"><p><code>.col-sm-3</code></p></div>
            </div>
            <div class="col-sm-3">
                <div class="block"><p><code>.col-sm-3</code></p></div>
            </div>
            <div class="col-sm-3">
                <div class="block"><p><code>.col-sm-3</code></p></div>
            </div>
            <div class="col-sm-4">
                <div class="block"><p><code>.col-sm-4</code></p></div>
            </div>
            <div class="col-sm-4">
                <div class="block"><p><code>.col-sm-4</code></p></div>
            </div>
            <div class="col-sm-4">
                <div class="block"><p><code>.col-sm-4</code></p></div>
            </div>
            <div class="col-sm-6">
                <div class="block"><p><code>.col-sm-6</code></p></div>
            </div>
            <div class="col-sm-6">
                <div class="block"><p><code>.col-sm-6</code></p></div>
            </div>
            <div class="col-sm-7">
                <div class="block"><p><code>.col-sm-7</code></p></div>
            </div>
            <div class="col-sm-5">
                <div class="block"><p><code>.col-sm-5</code></p></div>
            </div>
            <div class="col-sm-4">
                <div class="block"><p><code>.col-sm-4</code></p></div>
            </div>
            <div class="col-sm-8">
                <div class="block"><p><code>.col-sm-8</code></p></div>
            </div>
            <div class="col-sm-9">
                <div class="block"><p><code>.col-sm-9</code></p></div>
            </div>
            <div class="col-sm-3">
                <div class="block"><p><code>.col-sm-3</code></p></div>
            </div>
            <div class="col-sm-2">
                <div class="block"><p><code>.col-sm-2</code></p></div>
            </div>
            <div class="col-sm-10">
                <div class="block"><p><code>.col-sm-10</code></p></div>
            </div>
        </div>
        <!-- END Grids Content Content -->
    </div>
    <!-- END Grids Content Block -->

    <!-- Paragraphs Block -->
    <div class="block">
        <!-- Paragraphs Title -->
        <div class="block-title">
            <h2><strong>Paragraphs</strong></h2>
        </div>
        <!-- END Paragraphs Title -->

        <!-- Paragraphs Content -->
        <div class="row">
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
            </div>
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat.</p>
            </div>
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
            </div>
        </div>
        <!-- END Paragraphs Content -->
    </div>
    <!-- END Paragraphs Block -->

    <!-- Grid Blocks -->
    <div class="block">
        <!-- Grid Blocks Title -->
        <div class="block-title"><h2><strong>Grid of Blocks</strong> in a Block</h2></div>
        <!-- END Grid Blocks Title -->

        <!-- Grid Blocks Content -->
        <div class="row">
            <div class="col-sm-4">
                <!-- Block 1 -->
                <div class="block">
                    <div class="block-title"><h4>1/3</h4></div>
                    <p>...</p>
                </div>
                <!-- END Block 1 -->
            </div>
            <div class="col-sm-2">
                <!-- Block 2 -->
                <div class="block">
                    <div class="block-title"><h4>1/6</h4></div>
                    <p>...</p>
                </div>
                <!-- END Block 2 -->
            </div>
            <div class="col-sm-6">
                <!-- Block 3 -->
                <div class="block">
                    <div class="block-title"><h4>1/2</h4></div>
                    <p>...</p>
                </div>
                <!-- END Block 3 -->
            </div>
        </div>
        <!-- END Grid Blocks -->
    </div>
    <!-- END Grid Blocks Block -->

    <!-- Blocks in Grid -->
    <div class="row">
        <div class="col-sm-2">
            <div class="block">
                <div class="block-title"><h4>1/6</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block">
                <div class="block-title"><h4>1/6</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block">
                <div class="block-title"><h4>1/6</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block">
                <div class="block-title"><h4>1/6</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block">
                <div class="block-title"><h4>1/6</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block">
                <div class="block-title"><h4>1/6</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-title"><h4>1/3</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-title"><h4>1/3</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-title"><h4>1/3</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-title"><h4>1/2</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="block">
                <div class="block-title"><h4>1/2</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-title"><h4>1/3</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="block">
                <div class="block-title"><h4>2/3</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="block">
                <div class="block-title"><h4>2/3</h4></div>
                <p>...</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block">
                <div class="block-title"><h4>1/3</h4></div>
                <p>...</p>
            </div>
        </div>
    </div>
    <!-- END Blocks in Grid -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>