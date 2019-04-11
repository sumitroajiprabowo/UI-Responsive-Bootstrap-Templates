<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- eCommerce Orders Header -->
    <div class="content-header">
        <ul class="nav-horizontal text-center">
            <li>
                <a href="page_ecom_dashboard.php"><i class="fa fa-bar-chart"></i> Dashboard</a>
            </li>
            <li class="active">
                <a href="page_ecom_orders.php"><i class="gi gi-shop_window"></i> Orders</a>
            </li>
            <li>
                <a href="page_ecom_order_view.php"><i class="gi gi-shopping_cart"></i> Order View</a>
            </li>
            <li>
                <a href="page_ecom_products.php"><i class="gi gi-shopping_bag"></i> Products</a>
            </li>
            <li>
                <a href="page_ecom_product_edit.php"><i class="gi gi-pencil"></i> Product Edit</a>
            </li>
            <li>
                <a href="page_ecom_customer_view.php"><i class="gi gi-user"></i> Customer View</a>
            </li>
        </ul>
    </div>
    <!-- END eCommerce Orders Header -->

    <!-- Quick Stats -->
    <div class="row text-center">
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background">
                    <h4 class="widget-content-light"><strong>Pending</strong> Orders</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen">3</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Orders</strong> Today</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">120</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Orders</strong> This Month</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">3.200</span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget widget-hover-effect2">
                <div class="widget-extra themed-background-dark">
                    <h4 class="widget-content-light"><strong>Orders</strong> Last Month</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">2.850</span></div>
            </a>
        </div>
    </div>
    <!-- END Quick Stats -->

    <!-- All Orders Block -->
    <div class="block full">
        <!-- All Orders Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
            </div>
            <h2><strong>All</strong> Orders</h2>
        </div>
        <!-- END All Orders Title -->

        <!-- All Orders Content -->
        <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
            <thead>
                <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                    <th class="visible-lg">Customer</th>
                    <th class="text-center visible-lg">Products</th>
                    <th class="hidden-xs">Payment</th>
                    <th class="text-right hidden-xs">Value</th>
                    <th>Status</th>
                    <th class="hidden-xs text-center">Submitted</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $labels['0']['class']   = "label-success";
                $labels['0']['text']    = "Delivered";
                $labels['1']['class']   = "label-info";
                $labels['1']['text']    = "For delivery";
                $labels['2']['class']   = "label-danger";
                $labels['2']['text']    = "Canceled";
                $labels['3']['class']   = "label-warning";
                $labels['3']['text']    = "Processing";

                $payment    = array('Paypal', 'Bank Wire', 'Check', 'Credit Card');
                $customers  = array('Gerald Berry', 'Patrick Bates', 'Ethan Greene', 'Nancy Rose', 'Harry Medina', 'Ryan Hopkins', 'Anthony Franklin', 'Harry Burke');
                ?>
                <?php for($i=99; $i>39; $i--) { ?>
                <tr>
                    <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.6851<?php echo $i; ?></strong></a></td>
                    <td class="visible-lg"><a href="javascript:void(0)"><?php $rand = rand(0, 7); echo $customers[$rand]; ?></a></td>
                    <td class="text-center visible-lg"><a href="javascript:void(0)"><?php echo rand(1, 5); ?></a></td>
                    <td class="hidden-xs"><?php $rand = rand(0, 3); echo $payment[$rand]; ?></td>
                    <td class="text-right hidden-xs"><strong>$<?php echo rand(25, 2500); ?>,00</strong></td>
                    <td><span class="label<?php $rand = rand(0, 3); echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text']; ?></span></td>
                    <td class="hidden-xs text-center"><?php echo sprintf('%02d', rand(1, 28)) . '/' . sprintf('%02d', rand(1, 12)); ?>/2014</td>
                    <td class="text-center">
                        <div class="btn-group btn-group-xs">
                            <a href="page_ecom_order_view.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- END All Orders Content -->
    </div>
    <!-- END All Orders Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/ecomOrders.js"></script>
<script>$(function(){ EcomOrders.init(); });</script>

<?php include 'inc/template_end.php'; ?>