<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN'))
    die('Stop!!!');

global $module_file;

require_once NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';

define('NV_IS_BOOKMANAGER_ADMIN', true);
define('NV_IS_FILE_ADMIN', true);
