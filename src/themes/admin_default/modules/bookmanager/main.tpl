<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{LANG.book_list}</h3>
        <div class="pull-right">
            <a href="{ADD_LINK}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> {LANG.add_book}
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">{GLANG.id}</th>
                        <th>{LANG.title}</th>
                        <th>{LANG.author}</th>
                        <th>{LANG.publisher}</th>
                        <th>{LANG.publish_year}</th>
                        <th>{LANG.isbn}</th>
                        <th class="text-center">{LANG.status}</th>
                        <th class="text-center">{GLANG.add_time}</th>
                        <th class="text-center">{GLANG.funcs}</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- BEGIN: book_loop -->
                    <tr>
                        <td class="text-center">{DATA.id}</td>
                        <td>
                            <strong>{DATA.title}</strong>
                        </td>
                        <td>{DATA.author}</td>
                        <td>{DATA.publisher}</td>
                        <td class="text-center">{DATA.publish_year}</td>
                        <td>{DATA.isbn}</td>
                        <td class="text-center">
                            <span class="label label-{DATA.status_class}">{DATA.status_text}</span>
                        </td>
                        <td class="text-center">{DATA.add_time}</td>
                        <td class="text-center">
                            <a href="{DATA.edit_link}" class="btn btn-info btn-xs">
                                <i class="fa fa-edit"></i> {LANG.edit}
                            </a>
                            <a href="{DATA.delete_link}" class="btn btn-danger btn-xs" onclick="return confirm('{GLANG.delete_confirm}')">
                                <i class="fa fa-trash"></i> {LANG.delete}
                            </a>
                        </td>
                    </tr>
                    <!-- END: book_loop -->
                    <!-- BEGIN: no_books -->
                    <tr>
                        <td colspan="9" class="text-center">
                            <em>{LANG.no_books}</em>
                        </td>
                    </tr>
                    <!-- END: no_books -->
                </tbody>
            </table>
        </div>
        
        <!-- BEGIN: pagination -->
        <div class="text-center">
            {PAGINATION}
        </div>
        <!-- END: pagination -->
    </div>
</div>
<!-- END: main -->
