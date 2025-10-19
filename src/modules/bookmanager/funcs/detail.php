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
// Debug: Uncomment to check book data
// echo 'Debug: Book data: <pre>' . print_r($book, true) . '</pre>';
if (empty($book)) {
    nv_info_die($lang_global['error_404_title'], $lang_global['error_404_title'], $lang_global['error_404_content'], 404);
}

$page_title = $book['title'];

$contents = '<div class="row">';
$contents .= '<div class="col-md-8">';

// Image if available
if (!empty($book['image'])) {
    $image_url = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_name . '/' . $book['image'];
    $contents .= '<div class="text-center mb-3"><img src="' . $image_url . '" alt="' . $book['title'] . '" class="img-fluid" style="max-width: 300px;"></div>';
}

$contents .= '<h1>' . $book['title'] . '</h1>';
$contents .= '<p><strong>' . $lang_module['author'] . ':</strong> ' . $book['author'] . '</p>';
if (!empty($book['publisher'])) {
    $contents .= '<p><strong>' . $lang_module['publisher'] . ':</strong> ' . $book['publisher'] . '</p>';
}
if (!empty($book['publish_year'])) {
    $contents .= '<p><strong>' . $lang_module['publish_year'] . ':</strong> ' . $book['publish_year'] . '</p>';
}
if (!empty($book['isbn'])) {
    $contents .= '<p><strong>' . $lang_module['isbn'] . ':</strong> ' . $book['isbn'] . '</p>';
}
$contents .= '<p><strong>' . $lang_module['description'] . ':</strong></p>';
$contents .= '<p>' . nl2br($book['description']) . '</p>';
$contents .= '<p><a href="' . NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '" class="btn btn-primary">' . $lang_module['back_to_list'] . '</a></p>';
$contents .= '</div>';
$contents .= '<div class="col-md-4">';
$contents .= '<div class="card">';
$contents .= '<div class="card-body">';
$contents .= '<h5 class="card-title">' . $lang_module['book_info'] . '</h5>';
$contents .= '<p><strong>' . $lang_module['author'] . ':</strong> ' . $book['author'] . '</p>';
if (!empty($book['publisher'])) {
    $contents .= '<p><strong>' . $lang_module['publisher'] . ':</strong> ' . $book['publisher'] . '</p>';
}
$contents .= '</div>';
$contents .= '</div>';
$contents .= '</div>';
$contents .= '</div>';

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
