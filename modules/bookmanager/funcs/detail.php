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

$contents = '<h1>' . $book['title'] . '</h1>';
$contents .= '<p><strong>' . $nv_Lang->getModule('author') . ':</strong> ' . $book['author'] . '</p>';
$contents .= '<p><strong>' . $nv_Lang->getModule('publisher') . ':</strong> ' . $book['publisher'] . '</p>';
$contents .= '<p><strong>' . $nv_Lang->getModule('publish_year') . ':</strong> ' . $book['publish_year'] . '</p>';
$contents .= '<p><strong>' . $nv_Lang->getModule('isbn') . ':</strong> ' . $book['isbn'] . '</p>';
$contents .= '<p><strong>' . $nv_Lang->getModule('description') . ':</strong></p>';
$contents .= '<p>' . $book['description'] . '</p>';
$contents .= '<p><a href="' . NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '">' . $nv_Lang->getModule('back_to_list') . '</a></p>';

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
