<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_IS_FILE_ADMIN'))
    die('Stop!!!');

global $module_name, $module_data, $nv_Lang, $lang_global, $lang_module;

ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = isset($lang_module['main']) ? $lang_module['main'] : 'Quản lý sách';

// Debug
if (empty($lang_global)) {
    $lang_global = [
        'id' => 'ID',
        'add_time' => 'Thời gian thêm',
        'funcs' => 'Chức năng'
    ];
}

if (empty($lang_module)) {
    $lang_module = [
        'book_list' => 'Danh sách sách',
        'add_book' => 'Thêm sách',
        'title' => 'Tiêu đề',
        'author' => 'Tác giả',
        'publisher' => 'Nhà xuất bản',
        'publish_year' => 'Năm xuất bản',
        'isbn' => 'ISBN',
        'status' => 'Trạng thái',
        'edit' => 'Sửa',
        'delete' => 'Xóa',
        'no_books' => 'Không có sách nào'
    ];
}

$books = nv_get_books(100, 0); // Lấy tất cả sách

// Xử lý dữ liệu sách cho template
$processed_books = [];
foreach ($books as $book) {
    $book['status_class'] = $book['status'] ? 'success' : 'danger';
    $book['status_text'] = $book['status'] ? $nv_Lang->getModule('active') : $nv_Lang->getModule('inactive');
    $book['add_time'] = nv_datetime_format($book['add_time']);
    $book['edit_link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=edit&id=' . $book['id'];
    $book['delete_link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=delete&id=' . $book['id'];
    $processed_books[] = $book;
}

$contents = '<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">' . $lang_module['book_list'] . '</h3>
        <div class="pull-right">
            <a href="' . NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=add" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> ' . $lang_module['add_book'] . '
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">' . $lang_global['id'] . '</th>
                        <th style="width: 25%;">' . $lang_module['title'] . '</th>
                        <th>' . $lang_module['author'] . '</th>
                        <th>' . $lang_module['publisher'] . '</th>
                        <th>' . $lang_module['publish_year'] . '</th>
                        <th>' . $lang_module['isbn'] . '</th>
                        <th class="text-center">' . $lang_module['status'] . '</th>
                        <th class="text-center">' . $lang_global['add_time'] . '</th>
                        <th class="text-center">' . $lang_global['funcs'] . '</th>
                    </tr>
                </thead>
                <tbody>';

if (!empty($processed_books)) {
    foreach ($processed_books as $book) {
        $contents .= '<tr>
                        <td class="text-center">' . $book['id'] . '</td>
                        <td style="width: 25%;">
                            <strong>' . $book['title'] . '</strong>
                        </td>
                        <td>' . $book['author'] . '</td>
                        <td>' . $book['publisher'] . '</td>
                        <td class="text-center">' . $book['publish_year'] . '</td>
                        <td>' . $book['isbn'] . '</td>
                        <td class="text-center">
                            <span class="label label-' . $book['status_class'] . '">' . $book['status_text'] . '</span>
                        </td>
                        <td class="text-center">' . $book['add_time'] . '</td>
                        <td class="text-center">
                            <a href="' . $book['edit_link'] . '" class="btn btn-info btn-xs">
                                <i class="fa fa-edit"></i> ' . $lang_module['edit'] . '
                            </a>
                            <a href="' . $book['delete_link'] . '" class="btn btn-danger btn-xs" onclick="return confirm(nv_is_del_confirm[0]);">
                                <i class="fa fa-trash"></i> ' . $lang_module['delete'] . '
                            </a>
                        </td>
                    </tr>';
    }
} else {
    $contents .= '<tr>
                        <td colspan="9" class="text-center">
                            <em>' . $lang_module['no_books'] . '</em>
                        </td>
                    </tr>';
}

$contents .= '                </tbody>
            </table>
        </div>
    </div>
</div>';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
