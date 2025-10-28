<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_MOD_BOOKMANAGER')) {
    die('Stop!!!');
}

$id = $nv_Request->get_int('id', 'get', 0);

if ($id <= 0) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

// Get book details
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books WHERE id = ' . $id . ' AND status = 1';
$book = $db->query($sql)->fetch();

if (empty($book)) {
    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$page_title = $book['title'];
$key_words = $book['title'];
$description = nv_clean60($book['description'], 160);

// Get category
$sql = 'SELECT title FROM ' . NV_PREFIXLANG . '_' . $module_data . '_categories WHERE id = ' . $book['cat_id'];
$category = $db->query($sql)->fetchColumn();

// Prepare data
$book['image_url'] = !empty($book['image']) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $book['image'] : '';
$book['category'] = $category;
$book['price_format'] = number_format($book['price'], 0, ',', '.') . ' VND';

// Handle add to cart
if ($nv_Request->isset_request('add_to_cart', 'post')) {
    if (!defined('NV_IS_USER')) {
        nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=users&nv_redirect=' . nv_redirect_encrypt($client_info['selfurl']));
    }

    $quantity = $nv_Request->get_int('quantity', 'post', 1);
    if ($quantity < 1) $quantity = 1;
    if ($quantity > $book['stock_quantity']) $quantity = $book['stock_quantity'];

    // Check if already in cart
    $sql = 'SELECT id, quantity FROM ' . NV_PREFIXLANG . '_' . $module_data . '_cart WHERE userid = ' . $user_info['userid'] . ' AND book_id = ' . $id;
    $cart_item = $db->query($sql)->fetch();

    if ($cart_item) {
        $new_quantity = $cart_item['quantity'] + $quantity;
        if ($new_quantity > $book['stock_quantity']) $new_quantity = $book['stock_quantity'];
        $db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_cart SET quantity = ' . $new_quantity . ' WHERE id = ' . $cart_item['id']);
    } else {
        $db->query('INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . '_cart (userid, book_id, quantity, add_time) VALUES (' . $user_info['userid'] . ', ' . $id . ', ' . $quantity . ', ' . NV_CURRENTTIME . ')');
    }

    nv_redirect_location(NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=cart');
}

// Breadcrumb
$array_mod_title[] = [
    'title' => $module_info['site_title'],
    'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name
];

$contents = book_detail_theme($book);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
