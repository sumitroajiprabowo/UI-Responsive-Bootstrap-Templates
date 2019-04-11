<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Error Container -->
<div id="error-container">
    <div class="error-options">
        <h3><i class="fa fa-chevron-circle-left text-muted"></i> <a href="page_ready_search_results.php">Go Back</a></h3>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text-center">
            <h1 class="animation-hatch"><i class="fa fa-times text-danger"></i> 403</h1>
            <h2 class="h3">Oops, we are sorry but you do not have permission to access this page..</h2>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <form action="page_ready_search_results.php" method="post">
                <input type="text" id="search-term" name="search-term" class="form-control input-lg" placeholder="Search <?php echo $template['name']; ?>..">
            </form>
        </div>
    </div>
</div>
<!-- END Error Container -->

<?php include 'inc/template_end.php'; ?>