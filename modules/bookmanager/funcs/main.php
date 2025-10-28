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

global $lang_module, $lang_global, $nv_Lang;

$page_title = $nv_Lang->getModule('main');

$books = nv_get_books(10, 0);

$contents = nv_theme_main($books);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
