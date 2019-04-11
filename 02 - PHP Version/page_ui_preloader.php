<?php include 'inc/config.php'; $template['page_preloader'] = true; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Page Preloader Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-spinner fa-spin"></i>Page Preloader<br><small>Easily use a page preloader in any page!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Page Preloader</a></li>
    </ul>
    <!-- END Page Preloader Header -->

    <!-- Usage Block -->
    <div class="block">
        <!-- Usage Title -->
        <div class="block-title">
            <h2><strong>Usage</strong> Example</h2>
        </div>
        <!-- END Usage Title -->

        <!-- Usage Content -->
        <div class="alert alert-success">
            <h3><i class="fa fa-check"></i> <strong>Page Preloader</strong> feature is enabled on this page!</h3>
        </div>
        <p>You can easily enable it just by changing a PHP variable in the config file or by adding the class <code>page-loading</code> at the <code>body</code> element. A loading screen will show up and disappear as soon as all page elements have been loaded! Also, its background color will change based on the active color theme ;-)</p>
        <p>
            <button class="btn btn-sm btn-primary" onclick="$('#page-wrapper').addClass('page-loading');setTimeout(function(){$('#page-wrapper').removeClass('page-loading');},3000);$(this).blur();">Preview Loading Screen for 3 seconds!</button>
        </p>
        <!-- END Usage Content -->
    </div>
    <!-- END Usage Block -->

    <!-- Demo Content Block -->
    <div class="block full">
        <!-- Demo Content Title -->
        <div class="block-title">
            <h2><strong>Demo</strong> Content</h2>
        </div>
        <!-- END Demo Content Title -->

        <!-- Demo Content -->
        <div class="row">
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo1.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo2.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo3.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo4.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo5.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo6.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo7.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo8.jpg" alt="image" class="img-responsive center-block">
            </div>
            <div class="col-sm-4 push">
                <img src="img/placeholders/photos/photo9.jpg" alt="image" class="img-responsive center-block">
            </div>
        </div>
        <!-- END Demo Content -->
    </div>
    <!-- END Demo Content Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>