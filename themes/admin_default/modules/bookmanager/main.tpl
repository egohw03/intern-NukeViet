<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.book_list}</h3>
        <div class="pull-right">
            <a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}=add" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> {LANG.add_book}
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>{LANG.category}:</label>
                    <select class="form-control" onchange="window.location.href=this.value">
                        <option value="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;sort={SORT_BY}&amp;order={SORT_ORDER}">{LANG.all_books}</option>
                        <!-- BEGIN: cat_filter -->
                        <option value="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;cat_id={CAT.id}&amp;sort={SORT_BY}&amp;order={SORT_ORDER}" {CAT.selected}>{CAT.title}</option>
                        <!-- END: cat_filter -->
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">{LANG.id}</th>
                        <th><a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;cat_id={CAT_ID}&amp;sort=title&amp;order={SORT_ORDER}" class="sort-link">Title</a></th>
                        <th><a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;cat_id={CAT_ID}&amp;sort=author&amp;order={SORT_ORDER}" class="sort-link">Author</a></th>
                        <th><a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;cat_id={CAT_ID}&amp;sort=price&amp;order={SORT_ORDER}" class="sort-link">Price</a></th>
                        <th><a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;cat_id={CAT_ID}&amp;sort=add_time&amp;order={SORT_ORDER}" class="sort-link">Add Time</a></th>
                        <th><a href="{NV_BASE_ADMINURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;cat_id={CAT_ID}&amp;sort=status&amp;order={SORT_ORDER}" class="sort-link">Status</a></th>
                        <th class="text-center">{LANG.functions}</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN: book_loop -->
                    <tr>
                    <td class="text-center">{BOOK.id}</td>
                    <td><strong>{BOOK.title}</strong></td>
                    <td>{BOOK.author}</td>
                    <td class="text-right">{BOOK.price_format}</td>
                    <td class="text-center">
                        <span class="label label-{BOOK.status_class}">{BOOK.status_text}</span>
                    </td>
                    <td>{BOOK.add_time}</td>
                    <td class="text-center">
                        <a href="{BOOK.edit_link}" class="btn btn-info btn-xs" title="{LANG.edit}">
                    <i class="fa fa-edit"></i>
                        </a>
                        <a href="{BOOK.delete_link}" class="btn btn-danger btn-xs" title="{LANG.delete}" onclick="return confirm(nv_is_del_confirm[0]);">
                            <i class="fa fa-trash"></i>
                    </a>
                    </td>
                    </tr>
                    <!-- END: book_loop -->
                </tbody>
            </table>
        </div>

        <!-- BEGIN: no_books -->
        <div class="alert alert-info text-center">
            <i class="fa fa-info-circle fa-2x"></i>
            <br>
            {LANG.no_books}
        </div>
        <!-- END: no_books -->
    </div>
</div>
<!-- END: main -->
