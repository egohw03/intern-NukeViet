<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_IS_MOD_BOOKMANAGER'))
    die('Stop!!!');

$id = $nv_Request->get_int('id', 'get', 0);
// Debug: Uncomment to check
// echo 'Debug: ID = ' . $id . '<br>';
if ($id <= 0) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$book = nv_get_book($id);
if (empty($book)) {
    nv_info_die($lang_global['error_404_title'], $lang_global['error_404_title'], $lang_global['error_404_content'], 404);
}

$page_title = $book['title'];

// Breadcrumb
global $array_mod_title;
$array_mod_title[] = [
'catid' => 0,
'title' => 'Detail',
'link' => ''
];

$xtpl = new XTemplate('detail.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('BOOK', $book);
$xtpl->assign('BACK_LINK', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);

if (!empty($book['image'])) {
    $xtpl->parse('main.image');
} else {
    $xtpl->parse('main.no_image');
}

if (!empty($book['publisher'])) {
    $xtpl->parse('main.publisher');
}

if (!empty($book['publish_year'])) {
    $xtpl->parse('main.publish_year');
}

if (!empty($book['isbn'])) {
    $xtpl->parse('main.isbn');
}

if (!empty($book['description'])) {
    $xtpl->parse('main.description');
}

if ($book['stock_quantity'] > 0) {
    $xtpl->assign('ADD_TO_CART_LINK', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&op=cart&action=add&id=' . $book['id']);
    $xtpl->parse('main.in_stock');
} else {
    $xtpl->parse('main.out_of_stock');
}

// Related books
$related_books = nv_get_books(6, 0);
$related_books = array_filter($related_books, function($b) use ($book) {
    return $b['id'] != $book['id'] && $b['author'] == $book['author'];
});
if (empty($related_books)) {
    $related_books = array_slice(array_filter(nv_get_books(10, 0), function($b) use ($book) {
        return $b['id'] != $book['id'];
    }), 0, 6);
}

if (!empty($related_books)) {
    foreach ($related_books as $related) {
        $related['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=detail&id=' . $related['id'];
        $xtpl->assign('RELATED_BOOK', $related);
        if (!empty($related['image'])) {
            $xtpl->parse('main.related_books.related_loop.image');
        } else {
            $xtpl->parse('main.related_books.related_loop.no_image');
        }
        $xtpl->parse('main.related_books.related_loop');
    }
    $xtpl->parse('main.related_books');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
