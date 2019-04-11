<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Gallery Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-picture-o"></i>Gallery<br><small>Create the gallery you want!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Components</li>
        <li><a href="">Gallery</a></li>
    </ul>
    <!-- END Gallery Header -->

    <!-- Lightbox functionality is based on Magnific Popup plugin (initialized in js/app.js -> uiInit()) -->

    <!-- Single Image Block -->
    <div class="block">
        <!-- Single Image Title -->
        <div class="block-title">
            <h2><strong>Single</strong> Image</h2>
        </div>
        <!-- END Single Image Title -->

        <!-- Single Image Content -->
        <div class="row">
            <div class="col-sm-4 block-section text-center">
                <h4 class="sub-header">Image</h4>
                <img src="img/placeholders/photos/photo3.jpg" class="img-responsive" alt="image">
            </div>
            <div class="col-sm-4 block-section text-center">
                <h4 class="sub-header">Image with Lightbox</h4>
                <!-- Just wrap your image with a link to your large image and the attribute data-toggle="lightbox-image" -->
                <a href="img/placeholders/photos/photo5.jpg" data-toggle="lightbox-image">
                    <img src="img/placeholders/photos/photo5.jpg" alt="image">
                </a>
            </div>
            <div class="col-sm-4 block-section text-center">
                <h4 class="sub-header">Image with Options</h4>
                <!-- Just wrap your image with a div.gallery-image and.. -->
                <div class="gallery-image">
                    <!-- .. add your image.. -->
                    <img src="img/placeholders/photos/photo9.jpg" alt="image">
                    <!-- .. along with a div.gallery-image-options which will contain your hover links! -->
                    <div class="gallery-image-options">
                        <!-- Link to your large image with the attribute data-toggle="lightbox-image" -->
                        <a href="img/placeholders/photos/photo9.jpg" data-toggle="lightbox-image" title="This is some info text about the image" class="gallery-link btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-primary" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Single Image Content -->
    </div>
    <!-- END Single Image Block -->

    <!-- Galleries Row -->
    <div class="row">
        <div class="col-md-6">
            <!-- Lightbox Gallery Block -->
            <div class="block">
                <!-- Lightbox Gallery Title -->
                <div class="block-title">
                    <h2><strong>Lightbox Gallery</strong></h2>
                </div>
                <!-- END Lightbox Gallery Title -->

                <!-- Lightbox Gallery Content -->
                <!--
                Just create a div with the class .gallery and put the images any way you like in grid.
                If you would like to enable the lightbox gallery, just add the attribute data-toggle="lightbox-image" to the div. If you do that
                make sure that you put your images inside links with the class .gallery-link and the source of your large image as the value of each href attribute!
                -->
                <div class="gallery" data-toggle="lightbox-gallery">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo1.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo1.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo2.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo2.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo3.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo3.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo4.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo4.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo5.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo5.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo6.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo6.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo7.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo7.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo8.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo8.jpg" alt="image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="img/placeholders/photos/photo9.jpg" class="gallery-link" title="Image Info">
                                <img src="img/placeholders/photos/photo9.jpg" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Lightbox Gallery Content -->
            </div>
            <!-- END Lightbox Gallery Block -->
        </div>
        <div class="col-md-6">
            <!-- Lightbox Gallery with Options Block -->
            <div class="block">
                <!-- Lightbox Gallery with Options Title -->
                <div class="block-title">
                    <h2><strong>Lightbox Gallery</strong> with Hover Options</h2>
                </div>
                <!-- END Lightbox Gallery with Options Title -->

                <!-- Lightbox Gallery with Options Content -->
                <div class="gallery" data-toggle="lightbox-gallery">
                    <div class="row">
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo10.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo10.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo11.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo11.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo12.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo12.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo13.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo13.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo14.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo14.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo15.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo15.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo16.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo16.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo17.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo17.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 gallery-image">
                            <img src="img/placeholders/photos/photo18.jpg" alt="image">
                            <div class="gallery-image-options text-center">
                                <div class="btn-group btn-group-sm">
                                    <a href="img/placeholders/photos/photo18.jpg" class="gallery-link btn btn-sm btn-alt btn-default" title="Image Info">View</a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Lightbox Gallery with Options Content -->
            </div>
            <!-- END Lightbox Gallery with Options Block -->
        </div>
    </div>
    <!-- END Galleries Row -->

    <!-- Grid Gallery Block -->
    <div class="block">
        <!-- Grid Gallery Title -->
        <div class="block-title">
            <h2><strong>Awesome Galleries</strong> using the Grid</h2>
        </div>
        <!-- END Grid Gallery Title -->

        <!-- Grid Gallery Content -->
        <div class="gallery">
            <div class="row">
                <div class="col-sm-3">
                    <img src="img/placeholders/photos/photo13.jpg" alt="image">
                </div>
                <div class="col-sm-3">
                    <img src="img/placeholders/photos/photo14.jpg" alt="image">
                </div>
                <div class="col-sm-3">
                    <img src="img/placeholders/photos/photo3.jpg" alt="image">
                </div>
                <div class="col-sm-3">
                    <img src="img/placeholders/photos/photo5.jpg" alt="image">
                </div>
                <div class="col-sm-4">
                    <img src="img/placeholders/photos/photo10.jpg" alt="image">
                </div>
                <div class="col-sm-4">
                    <img src="img/placeholders/photos/photo15.jpg" alt="image">
                </div>
                <div class="col-sm-4">
                    <img src="img/placeholders/photos/photo2.jpg" alt="image">
                </div>
                <div class="col-sm-2">
                    <img src="img/placeholders/photos/photo19.jpg" alt="image">
                </div>
                <div class="col-sm-2">
                    <img src="img/placeholders/photos/photo20.jpg" alt="image">
                </div>
                <div class="col-sm-2">
                    <img src="img/placeholders/photos/photo21.jpg" alt="image">
                </div>
                <div class="col-sm-2">
                    <img src="img/placeholders/photos/photo22.jpg" alt="image">
                </div>
                <div class="col-sm-2">
                    <img src="img/placeholders/photos/photo23.jpg" alt="image">
                </div>
                <div class="col-sm-2">
                    <img src="img/placeholders/photos/photo24.jpg" alt="image">
                </div>
            </div>
        </div>
        <!-- END Grid Gallery Content -->
    </div>
    <!-- END Grid Gallery Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>