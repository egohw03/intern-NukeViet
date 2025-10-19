<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES., JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES ., JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Dec 3, 2010  11:23:15 AM
 */

if (!defined('NV_IS_MOD_POSTART')) {
    die('Stop!!!');
}

function nv_list_post($array_data)
{
    global $lang_module, $module_info;
    $xtpl = new XTemplate("main.tpl", NV_ROOTDIR . "/themes/" . $module_info['template'] . "/modules/" . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('NV_BASE_SITEURL', NV_BASE_SITEURL);
    $xtpl->assign('TITLE', "Demo module");

    if (!empty($array_data)) {
        foreach ($array_data as $item) {
            $xtpl->assign('ROW', $item);
            $xtpl->parse('main.loop');
        }
    } else {
        $xtpl->parse('main.nodata');
    }
    $xtpl->parse('main');
    return $xtpl->text('main');
}
