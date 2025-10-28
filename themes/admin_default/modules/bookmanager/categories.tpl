<!-- BEGIN: main -->
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">{LANG.categories}</h3>
<div class="pull-right">
<a href="{LINK_ADD}" class="btn btn-primary btn-sm">
<i class="fa fa-plus"></i> {LANG.add_cat}
</a>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
        <th class="w50 text-center">{LANG.weight}</th>
        <th>{LANG.title}</th>
        <th>{LANG.description}</th>
    <th class="w100 text-center">{LANG.status}</th>
    <th class="w150 text-center">{LANG.function}</th>
</tr>
</thead>
<tbody>
<!-- BEGIN: loop -->
    <tr>
        <td class="text-center">{CAT.weight}</td>
    <td><strong>{CAT.title}</strong></td>
    <td>{CAT.description}</td>
        <td class="text-center">
                <!-- BEGIN: status_active -->
                <span class="badge badge-success">{LANG.active}</span>
                    <!-- END: status_active -->
                        <!-- BEGIN: status_inactive -->
                            <span class="badge badge-danger">{LANG.inactive}</span>
                            <!-- END: status_inactive -->
                        </td>
                        <td class="text-center">
                            <a href="{LINK_EDIT}" class="btn btn-sm btn-warning" title="{LANG.edit}"><i class="fa fa-edit"></i></a>
                            <a href="{LINK_DELETE}" class="btn btn-sm btn-danger" title="{LANG.delete}" onclick="return confirm('{LANG.confirm_delete_cat}')"><i class="fa fa-trash"></i></a>
                        </td>
                </tr>
                    <!-- END: loop -->
                </tbody>
            </table>
        </div>

        <!-- BEGIN: no_data -->
        <div class="alert alert-info text-center">
            <i class="fa fa-info-circle fa-2x"></i>
            <br>
            {LANG.no_categories}
        </div>
        <!-- END: no_data -->
    </div>
</div>
<!-- END: main -->
