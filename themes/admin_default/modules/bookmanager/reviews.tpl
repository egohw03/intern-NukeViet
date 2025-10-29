<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.reviews_management}</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group" role="group">
                    <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=reviews&status=-1" class="btn btn-default<!-- BEGIN: all_active --> active<!-- END: all_active -->">{LANG.all}</a>
                    <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=reviews&status=0" class="btn btn-warning<!-- BEGIN: pending_active --> active<!-- END: pending_active -->">{LANG.pending}</a>
                    <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&{NV_NAME_VARIABLE}={MODULE_NAME}&{NV_OP_VARIABLE}=reviews&status=1" class="btn btn-success<!-- BEGIN: approved_active --> active<!-- END: approved_active -->">{LANG.approved}</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN: review_loop -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            {REVIEW.book_title} - {REVIEW.username}
            <span class="label label-{REVIEW.status_class} pull-right">{REVIEW.status_text}</span>
        </h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-2">
                <strong>{LANG.rating}:</strong> {REVIEW.rating}/5 ★
            </div>
            <div class="col-md-8">
                <h5>{REVIEW.title}</h5>
                <p>{REVIEW.content}</p>
            </div>
            <div class="col-md-2 text-right">
                <small class="text-muted">{REVIEW.add_time}</small>
                <!-- BEGIN: action_buttons -->
                <br>
                <a href="#" class="btn btn-xs btn-success">{LANG.approve}</a>
                <a href="#" class="btn btn-xs btn-danger">{LANG.delete}</a>
                <!-- END: action_buttons -->
            </div>
        </div>
    </div>
</div>
<!-- END: review_loop -->

<!-- BEGIN: no_reviews -->
<div class="alert alert-info">{LANG.no_reviews}</div>
<!-- END: no_reviews -->

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
