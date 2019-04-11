<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Calendar Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-calendar"></i>Calendar<br><small>An awesome calendar for your events!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Components</li>
        <li><a href="">Calendar</a></li>
    </ul>
    <!-- END Calendar Header -->

    <!-- FullCalendar Content -->
    <div class="block block-alt-noborder full">
        <div class="row">
            <div class="col-md-2">
                <div class="block-section">
                    <!-- Add event functionality (initialized in js/pages/compCalendar.js) -->
                    <form>
                        <div class="input-group">
                            <input type="text" id="add-event" name="add-event" class="form-control" placeholder="Add Event">
                            <div class="input-group-btn">
                                <button type="submit" id="add-event-btn" class="btn btn-primary"><i class="gi gi-plus"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="block-section">
                    <div class="block-section text-center text-muted">
                        <small><em><i class="fa fa-arrows"></i> Drag and Drop Events on the Calendar</em></small>
                    </div>
                    <ul class="calendar-events">
                        <li style="background-color: #1abc9c">Work</li>
                        <li style="background-color: #9b59b6">Vacation</li>
                        <li style="background-color: #3498db">Cinema</li>
                        <li style="background-color: #e74c3c">Gym</li>
                        <li style="background-color: #f39c12">Shopping</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <!-- FullCalendar (initialized in js/pages/compCalendar.js), for more info and examples you can check out http://arshaw.com/fullcalendar/ -->
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    <!-- END FullCalendar Block -->
    <!-- END FullCalendar Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compCalendar.js"></script>
<script>$(function(){ CompCalendar.init(); });</script>

<?php include 'inc/template_end.php'; ?>