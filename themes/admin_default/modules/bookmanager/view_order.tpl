<!-- BEGIN: main -->
<div class="order-detail">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-shopping-cart"></i> {LANG.view_order}: {ORDER.order_code}
                <div class="pull-right">
                    <a href="{BACK_LINK}" class="btn btn-default btn-sm">
                        <i class="fa fa-arrow-left"></i> {LANG.back}
                    </a>
                </div>
            </h3>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>Thông tin đơn hàng</h4>
                    <table class="table table-striped">
                        <tr>
                            <td><strong>{LANG.order_code}:</strong></td>
                            <td>{ORDER.order_code}</td>
                        </tr>
                        <tr>
                            <td><strong>{LANG.add_time}:</strong></td>
                            <td>{ORDER.add_time_format}</td>
                        </tr>
                        <tr>
                            <td><strong>{LANG.order_status}:</strong></td>
                            <td><span class="badge badge-{ORDER.order_status_class}">{ORDER.order_status_text}</span></td>
                        </tr>
                        <tr>
                            <td><strong>{LANG.payment_status}:</strong></td>
                            <td><span class="badge badge-{ORDER.payment_status_class}">{ORDER.payment_status_text}</span></td>
                        </tr>
                        <tr>
                            <td><strong>{LANG.total_amount}:</strong></td>
                            <td class="text-primary font-weight-bold">{ORDER.total_amount_format}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4>Thông tin khách hàng</h4>
                    <table class="table table-striped">
                        <tr>
                            <td><strong>{LANG.customer_name}:</strong></td>
                            <td>{ORDER.customer_name}</td>
                        </tr>
                        <tr>
                            <td><strong>{LANG.customer_email}:</strong></td>
                            <td>{ORDER.customer_email}</td>
                        </tr>
                        <!-- BEGIN: customer_phone -->
                        <tr>
                            <td><strong>{LANG.customer_phone}:</strong></td>
                            <td>{ORDER.customer_phone}</td>
                        </tr>
                        <!-- END: customer_phone -->
                        <tr>
                            <td><strong>{LANG.customer_address}:</strong></td>
                            <td>{ORDER.customer_address}</td>
                        </tr>
                        <!-- BEGIN: payment_method -->
                        <tr>
                            <td><strong>{LANG.payment_method}:</strong></td>
                            <td>{ORDER.payment_method}</td>
                        </tr>
                        <!-- END: payment_method -->
                        <!-- BEGIN: order_note -->
                        <tr>
                            <td><strong>{LANG.order_note}:</strong></td>
                            <td>{ORDER.order_note}</td>
                        </tr>
                        <!-- END: order_note -->
                    </table>
                </div>
            </div>

            <!-- BEGIN: order_items -->
            <h4>Chi tiết đơn hàng</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-right">Đơn giá</th>
                            <th class="text-right">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- BEGIN: loop -->
                        <tr>
                            <td>{ITEM.book_title}</td>
                            <td class="text-center">{ITEM.quantity}</td>
                            <td class="text-right">{ITEM.price_format}</td>
                            <td class="text-right">{ITEM.total_format}</td>
                        </tr>
                        <!-- END: loop -->
                    </tbody>
                </table>
            </div>
            <!-- END: order_items -->

            <!-- BEGIN: no_items -->
            <div class="alert alert-warning">Không có sản phẩm nào trong đơn hàng</div>
            <!-- END: no_items -->
        </div>
    </div>
</div>
<!-- END: main -->
