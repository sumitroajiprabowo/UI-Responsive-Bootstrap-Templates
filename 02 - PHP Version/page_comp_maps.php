<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Maps Header -->
    <!-- For a map header add the class 'content-header-media' and init a map in a div as in the following example -->
    <div class="content-header content-header-media">
        <div class="header-section">
            <h1>
                <i class="gi gi-pin"></i>Maps<br><small>Easy Google Maps Integration!</small>
            </h1>
        </div>
        <!-- Header Map -->
        <!-- Gmaps.js (initialized in js/pages/compMaps.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
        <div id="gmap-top" class="content-header-media-map"></div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Components</li>
        <li><a href="">Maps</a></li>
    </ul>
    <!-- END Maps Header -->

    <!-- Google Maps Content -->
    <!-- First Row -->
    <div class="row">
        <div class="col-sm-6">
            <!-- Satellite Map Block -->
            <div class="block full">
                <!-- Satellite Map Title -->
                <div class="block-title">
                    <h4><strong>Satellite</strong> Map</h4>
                </div>
                <!-- END Satellite Map Title -->

                <!-- Satellite Map Content -->
                <!-- Gmaps.js (initialized in js/pages/compMaps.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
                <div id="gmap-satellite" class="gmap"></div>
                <!-- END Satellite Map Content -->
            </div>
            <!-- END Satellite Map Block -->
        </div>
        <div class="col-sm-6">
            <!-- Terrain Map Block -->
            <div class="block full">
                <!-- Terrain Map Title -->
                <div class="block-title">
                    <h4><strong>Terrain</strong> Map</h4>
                </div>
                <!-- END Terrain Map Title -->

                <!-- Terrain Map Content -->
                <!-- Gmaps.js (initialized in js/pages/compMaps.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
                <div id="gmap-terrain" class="gmap"></div>
                <!-- END Terrain Map Content -->
            </div>
            <!-- END Terrain Map Block -->
        </div>
    </div>
    <!-- END First Row -->

    <!-- Second Row, Map with Markers Block -->
    <div class="block full">
        <!-- Map with Markers Title -->
        <div class="block-title">
            <h4><strong>Markers</strong> Map</h4>
        </div>
        <!-- END Map with Markers Title -->

        <!-- Map with Markers Content -->
        <!-- Gmaps.js (initialized in js/pages/compMaps.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
        <div id="gmap-markers" class="gmap"></div>
        <!-- END Map with Markers Content -->
    </div>
    <!-- END Second Row, Map with Markers Block -->

    <!-- Third Row -->
    <div class="row">
        <!-- Street View -->
        <div class="col-sm-6">
            <!-- Street View Block -->
            <div class="block full">
                <!-- Street View Title -->
                <div class="block-title">
                    <h4><strong>Street View</strong> Map</h4>
                </div>
                <!-- END Street View Title -->

                <!-- Street View Content -->
                <!-- Gmaps.js (initialized in js/pages/compMaps.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
                <div id="gmap-street" class="gmap"></div>
                <!-- END Street View Content -->
            </div>
            <!-- END Street View Block -->
        </div>
        <!-- END Street View -->

        <!-- Geolocation -->
        <div class="col-sm-6">
            <!-- Geolocation Block -->
            <div class="block full">
                <!-- Geolocation Title -->
                <div class="block-title">
                    <h4><strong>Geolocation</strong> Map</h4>
                </div>
                <!-- END Geolocation Title -->

                <!-- Geolocation Content -->
                <!-- Gmaps.js (initialized in js/pages/compMaps.js), for more examples you can check out http://hpneo.github.io/gmaps/examples.html -->
                <div id="gmap-geolocation" class="gmap"></div>
                <!-- END Geolocation Content -->
            </div>
            <!-- END Geolocation Block -->
        </div>
        <!-- END Geolocation -->
    </div>
    <!-- END Third Row -->
    <!-- END Google Maps Content -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps) -->
<!-- For more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="js/helpers/gmaps.min.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compMaps.js"></script>
<script>$(function(){ CompMaps.init(); });</script>

<?php include 'inc/template_end.php'; ?>