<?php

if (!defined('NV_IS_FILE_ADMIN')) die('Stop!!!');

global $module_upload;

use NukeViet\Files\Upload;

$id = $nv_Request->get_int('id', 'get', 0);

if ($id <= 0) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

global $lang_module;

$page_title = 'Sửa sách';

// Load book data
$sql = 'SELECT * FROM ' . NV_PREFIXLANG . '_' . $module_data . '_books WHERE id = ' . $id;
$book = $db->query($sql)->fetch();

if (empty($book)) {
    nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
}

$errors = [];

if ($nv_Request->isset_request('submit', 'post')) {
    $book['title'] = $nv_Request->get_title('title', 'post', '');
    $book['author'] = $nv_Request->get_title('author', 'post', '');
    $book['publisher'] = $nv_Request->get_title('publisher', 'post', '');
    $book['publish_year'] = $nv_Request->get_int('publish_year', 'post', 0);
    $book['isbn'] = $nv_Request->get_title('isbn', 'post', '');
    $book['description'] = $nv_Request->get_textarea('description', '', NV_ALLOWED_HTML_TAGS);
    $book['price'] = $nv_Request->get_float('price', 'post', 0);
    $book['stock_quantity'] = $nv_Request->get_int('stock_quantity', 'post', 0);
    $book['status'] = $nv_Request->get_int('status', 'post', 1);

    // Validate
    if (empty($book['title'])) {
        $errors[] = 'Vui lòng nhập tiêu đề sách';
    }
    if (empty($book['author'])) {
        $errors[] = 'Vui lòng nhập tác giả';
    }

    // Upload new image if provided
    if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        // Delete old image
        if (!empty($book['image'])) {
            $old_image_path = NV_UPLOADS_REAL_DIR . '/' . $module_upload . '/' . $book['image'];
            if (file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        }

        $upload = new Upload($upload_info = [
            'nv_path' => NV_UPLOADS_DIR . '/' . $module_upload,
            'path' => '',
            'maxfile' => '',
            'type' => ''
        ], $global_config['forbid_extensions'], $global_config['forbid_mimes'], NV_UPLOAD_MAX_FILESIZE, NV_MAX_WIDTH, NV_MAX_HEIGHT);

        $upload->setLanguage($nv_Lang);

        $upload_info = $upload->save_file($_FILES['image'], NV_UPLOADS_REAL_DIR . '/' . $module_upload, false, $global_config['auto_resize']);

        if (empty($upload_info['error'])) {
            $book['image'] = $upload_info['basename'];
        } else {
            $errors[] = $upload_info['error'];
        }
    }

    if (empty($errors)) {
        $sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_books SET title = :title, author = :author, publisher = :publisher, publish_year = :publish_year, isbn = :isbn, description = :description, image = :image, price = :price, stock_quantity = :stock_quantity, edit_time = :edit_time, status = :status WHERE id = :id';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $book['title'], PDO::PARAM_STR);
        $stmt->bindParam(':author', $book['author'], PDO::PARAM_STR);
        $stmt->bindParam(':publisher', $book['publisher'], PDO::PARAM_STR);
        $stmt->bindParam(':publish_year', $book['publish_year'], PDO::PARAM_INT);
        $stmt->bindParam(':isbn', $book['isbn'], PDO::PARAM_STR);
        $stmt->bindParam(':description', $book['description'], PDO::PARAM_STR);
        $stmt->bindParam(':image', $book['image'], PDO::PARAM_STR);
        $stmt->bindParam(':price', $book['price'], PDO::PARAM_STR);
        $stmt->bindParam(':stock_quantity', $book['stock_quantity'], PDO::PARAM_INT);
        $stmt->bindValue(':edit_time', NV_CURRENTTIME, PDO::PARAM_INT);
        $stmt->bindParam(':status', $book['status'], PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
        } else {
            $errors[] = 'Lỗi khi cập nhật dữ liệu';
        }
    }
}

$contents = '<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Sửa sách</h3>
    </div>
    <div class="panel-body">';

if (!empty($errors)) {
    $contents .= '<div class="alert alert-danger">';
    foreach ($errors as $error) {
        $contents .= '<p>' . $error . '</p>';
    }
    $contents .= '</div>';
}

$contents .= '<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tiêu đề</label>
        <input type="text" class="form-control" name="title" value="' . htmlspecialchars($book['title']) . '" required>
    </div>
    <div class="form-group">
        <label>Tác giả</label>
        <input type="text" class="form-control" name="author" value="' . htmlspecialchars($book['author']) . '" required>
    </div>
    <div class="form-group">
        <label>Nhà xuất bản</label>
        <input type="text" class="form-control" name="publisher" value="' . htmlspecialchars($book['publisher']) . '">
    </div>
    <div class="form-group">
        <label>Năm xuất bản</label>
        <input type="number" class="form-control" name="publish_year" value="' . $book['publish_year'] . '">
    </div>
    <div class="form-group">
        <label>ISBN</label>
        <input type="text" class="form-control" name="isbn" value="' . htmlspecialchars($book['isbn']) . '">
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" name="description" rows="5">' . htmlspecialchars($book['description']) . '</textarea>
    </div>
    <div class="form-group">
    <label>Hình ảnh hiện tại</label><br>';
if (!empty($book['image'])) {
    $image_url = NV_BASE_SITEURL . NV_UPLOADS_DIR . '/' . $module_upload . '/' . $book['image'];
    $contents .= '<img src="' . $image_url . '" style="max-width: 200px;"><br>';
}
$contents .= '        <label>Upload hình ảnh mới (để trống nếu không thay đổi)</label>
    <input type="file" class="form-control" name="image" accept="image/*">
    </div>
    <div class="form-group">
    <label>Giá bán (VNĐ)</label>
    <input type="number" class="form-control" name="price" value="' . $book['price'] . '" step="0.01" min="0" required>
    </div>
    <div class="form-group">
    <label>Số lượng tồn kho</label>
        <input type="number" class="form-control" name="stock_quantity" value="' . $book['stock_quantity'] . '" min="0" required>
    </div>
    <div class="form-group">
        <label>Trạng thái</label>
        <select class="form-control" name="status">
            <option value="1" ' . ($book['status'] == 1 ? 'selected' : '') . '>Hoạt động</option>
            <option value="0" ' . ($book['status'] == 0 ? 'selected' : '') . '>Không hoạt động</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
    <a href="' . NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name . '" class="btn btn-default">Hủy</a>
</form>
    </div>
</div>';

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
