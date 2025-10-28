<?php

/**
* NukeViet Content Management System
* @version 5.x
* @author VINADES.,JSC <contact@vinades.vn>
* @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
* @license GNU/GPL version 2 or any later version
* @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

global $lang_module, $lang_global, $nv_Lang;

$page_title = $nv_Lang->getModule('categories');

$xtpl = new XTemplate('categories.tpl', NV_ROOTDIR . '/themes/' . $global_config['admin_theme'] . '/modules/' . $module_file);
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$xtpl->assign('NV_BASE_ADMINURL', NV_BASE_ADMINURL);
$xtpl->assign('NV_NAME_VARIABLE', NV_NAME_VARIABLE);
$xtpl->assign('NV_OP_VARIABLE', NV_OP_VARIABLE);
$xtpl->assign('MODULE_NAME', $module_name);
$xtpl->assign('OP', $op);

// Get categories
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_categories ORDER BY weight ASC';
$result = $db->query($sql);

$array = array();
while ($row = $result->fetch()) {
    $array[$row['id']] = $row;
}

$xtpl->assign('CATEGORIES', $array);

if (!empty($array)) {
    foreach ($array as $cat) {
        $cat['status_active'] = $cat['status'] ? true : false;
        $cat['status_inactive'] = !$cat['status'] ? true : false;

        $xtpl->assign('CAT', $cat);

        if ($cat['status_active']) {
            $xtpl->parse('main.loop.status_active');
        } else {
            $xtpl->parse('main.loop.status_inactive');
        }

        $xtpl->assign('LINK_EDIT', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=edit_cat&amp;id=' . $cat['id']);
        $xtpl->assign('LINK_DELETE', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=del_cat&amp;id=' . $cat['id']);
        $xtpl->parse('main.loop');
    }
} else {
    $xtpl->parse('main.no_data');
}

$xtpl->assign('LINK_ADD', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=add_cat');

$xtpl->parse('main');
$contents = $xtpl->text('main');

include (NV_ROOTDIR . "/includes/header.php");
echo nv_admin_theme($contents);
include (NV_ROOTDIR . "/includes/footer.php");
