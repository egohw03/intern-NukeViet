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

$page_title = $nv_Lang->getModule('edit_book');

$error = '';
$success = '';

$book = nv_get_book($id);
if (empty($book)) {
    nv_info_die($lang_global['error_404_title'], $lang_global['error_404_title'], $lang_global['error_404_content'], 404);
}

if ($nv_Request->isset_request('submit', 'post')) {
    $title = $nv_Request->get_title('title', 'post', '', 1);
    $author = $nv_Request->get_title('author', 'post', '', 1);
    $publisher = $nv_Request->get_title('publisher', 'post', '');
    $publish_year = $nv_Request->get_int('publish_year', 'post', 0);
    $isbn = $nv_Request->get_title('isbn', 'post', '');
    $description = $nv_Request->get_textarea('description', 'post', '', 'br');
    $status = $nv_Request->get_int('status', 'post', 1);

    if (empty($title)) {
        $error = $lang_module['error_title'];
    } elseif (empty($author)) {
        $error = $lang_module['error_author'];
    } else {
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_books SET
            title = ' . $db->quote($title) . ',
            author = ' . $db->quote($author) . ',
            publisher = ' . $db->quote($publisher) . ',
            publish_year = ' . intval($publish_year) . ',
            isbn = ' . $db->quote($isbn) . ',
            description = ' . $db->quote($description) . ',
            edit_time = ' . NV_CURRENTTIME . ',
            status = ' . intval($status) . '
        WHERE id = ' . $id;

        if ($db->query($sql)) {
            $nv_Cache->delMod($module_name);
            $success = $nv_Lang->getModule('success_edit');
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
        } else {
            $error = $nv_Lang->getModule('error_save');
        }
    }
}

$tpl = new \NukeViet\Template\NVSmarty();
$tpl->setTemplateDir(get_module_tpl_dir('edit.tpl'));
$tpl->assign('LANG', $nv_Lang);
$tpl->assign('GLANG', $lang_global);
$tpl->assign('FORM_ACTION', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=edit&id=' . $id);
$tpl->assign('CANCEL_LINK', NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
$tpl->assign('BOOK', $book);
$tpl->assign('CHECKED_ACTIVE', $book['status'] ? 'checked' : '');
$tpl->assign('CHECKED_INACTIVE', !$book['status'] ? 'checked' : '');
$tpl->assign('ERROR', $error);
$tpl->assign('SUCCESS', $success);

$contents = $tpl->fetch('edit.tpl');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
