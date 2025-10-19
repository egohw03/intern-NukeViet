<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG['book_list']}</h3>
        <div class="pull-right">
            <a href="{ADD_LINK}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> {LANG['add_book']}
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">{GLANG['id']}</th>
                        <th>{LANG['title']}</th>
                        <th>{LANG['author']}</th>
                        <th>{LANG['publisher']}</th>
                        <th>{LANG['publish_year']}</th>
                        <th>{LANG['isbn']}</th>
                        <th class="text-center">{LANG['status']}</th>
                        <th class="text-center">{GLANG['add_time']}</th>
                        <th class="text-center">{GLANG['funcs']}</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN: BOOKS -->
                    <tr>
                        <td class="text-center">{BOOKS.id}</td>
                        <td>
                            <strong>{BOOKS.title}</strong>
                        </td>
                        <td>{BOOKS.author}</td>
                        <td>{BOOKS.publisher}</td>
                        <td class="text-center">{BOOKS.publish_year}</td>
                        <td>{BOOKS.isbn}</td>
                        <td class="text-center">
                            <span class="label label-{BOOKS.status_class}">{BOOKS.status_text}</span>
                        </td>
                        <td class="text-center">{BOOKS.add_time}</td>
                        <td class="text-center">
                            <a href="{BOOKS.edit_link}" class="btn btn-info btn-xs">
                                <i class="fa fa-edit"></i> {LANG['edit']}
                            </a>
                            <a href="{BOOKS.delete_link}" class="btn btn-danger btn-xs" onclick="return confirm(nv_is_del_confirm[0]);">
                                <i class="fa fa-trash"></i> {LANG['delete']}
                            </a>
                        </td>
                    </tr>
                    <!-- END: BOOKS -->
                    <!-- BEGIN: NO_BOOKS -->
                    <tr>
                        <td colspan="9" class="text-center">
                            <em>{LANG['no_books']}</em>
                        </td>
                    </tr>
                    <!-- END: NO_BOOKS -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- END: main -->
