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

global $module_upload;

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
'title' => $lang_module['detail'],
'link' => ''
];

// Prepare book data for theme
$book['image'] = !empty($book['image']) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $book['image'] : '';
$book['price_format'] = number_format($book['price'], 0, ',', '.') . ' VNĐ';

$contents = nv_theme_detail($book);

// Create XTemplate for related books only
$xtpl = new XTemplate('detail.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', \NukeViet\Core\Language::$lang_module);
$xtpl->assign('GLANG', \NukeViet\Core\Language::$lang_global);

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

    // Append related books to contents
    $related_content = $xtpl->text('main.related_books');
    $contents = str_replace('<!-- END: main -->', $related_content . '<!-- END: main -->', $contents);
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
