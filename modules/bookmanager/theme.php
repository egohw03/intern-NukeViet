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

/**
 * Theme function for main page
 */
function nv_theme_main($books)
{
    global $module_file, $lang_module, $lang_global, $module_info, $meta_property, $my_head, $client_info, $page_config, $module_name;

    $template = file_exists(NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file . '/main.tpl')
        ? $module_info['template']
        : 'default';

    $xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $template . '/modules/' . $module_file);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    if (!empty($books)) {
        foreach ($books as $book) {
            $book['link'] = NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '&' . NV_OP_VARIABLE . '=detail&id=' . $book['id'];
            $book['image'] = !empty($book['image']) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $book['image'] : '';
            $book['price_format'] = number_format($book['price'], 0, ',', '.') . ' VNĐ';

            $xtpl->assign('BOOK', $book);

            if (!empty($book['image'])) {
                $xtpl->parse('main.book_loop.image');
            } else {
                $xtpl->parse('main.book_loop.no_image');
            }

            $xtpl->parse('main.book_loop');
        }
    } else {
        $xtpl->parse('main.no_books');
    }

    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * Theme function for detail page
 */
function nv_theme_detail($book)
{
    global $module_file, $lang_module, $lang_global, $module_info, $meta_property, $my_head, $client_info, $page_config, $module_name;

    $template = file_exists(NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file . '/detail.tpl')
        ? $module_info['template']
        : 'default';

    $xtpl = new XTemplate('detail.tpl', NV_ROOTDIR . '/themes/' . $template . '/modules/' . $module_file);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);
    $xtpl->assign('BOOK', $book);
    $xtpl->assign('BACK_LINK', NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);

    $book['image'] = !empty($book['image']) ? NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $book['image'] : '';
    $book['price_format'] = number_format($book['price'], 0, ',', '.') . ' VNĐ';

    if (!empty($book['image'])) {
        $xtpl->parse('main.image');
    } else {
        $xtpl->parse('main.no_image');
    }

    if (!empty($book['publisher'])) {
        $xtpl->parse('main.publisher');
    }

    if (!empty($book['publish_year'])) {
        $xtpl->parse('main.publish_year');
    }

    if (!empty($book['isbn'])) {
        $xtpl->parse('main.isbn');
    }

    if (!empty($book['description'])) {
        $xtpl->parse('main.description');
    }

    if ($book['stock_quantity'] > 0) {
        $xtpl->parse('main.in_stock');
    } else {
        $xtpl->parse('main.out_of_stock');
    }

    $xtpl->parse('main');
    return $xtpl->text('main');
}
