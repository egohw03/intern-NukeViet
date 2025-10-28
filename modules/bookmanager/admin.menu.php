<?php

/**
 * NukeViet Content Management System
 * @version 5.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN')) {
    die('Stop!!!');
}

// Load module language for menu
if (file_exists(NV_ROOTDIR . '/modules/' . $module_file . '/language/' . NV_LANG_DATA . '.php')) {
    require NV_ROOTDIR . '/modules/' . $module_file . '/language/' . NV_LANG_DATA . '.php';
}

$submenu['main'] = $nv_Lang->getModule('main');
$submenu['categories'] = $nv_Lang->getModule('categories');
$submenu['add'] = $nv_Lang->getModule('add_book');
$submenu['orders'] = $nv_Lang->getModule('orders');

$allow_func = ['main', 'add', 'edit', 'delete', 'categories', 'add_cat', 'edit_cat', 'del_cat', 'orders', 'view_order'];
