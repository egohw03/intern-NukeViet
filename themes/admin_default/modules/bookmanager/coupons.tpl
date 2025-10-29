<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.coupons_management}</h3>
        <div class="pull-right">
            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=coupon_add" class="btn btn-success btn-xs">{LANG.add_coupon}</a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{LANG.code}</th>
                        <th>{LANG.discount}</th>
                        <th>{LANG.valid_period}</th>
                        <th>{LANG.status}</th>
                        <th>{LANG.actions}</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN: coupon_loop -->
                    <tr>
                        <td><strong>{COUPON.code}</strong></td>
                        <td>{COUPON.value_format} ({COUPON.type_text})</td>
                        <td>{COUPON.start_time} - {COUPON.end_time}</td>
                        <td><span class="label label-{COUPON.status_class}">{COUPON.status_text}</span></td>
                        <td>
                            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=coupon_edit&id={COUPON.id}" class="btn btn-xs btn-primary">{GLANG.edit}</a>
                            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=coupon_delete&id={COUPON.id}" class="btn btn-xs btn-danger" onclick="return confirm('{LANG.confirm_delete}')">{GLANG.delete}</a>
                        </td>
                    </tr>
                    <!-- END: coupon_loop -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- BEGIN: no_coupons -->
<div class="alert alert-info">{LANG.no_coupons}</div>
<!-- END: no_coupons -->

<!-- BEGIN: pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination">
        <!-- BEGIN: page -->
        <li class="{PAGE.current}"><a href="{PAGE.link}">{PAGE.num}</a></li>
        <!-- END: page -->
    </ul>
</nav>
<!-- END: pagination -->
<!-- END: main -->
