<?php

if (!defined('NV_IS_FILE_ADMIN')) die('Stop!!!');

global $module_upload;

$id = $nv_Request->get_int('id', 'get', 0);

if ($id <= 0) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

global $lang_module;

// Check if book exists
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books WHERE id = ' . $id;
$book = $db->query($sql)->fetch();

if (empty($book)) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$page_title = 'Xóa sách: ' . $book['title'];

$errors = [];

if ($nv_Request->isset_request('confirm', 'post')) {
    // Delete image if exists
    if (!empty($book['image'])) {
        $image_path = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $book['image'];
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    // Delete from database
    $sql = 'DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books WHERE id = ' . $id;
    if ($db->exec($sql)) {
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
    } else {
        $errors[] = 'Lỗi khi xóa sách';
    }
}

$contents = '<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Xác nhận xóa sách</h3>
    </div>
    <div class="panel-body">';

if (!empty($errors)) {
    $contents .= '<div class="alert alert-danger">';
    foreach ($errors as $error) {
        $contents .= '<p>' . $error . '</p>';
    }
    $contents .= '</div>';
}

$contents .= '<p>Bạn có chắc chắn muốn xóa sách "<strong>' . $book['title'] . '</strong>" của tác giả "' . $book['author'] . '"?</p>
    <p>Hành động này không thể hoàn tác.</p>
    <form method="post">
        <button type="submit" name="confirm" class="btn btn-danger">Xóa</button>
        <a href="' . NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '" class="btn btn-default">Hủy</a>
    </form>
    </div>
</div>';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
