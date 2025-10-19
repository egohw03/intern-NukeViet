<!-- BEGIN: main -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Danh sách sách</h3>
        <div class="pull-right">
            <a href="{$ADD_LINK}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> Thêm sách
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Nhà xuất bản</th>
                        <th>Năm xuất bản</th>
                        <th>ISBN</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Thời gian thêm</th>
                        <th class="text-center">Chức năng</th>
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
                                <i class="fa fa-edit"></i> Sửa
                            </a>
                            <a href="{DATA.delete_link}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                <i class="fa fa-trash"></i> Xóa
                            </a>
                        </td>
                    </tr>
                    <!-- END: book_loop -->
                    <!-- BEGIN: no_books -->
                    <tr>
                        <td colspan="9" class="text-center">
                            <em>Không có sách nào</em>
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
