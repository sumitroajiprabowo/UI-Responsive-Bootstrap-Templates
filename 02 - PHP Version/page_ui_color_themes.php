<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Color Themes Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-brush"></i>Color Themes<br><small>Your project is going to be colorful!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>User Interface</li>
        <li><a href="">Color Themes</a></li>
    </ul>
    <!-- END Color Themes Header -->

    <!-- Color Themes Block -->
    <div class="block full">
        <!-- Color Themes Title -->
        <div class="block-title">
            <h2>Customization</h2>
        </div>
        <!-- END Color Themes Title -->

        <!-- Color Themes Content -->
        <p>You can use various color theme classes to alter the text, the border or the background color of an HTML element, no matter what theme you set as active. You can also use some classes that will change the color, the border color or the background color based on your active theme.</p>

        <!-- Color Lists Row -->
        <div class="row push">
            <div class="col-sm-4">
                <h4 class="sub-header">Color Theme Names</h4>
                <ol class="list-li-push">
                    <li class="themed-color-default"><strong>default</strong></li>
                    <li class="themed-color-night"><strong>night</strong></li>
                    <li class="themed-color-amethyst"><strong>amethyst</strong></li>
                    <li class="themed-color-modern"><strong>modern</strong></li>
                    <li class="themed-color-autumn"><strong>autumn</strong></li>
                    <li class="themed-color-flatie"><strong>flatie</strong></li>
                    <li class="themed-color-spring"><strong>spring</strong></li>
                    <li class="themed-color-fancy"><strong>fancy</strong></li>
                    <li class="themed-color-fire"><strong>fire</strong></li>
                    <li class="themed-color-coral"><strong>coral</strong></li>
                    <li class="themed-color-lake"><strong>lake</strong></li>
                    <li class="themed-color-forest"><strong>forest</strong></li>
                    <li class="themed-color-waterlily"><strong>waterlily</strong></li>
                    <li class="themed-color-emerald"><strong>emerald</strong></li>
                    <li class="themed-color-blackberry"><strong>blackberry</strong></li>
                </ol>
            </div>
            <div class="col-sm-8">
                <h4 class="sub-header">Color Theme Classes <small>(<span class="text-danger">*</span> the name of the theme)</small></h4>
                <ul class="list-li-push">
                    <li><code>themed-color</code> - The color of your active theme</li>
                    <li><code>themed-border</code> - The border color of your active theme</li>
                    <li><code>themed-background</code> - The background color of your active theme</li>
                    <li><code>themed-color-dark</code> - The dark color of your active theme</li>
                    <li><code>themed-border-dark</code> - The dark border color of your active theme</li>
                    <li><code>themed-background-dark</code> - The dark background color of your active theme</li>
                    <li><code>themed-color-<span class="text-danger">*</span></code> - The color of a specific theme</li>
                    <li><code>themed-border-<span class="text-danger">*</span></code> - The border color of a specific theme</li>
                    <li><code>themed-background-<span class="text-danger">*</span></code> - The background color of a specific theme</li>
                    <li><code>themed-color-dark-<span class="text-danger">*</span></code> - The dark color of a specific theme</li>
                    <li><code>themed-border-dark-<span class="text-danger">*</span></code> - The dark border color of a specific theme</li>
                    <li><code>themed-background-dark-<span class="text-danger">*</span></code> - The dark background color of a specific theme</li>
                </ul>
            </div>
        </div>
        <!-- END Color Lists Row -->

        <!-- Examples Row -->
        <h4 class="sub-header">Examples</h4>
        <div class="row text-center">
            <div class="col-xs-6 col-sm-3 col-lg-2">
                <div class="test-circle themed-color-dark themed-border themed-background" data-toggle="tooltip" title=".themed-color-dark .themed-border .themed-background">Themed</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-lg-2">
                <div class="test-circle themed-border-dark-night themed-background-night" data-toggle="tooltip" title=".themed-border-dark-night .themed-background-night">Night</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-lg-2">
                <div class="test-circle themed-border-fancy themed-background-fancy" data-toggle="tooltip" title=".themed-border-fancy .themed-background-fancy">Fancy</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-lg-2">
                <div class="test-circle themed-border-fire themed-background-autumn" data-toggle="tooltip" title=".themed-border-fire .themed-background-autumn">Mixed</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-lg-2">
                <div class="test-circle themed-border-spring themed-background-spring" data-toggle="tooltip" title=".themed-border-spring .themed-background-spring">Spring</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-lg-2">
                <div class="test-circle themed-color-dark-flatie themed-border-dark-amethyst themed-background-flatie" data-toggle="tooltip" title=".themed-color-dark-flatie .themed-border-dark-amethyst .themed-background-flatie">Mixed</div>
            </div>
        </div>
        <!-- END Examples Row -->
        <!-- END Color Themes Content -->
    </div>
    <!-- END Color Themes Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>