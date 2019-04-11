<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Login Full Background -->
<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
<img src="img/placeholders/backgrounds/lock_full_bg.jpg" alt="Login Full Background" class="full-bg animation-pulseSlow">
<!-- END Login Full Background -->

<!-- Login Container -->
<div id="login-container" class="animation-hatch">
    <!-- Login Title -->
    <div class="login-title text-right">
        <h1 class="text-center">
            <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle push"><br>
            <strong>John</strong> Doe<br>
            <small>j.doe@example.com</small>
        </h1>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block">
        <form action="index.php" method="post" class="form-horizontal push">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <input type="password" id="lock-password" name="lock-password" class="form-control" placeholder="Password">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-unlock-alt"></i> Unlock</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <p class="text-center">
            <a href="login_full.php"><small>Not John Doe?</small></a>
        </p>
    </div>
    <!-- END Login Block -->
</div>
<!-- END Login Container -->

<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>