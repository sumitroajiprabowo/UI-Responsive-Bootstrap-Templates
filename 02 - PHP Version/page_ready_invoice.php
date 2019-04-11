<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Invoice Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-usd"></i>Invoice<br><small>UI for getting paid!</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Invoice</a></li>
    </ul>
    <!-- END Invoice Header -->

    <!-- Invoice Block -->
    <div class="block full">
        <!-- Invoice Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="New invoice"><i class="fa fa-plus"></i></a>
                <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" data-toggle="tooltip" title="Delete invoice"><i class="fa fa-times"></i></a>
                <a href="javascript:void(0)" class="btn btn-sm btn-alt btn-default" onclick="App.pagePrint();"><i class="fa fa-print"></i> Print</a>
            </div>
            <h2><strong>Invoice</strong> #INV0152</h2>
        </div>
        <!-- END Invoice Title -->

        <!-- Invoice Content -->
        <!-- 2 Column grid -->
        <div class="row block-section">
            <!-- Company Info -->
            <div class="col-sm-6">
                <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="photo" class="img-circle">
                <hr>
                <h2><strong>Company Inc.</strong></h2>
                <address>
                    Address<br>
                    Town/City<br>
                    Region, Zip/Postal Code<br><br>
                    <i class="fa fa-phone"></i> (000) 000-0000<br>
                    <i class="fa fa-envelope-o"></i> <a href="javascript:void(0)">example@example.com</a>
                </address>
            </div>
            <!-- END Company Info -->

            <!-- Client Info -->
            <div class="col-sm-6 text-right">
                <img src="img/placeholders/avatars/avatar<?php echo rand(1, 16); ?>.jpg" alt="photo" class="img-circle">
                <hr>
                <h2><strong>Client</strong></h2>
                <address>
                    Address<br>
                    Town/City<br>
                    Region, Zip/Postal Code<br><br>
                    (000) 000-0000 <i class="fa fa-phone"></i><br>
                    <a href="javascript:void(0)">example@example.com</a> <i class="fa fa-envelope-o"></i>
                </address>
            </div>
            <!-- END Client Info -->
        </div>
        <!-- END 2 Column grid -->

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th></th>
                        <th style="width: 60%;">Product</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Unit Price</th>
                        <th class="text-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <h4>Logo Design</h4>
                            <span class="label label-info"><i class="fa fa-clock-o"></i> 3 weeks</span>
                            <span class="label label-info">4 Revisions Available</span>
                        </td>
                        <td class="text-center"><strong>x <span class="badge">1</span></strong></td>
                        <td class="text-center"><strong>$ 1.000</strong></td>
                        <td class="text-right"><span class="label label-primary">$ 1.000</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>
                            <h4>Website Design</h4>
                            <span class="label label-info"><i class="fa fa-clock-o"></i> 1 month</span>
                            <span class="label label-info">2 Revisions Available</span>
                        </td>
                        <td class="text-center"><strong>x <span class="badge">1</span></strong></td>
                        <td class="text-center"><strong>$ 1.000</strong></td>
                        <td class="text-right"><span class="label label-primary">$ 1.000</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>
                            <h4>Application Design</h4>
                            <span class="label label-info"><i class="fa fa-clock-o"></i> 2 months</span>
                            <span class="label label-info">Mobile</span>
                        </td>
                        <td class="text-center"><strong>x <span class="badge">3</span></strong></td>
                        <td class="text-center"><strong>$ 1.000</strong></td>
                        <td class="text-right"><span class="label label-primary">$ 3.000</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>
                            <h4>Application Development</h4>
                            <span class="label label-info"><i class="fa fa-clock-o"></i> 6 months</span>
                            <span class="label label-info">Mobile</span>
                        </td>
                        <td class="text-center"><strong>x <span class="badge">3</span></strong></td>
                        <td class="text-center"><strong>$ 5.000</strong></td>
                        <td class="text-right"><span class="label label-primary">$ 15.000</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>
                            <h4>Application Marketing</h4>
                            <span class="label label-info"><i class="fa fa-clock-o"></i> 1 month</span>
                            <span class="label label-info">Social + Ads</span>
                        </td>
                        <td class="text-center"><strong>x <span class="badge">3</span></strong></td>
                        <td class="text-center"><strong>$ 1.000</strong></td>
                        <td class="text-right"><span class="label label-primary">$ 3.000</span></td>
                    </tr>
                    <tr class="active">
                        <td colspan="4" class="text-right"><span class="h4">SUBTOTAL</span></td>
                        <td class="text-right"><span class="h4">$ 23.000</span></td>
                    </tr>
                    <tr class="active">
                        <td colspan="4" class="text-right"><span class="h4">VAT RATE</span></td>
                        <td class="text-right"><span class="h4">25%</span></td>
                    </tr>
                    <tr class="active">
                        <td colspan="4" class="text-right"><span class="h4">VAT DUE</span></td>
                        <td class="text-right"><span class="h4">$ 5.750</span></td>
                    </tr>
                    <tr class="active">
                        <td colspan="4" class="text-right"><span class="h3"><strong>TOTAL DUE</strong></span></td>
                        <td class="text-right"><span class="h3"><strong>$ 28.750</strong></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Table -->

        <div class="clearfix">
            <div class="btn-group pull-right">
                <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-print"></i> Save</a>
                <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-angle-right"></i> Send Invoice</a>
            </div>
        </div>
        <!-- END Invoice Content -->
    </div>
    <!-- END Invoice Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>
<?php include 'inc/template_end.php'; ?>