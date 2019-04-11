<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Draggable Blocks Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-move"></i>Draggable Blocks<br><small>Easily make the blocks draggable &amp; sortable</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Draggable Blocks</a></li>
    </ul>
    <!-- END Draggable Blocks Header -->

    <!-- Draggable Blocks Row -->
    <div class="row draggable-blocks">
        <div class="col-sm-4 column">
            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #1</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #4</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #7</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #10</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->
        </div>
        <div class="col-sm-4 column">
            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #2</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #5</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #8</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #11</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->
        </div>
        <div class="col-sm-4 column">
            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #3</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #6</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #9</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->

            <!-- Block -->
            <div class="block">
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Block #12</h2>
                </div>
                <p>...</p>
            </div>
            <!-- END Block -->
        </div>
    </div>
    <!-- END Draggable Blocks Row -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/uiDraggable.js"></script>
<script>$(function(){ UiDraggable.init(); });</script>

<?php include 'inc/template_end.php'; ?>