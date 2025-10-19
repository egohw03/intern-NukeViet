<?php

/**
 * @Project NUKEVIET 4222
 * @Author VINADES., JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES ., JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Dec 3, 2010  11:33:22 AM
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit("Stop");
}
$page_title = $lang_module['list_post'];
$contents = 'Giao diện admin';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
