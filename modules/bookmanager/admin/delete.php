<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_IS_FILE_ADMIN'))
    die('Stop!!!');

global $nv_Request, $module_name, $module_data, $nv_Lang;

$id = $nv_Request->get_int('id', 'get', 0);
if ($id <= 0) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$book = nv_get_book($id);
if (empty($book)) {
    nv_info_die($lang_global['error_404_title'], $lang_global['error_404_title'], $lang_global['error_404_content'], 404);
}

if ($nv_Request->isset_request('confirm', 'post')) {
    $sql = 'DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books WHERE id = ' . $id;
    if ($db->query($sql)) {
        $nv_Cache->delMod($module_name);
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
    } else {
        $error = $nv_Lang->getModule('error_save');
    }
}

$page_title = $nv_Lang->getModule('delete_book');

$tpl = new \NukeViet\Template\NVSmarty();
$tpl->setTemplateDir(get_module_tpl_dir('delete.tpl'));
$tpl->assign('LANG', $nv_Lang);
$tpl->assign('GLANG', $lang_global);
$tpl->assign('FORM_ACTION', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=delete&id=' . $id);
$tpl->assign('CANCEL_LINK', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
$tpl->assign('BOOK', $book);
$tpl->assign('ERROR', $error);

$contents = $tpl->fetch('delete.tpl');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
