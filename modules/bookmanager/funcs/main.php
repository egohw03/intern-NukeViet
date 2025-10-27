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

global $lang_module;

$page_title = $nv_Lang->getModule('main');

$books = nv_get_books(10, 0);

$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);

if (!empty($books)) {
    foreach ($books as $book) {
        $book['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=detail&id=' . $book['id'];
        $book['image'] = !empty($book['image']) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $book['image'] : '';
        $xtpl->assign('BOOK', $book);
        if (!empty($book['image'])) {
            $xtpl->parse('main.book_loop.image');
        } else {
            $xtpl->parse('main.book_loop.no_image');
        }
        $xtpl->parse('main.book_loop');
    }
} else {
    $xtpl->parse('main.no_books');
}

$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
