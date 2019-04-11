<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Coming Soon Background -->
<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
<img src="img/placeholders/backgrounds/coming_soon_full_bg.jpg" alt="Coming Soon Background" class="animation-pulseSlow full-bg">
<!-- END Coming Soon Background -->

<!-- Coming Soon -->
<div class="full-page-container text-center">
    <!-- Title -->
    <h1 class="text-light"><i class="gi gi-flash"></i> ProUI</h1>
    <h2 class="h3 text-light">We are working on it and it is coming soon!</h2>
    <!-- END Title -->

    <!-- Countdown -->
    <div class="full-page-section">
        <!-- Countdown.js (class is initialized in js/pages/readyComingSoon.js), for extra usage examples you can check out https://github.com/hilios/jQuery.countdown -->
        <div class="js-countdown"></div>
    </div>
    <!-- END Countdown -->

    <!-- Subscribe Form -->
    <h2 class="h3 text-light push">Subscribe and we will keep you up to date.</h2>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="page_ready_coming_soon.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <input type="email" id="subscribe-email" name="subscribe-email" class="form-control" placeholder="Your Email..">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><strong>Subscribe</strong></button>
                            </div>
                        </div>
                        <small class="text-light"><em>Don't worry, we hate spam.</em></small>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Subscribe Form -->
</div>
<!-- END Coming Soon -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyComingSoon.js"></script>
<script>$(function(){ ComingSoon.init(); });</script>

<?php include 'inc/template_end.php'; ?>