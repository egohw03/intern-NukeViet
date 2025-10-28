<!-- BEGIN: main -->
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="w100">{LANG.order_code}</th>
                <th>{LANG.customer_name}</th>
                <th class="w150">{LANG.total_amount}</th>
                <th class="w100 text-center">{LANG.order_status}</th>
                <th class="w100 text-center">{LANG.payment_status}</th>
                <th class="w120">{LANG.add_time}</th>
                <th class="w150 text-center">{LANG.function}</th>
            </tr>
        </thead>
        <tbody>
            <!-- BEGIN: loop -->
            <tr>
                <td><strong>{ORDER.order_code}</strong></td>
                <td>{ORDER.customer_name}</td>
                <td class="text-right"><strong>{ORDER.total_amount_format}</strong></td>
                <td class="text-center">
                    <span class="badge badge-{ORDER.order_status_class}">{ORDER.order_status_text}</span>
                </td>
                <td class="text-center">
                    <span class="badge badge-{ORDER.payment_status_class}">{ORDER.payment_status_text}</span>
                </td>
                <td>{ORDER.add_time_format}</td>
                <td class="text-center">
                    <a href="{ORDER.LINK_VIEW}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> {LANG.view_order}</a>
                </td>
            </tr>
            <!-- END: loop -->
        </tbody>
    </table>
</div>

<!-- BEGIN: no_data -->
<div class="alert alert-info">{LANG.no_data}</div>
<!-- END: no_data -->
<!-- END: main -->
