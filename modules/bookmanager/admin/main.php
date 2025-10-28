<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

global $lang_module, $lang_global, $nv_Lang;

$page_title = $nv_Lang->getModule('main');

// Filter by category
$cat_id = $nv_Request->get_int('cat_id', 'get', 0);

// Sort
$sort_by = $nv_Request->get_string('sort', 'get', 'add_time');
$sort_order = $nv_Request->get_string('order', 'get', 'desc');

$valid_sort = ['title', 'author', 'price', 'add_time', 'status'];
if (!in_array($sort_by, $valid_sort)) {
    $sort_by = 'add_time';
}
if ($sort_order !== 'asc') {
    $sort_order = 'desc';
}

// Get books with category information
$where = '';
if ($cat_id > 0) {
    $where = 'WHERE b.cat_id = ' . $cat_id;
}

$sql = 'SELECT b.*, c.title as cat_title FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books b
LEFT JOIN ' . NV_PREFIXLANG . '_' . $module_data . '_categories c ON b.cat_id = c.id
' . $where . '
ORDER BY b.' . $sort_by . ' ' . strtoupper($sort_order);
$result = $db->query($sql);

$processed_books = [];
while ($book = $result->fetch()) {
$book['status_class'] = $book['status'] ? 'success' : 'danger';
$book['status_text'] = $book['status'] ? $nv_Lang->getModule('active') : $nv_Lang->getModule('inactive');
$book['add_time'] = nv_date('d/m/Y H:i', $book['add_time']);
$book['price_format'] = number_format($book['price'], 0, ',', '.') . ' VNĐ';
$book['edit_link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=edit&id=' . $book['id'];
$book['delete_link'] = NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=delete&id=' . $book['id'];
$processed_books[] = $book;
}

// Get categories for filter
$categories = [];
$sql_cat = 'SELECT id, title FROM ' . NV_PREFIXLANG . '_' . $module_data . '_categories ORDER BY weight ASC';
$result_cat = $db->query($sql_cat);
while ($row = $result_cat->fetch()) {
    $categories[] = $row;
}

// Use XTemplate instead of string concatenation
$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_LANG_VARIABLE', NV_LANG_VARIABLE);
$xtpl->assign('NV_LANG_DATA', NV_LANG_DATA);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('CAT_ID', $cat_id);
$xtpl->assign('SORT_BY', $sort_by);
$xtpl->assign('SORT_ORDER', $sort_order_toggle);

// Filter categories
foreach ($categories as $cat) {
    $cat['selected'] = ($cat['id'] == $cat_id) ? 'selected' : '';
    $xtpl->assign('CAT', $cat);
    $xtpl->parse('main.cat_filter');
}

// Sort parameters for template
$sort_order_toggle = ($sort_order == 'desc') ? 'asc' : 'desc';

if (!empty($processed_books)) {
foreach ($processed_books as $book) {
    $xtpl->assign('BOOK', $book);

    if (!empty($book['cat_title'])) {
        $xtpl->parse('main.book_loop.cat_title');
    } else {
        $xtpl->parse('main.book_loop.no_cat_title');
    }

    $xtpl->parse('main.book_loop');
}
} else {
$xtpl->parse('main.no_books');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
