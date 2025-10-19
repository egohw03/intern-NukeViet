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

$page_title = $nv_Lang->getModule('main');

$books = nv_get_books(10, 0);

$contents = '<h2>' . $nv_Lang->getModule('main') . '</h2>';
if (!empty($books)) {
$contents .= '<ul>';
foreach ($books as $book) {
$link = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=detail&id=' . $book['id'];
$contents .= '<li><a href="' . $link . '"><strong>' . $book['title'] . '</strong></a> by ' . $book['author'] . '</li>';
}
$contents .= '</ul>';
} else {
$contents .= '<p>' . $nv_Lang->getModule('no_data') . '</p>';
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
