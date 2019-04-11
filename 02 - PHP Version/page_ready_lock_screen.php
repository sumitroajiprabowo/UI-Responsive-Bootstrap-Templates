<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Login Background -->
<div id="login-background">
    <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
    <img src="img/placeholders/headers/lock_header.jpg" alt="Lock Background" class="animation-pulseSlow">
</div>
<!-- END Login Background -->

<!-- Login Container -->
<div id="login-container" class="animation-slideDown">
    <!-- Login Title -->
    <div class="login-title text-right">
        <h1>
            <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar" class="img-circle pull-left">
            <strong>John</strong> Doe<br>
            <small>
                <a href="page_ready_user_profile.php" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="fa fa-user"></i></a>
                <a href="javascript:void(0)" class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="bottom" title="Settings"><i class="fa fa-cog"></i></a>
                <a href="page_ready_inbox.php" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="bottom" title="5 New Messages"><i class="fa fa-envelope"></i> 5</a>
            </small>
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
            <a href="login.php"><small>Not John Doe?</small></a>
        </p>
    </div>
    <!-- END Login Block -->
</div>
<!-- END Login Container -->

<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>