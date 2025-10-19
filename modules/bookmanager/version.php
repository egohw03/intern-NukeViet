<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');

$module_version = array(
    'name' => 'Book Manager', // Tieu de module
    'modfuncs' => 'main,detail', // Cac function co block
    'change_alias' => '',
    'submenu' => '',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 1, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '1.0.00', // Phien ban cua modle
    'date' => 'Saturday, October 19, 2025 12:00:00 PM GMT+07:00', // Ngay phat hanh phien ban
    'author' => 'VINADES.,JSC <contact@vinades.vn>', // Tac gia
    'note' => '', // Ghi chu
    'uploads_dir' => array(
        $module_name
    ),
    'files_dir' => array(),
    'icon' => 'fa-solid fa-book'
);
