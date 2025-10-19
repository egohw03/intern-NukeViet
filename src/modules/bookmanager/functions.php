<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_SYSTEM'))
    die('Stop!!!');

define('NV_IS_MOD_BOOKMANAGER', true);

/**
 * Get books list
 */
function nv_get_books($limit = 10, $offset = 0)
{
    global $db, $nv_Cache, $module_name, $module_data, $lang;

    $cache_file = NV_LANG_DATA . '_books_' . $limit . '_' . $offset . NV_CACHE_PREFIX . '.cache';
    if (($cache = $nv_Cache->getItem($module_name, $cache_file, 3600)) != false) {
        return unserialize($cache);
    }

    $books = array();
    $db->sqlreset()
        ->select('*')
        ->from(NV_PREFIXLANG . '_' . $module_data . '_books')
        ->where('status = 1')
        ->order('add_time DESC')
        ->limit($limit)
        ->offset($offset);

    $result = $db->query($db->sql());
    while ($row = $result->fetch()) {
        $books[] = $row;
    }

    $cache = serialize($books);
    $nv_Cache->setItem($module_name, $cache_file, $cache, 3600);

    return $books;
}

/**
 * Get book by ID
 */
function nv_get_book($id)
{
    global $db, $nv_Cache, $module_name, $module_data, $lang;

    $cache_file = NV_LANG_DATA . '_book_' . $id . NV_CACHE_PREFIX . '.cache';
    if (($cache = $nv_Cache->getItem($module_name, $cache_file, 3600)) != false) {
        return unserialize($cache);
    }

    $db->sqlreset()
        ->select('*')
        ->from(NV_PREFIXLANG . '_' . $module_data . '_books')
        ->where('id = ' . (int)$id . ' AND status = 1');

    $book = $db->query($db->sql())->fetch();

    if ($book) {
        $cache = serialize($book);
        $nv_Cache->setItem($module_name, $cache_file, $cache, 3600);
    }

    return $book;
}

/**
 * Count total books
 */
function nv_count_books()
{
    global $db, $nv_Cache, $module_name, $module_data, $lang;

    $cache_file = NV_LANG_DATA . '_count_books' . NV_CACHE_PREFIX . '.cache';
    if (($cache = $nv_Cache->getItem($module_name, $cache_file, 3600)) != false) {
        return (int)$cache;
    }

    $count = $db->query('SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books WHERE status = 1')->fetchColumn();

    $nv_Cache->setItem($module_name, $cache_file, $count, 3600);

    return (int)$count;
}
