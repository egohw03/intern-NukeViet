<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 19, 2025
 */

if (!defined('NV_IS_FILE_MODULES'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_orders";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_items";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books";

$sql_create_module = $sql_drop_module;

// Categories table
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories (
id INT(11) NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
alias VARCHAR(255) NOT NULL,
description TEXT DEFAULT NULL,
parent_id INT(11) NOT NULL DEFAULT 0,
weight INT(11) NOT NULL DEFAULT 0,
status TINYINT(1) NOT NULL DEFAULT 1,
PRIMARY KEY (id),
KEY idx_parent_id (parent_id),
KEY idx_status (status),
KEY idx_weight (weight)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

// Books table (updated with category_id)
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books (
id INT(11) NOT NULL AUTO_INCREMENT,
cat_id INT(11) NOT NULL DEFAULT 0,
title VARCHAR(255) NOT NULL,
alias VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
publisher VARCHAR(255) DEFAULT NULL,
publish_year INT(4) DEFAULT NULL,
isbn VARCHAR(20) DEFAULT NULL,
description TEXT DEFAULT NULL,
image VARCHAR(255) DEFAULT NULL,
price DECIMAL(15,2) NOT NULL DEFAULT 0.00,
stock_quantity INT(11) NOT NULL DEFAULT 0,
add_time INT(11) NOT NULL,
edit_time INT(11) DEFAULT NULL,
status TINYINT(1) NOT NULL DEFAULT 1,
PRIMARY KEY (id),
KEY idx_cat_id (cat_id),
KEY idx_status (status),
KEY idx_add_time (add_time),
KEY idx_alias (alias)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

// Orders table
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_orders (
id INT(11) NOT NULL AUTO_INCREMENT,
order_code VARCHAR(50) NOT NULL,
customer_name VARCHAR(255) NOT NULL,
customer_email VARCHAR(255) NOT NULL,
customer_phone VARCHAR(20) DEFAULT NULL,
customer_address TEXT NOT NULL,
total_amount DECIMAL(15,2) NOT NULL DEFAULT 0.00,
order_status TINYINT(1) NOT NULL DEFAULT 0,
payment_status TINYINT(1) NOT NULL DEFAULT 0,
payment_method VARCHAR(50) DEFAULT NULL,
order_note TEXT DEFAULT NULL,
add_time INT(11) NOT NULL,
edit_time INT(11) DEFAULT NULL,
PRIMARY KEY (id),
KEY idx_order_code (order_code),
KEY idx_order_status (order_status),
KEY idx_payment_status (payment_status),
KEY idx_add_time (add_time)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

// Order items table
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_items (
id INT(11) NOT NULL AUTO_INCREMENT,
order_id INT(11) NOT NULL,
book_id INT(11) NOT NULL,
quantity INT(11) NOT NULL,
price DECIMAL(15,2) NOT NULL,
PRIMARY KEY (id),
KEY idx_order_id (order_id),
KEY idx_book_id (book_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

// Insert sample categories (Vietnamese)
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories (title, alias, description, weight, status) VALUES
('Lập trình', 'lap-trinh', 'Sách về lập trình và phát triển phần mềm', 1, 1),
('Phát triển Web', 'phat-trien-web', 'Sách về các công nghệ phát triển web', 2, 1),
('Cơ sở dữ liệu', 'co-so-du-lieu', 'Sách về quản lý cơ sở dữ liệu', 3, 1),
('Văn học', 'van-hoc', 'Sách văn học và tiểu thuyết', 4, 1),
('Kinh tế', 'kinh-te', 'Sách về kinh tế và quản trị', 5, 1),
('Khoa học', 'khoa-hoc', 'Sách khoa học và công nghệ', 6, 1),
('Lịch sử', 'lich-su', 'Sách lịch sử và xã hội', 7, 1),
('Giáo dục', 'giao-duc', 'Sách giáo dục và học thuật', 8, 1)";

// Insert sample books (Vietnamese)
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books (cat_id, title, alias, author, publisher, publish_year, isbn, description, price, stock_quantity, add_time, status) VALUES
(1, 'Code sạch: Hướng dẫn về craftsmanship phần mềm linh hoạt', 'code-sach-huong-dan-craftsmanship-phan-mem-linh-hoat', 'Robert C. Martin', 'NXB Khoa học và Kỹ thuật', 2010, '978-6041100000', 'Sách phải đọc cho nhà phát triển phần mềm.', 180000.00, 12, " . NV_CURRENTTIME . ", 1),
(1, 'Lập trình viên thực dụng', 'lap-trinh-vien-thuc-dung', 'David Thomas, Andrew Hunt', 'NXB Thông tin và Truyền thông', 2005, '978-6041200000', 'Lời khuyên vĩnh cửu cho lập trình viên.', 140000.00, 10, " . NV_CURRENTTIME . ", 1),
(1, 'Mẫu thiết kế', 'mau-thiet-ke', 'Gang of Four', 'NXB Bách khoa Hà Nội', 2000, '978-6041300000', 'Sách kinh điển về mẫu thiết kế.', 120000.00, 8, " . NV_CURRENTTIME . ", 1),
(2, 'HTML và CSS: Thiết kế và xây dựng website', 'html-css-thiet-ke-xay-dung-website', 'Jon Duckett', 'NXB Lao động', 2015, '978-6041400000', 'Học HTML và CSS với hướng dẫn trực quan.', 100000.00, 20, " . NV_CURRENTTIME . ", 1),
(2, 'JavaScript: Hướng dẫn toàn diện', 'javascript-huong-dan-toan-dien', 'David Flanagan', 'NXB Giáo dục Việt Nam', 2022, '978-6041500000', 'Hướng dẫn toàn diện về JavaScript.', 220000.00, 15, " . NV_CURRENTTIME . ", 1),
(3, 'MySQL: Hướng dẫn quản trị cơ sở dữ liệu', 'mysql-huong-dan-quan-tri-co-so-du-lieu', 'Paul DuBois', 'NXB Khoa học Xã hội', 2018, '978-6041600000', 'Học quản trị MySQL hiệu quả.', 160000.00, 6, " . NV_CURRENTTIME . ", 1),
(4, 'Chiếc lược ngà', 'chiec-luoc-nga', 'Nam Cao', 'NXB Văn học', 1943, '978-6041700000', 'Tác phẩm kinh điển của văn học Việt Nam.', 50000.00, 25, " . NV_CURRENTTIME . ", 1),
(4, 'Tắt đèn', 'tat-den', 'Ngô Tất Tố', 'NXB Văn học', 1939, '978-6041800000', 'Tiểu thuyết nổi tiếng về nông thôn Việt Nam.', 60000.00, 18, " . NV_CURRENTTIME . ", 1),
(4, 'Số đỏ', 'so-do', 'Vũ Trọng Phụng', 'NXB Văn học', 1936, '978-6041900000', 'Bức tranh xã hội Việt Nam đầu thế kỷ 20.', 70000.00, 14, " . NV_CURRENTTIME . ", 1),
(5, 'Kinh tế vi mô', 'kinh-te-vi-mo', 'N. Gregory Mankiw', 'NXB Tài chính', 2020, '978-6042000000', 'Giáo trình kinh tế vi mô cơ bản.', 200000.00, 9, " . NV_CURRENTTIME . ", 1),
(5, 'Quản trị kinh doanh', 'quan-tri-kinh-doanh', 'Peter Drucker', 'NXB Thương mại', 2015, '978-6042100000', 'Những nguyên tắc quản trị kinh doanh.', 180000.00, 11, " . NV_CURRENTTIME . ", 1),
(6, 'Vũ trụ trong vỏ hạt dẻ', 'vu-tru-trong-vo-hat-de', 'Stephen Hawking', 'NXB Trẻ', 2018, '978-6042200000', 'Khám phá vũ trụ từ góc nhìn khoa học.', 250000.00, 7, " . NV_CURRENTTIME . ", 1),
(6, 'DNA: Bí mật cuộc sống', 'dna-bi-mat-cuoc-song', 'James D. Watson', 'NXB Khoa học và Kỹ thuật', 2016, '978-6042300000', 'Hành trình khám phá cấu trúc DNA.', 190000.00, 13, " . NV_CURRENTTIME . ", 1),
(7, 'Lịch sử Việt Nam', 'lich-su-viet-nam', 'Đào Duy Anh', 'NXB Giáo dục', 2008, '978-6042400000', 'Tổng quan lịch sử dân tộc Việt Nam.', 120000.00, 16, " . NV_CURRENTTIME . ", 1),
(7, 'Cách mạng Pháp', 'cach-mang-phap', 'Georges Lefebvre', 'NXB Khoa học Xã hội', 2012, '978-6042500000', 'Nghiên cứu về cuộc cách mạng Pháp.', 150000.00, 5, " . NV_CURRENTTIME . ", 1),
(8, 'Phương pháp dạy học', 'phuong-phap-day-hoc', 'Jean Piaget', 'NXB Đại học Quốc gia', 2019, '978-6042600000', 'Những nguyên tắc dạy học hiện đại.', 130000.00, 19, " . NV_CURRENTTIME . ", 1),
(8, 'Tâm lý học giáo dục', 'tam-ly-hoc-giao-duc', 'Lev Vygotsky', 'NXB Đại học Sư phạm', 2017, '978-6042700000', 'Áp dụng tâm lý học trong giáo dục.', 170000.00, 12, " . NV_CURRENTTIME . ", 1),
(1, 'Python cho người mới bắt đầu', 'python-cho-nguoi-moi-bat-dau', 'Mark Lutz', 'NXB Bách khoa', 2021, '978-6042800000', 'Hướng dẫn lập trình Python cơ bản.', 110000.00, 22, " . NV_CURRENTTIME . ", 1),
(2, 'React.js: Xây dựng giao diện người dùng', 'react-js-xay-dung-giao-dien-nguoi-dung', 'Alex Banks', 'NXB Công nghệ Thông tin', 2020, '978-6042900000', 'Học React để phát triển web hiện đại.', 210000.00, 8, " . NV_CURRENTTIME . ", 1),
(3, 'MongoDB: Cơ sở dữ liệu NoSQL', 'mongodb-co-so-du-lieu-nosql', 'Kristina Chodorow', 'NXB Khoa học và Kỹ thuật', 2019, '978-6043000000', 'Hướng dẫn sử dụng MongoDB.', 140000.00, 4, " . NV_CURRENTTIME . ", 1),
(4, 'Truyện Kiều', 'truyen-kieu', 'Nguyễn Du', 'NXB Văn học', 1820, '978-6043100000', 'Kiệt tác của văn học Việt Nam.', 80000.00, 30, " . NV_CURRENTTIME . ", 1),
(5, 'Kinh tế học hành vi', 'kinh-te-hoc-hanh-vi', 'Richard Thaler', 'NXB Tài chính', 2018, '978-6043200000', 'Khám phá kinh tế từ góc nhìn tâm lý.', 230000.00, 6, " . NV_CURRENTTIME . ", 1),
(6, 'Lý thuyết tương đối', 'ly-thuyet-tuong-doi', 'Albert Einstein', 'NXB Khoa học và Kỹ thuật', 1916, '978-6043300000', 'Công trình vĩ đại của vật lý hiện đại.', 100000.00, 3, " . NV_CURRENTTIME . ", 1),
(7, 'Lịch sử thế giới', 'lich-su-the-gioi', 'William McNeill', 'NXB Khoa học Xã hội', 2015, '978-6043400000', 'Tổng quan lịch sử nhân loại.', 260000.00, 9, " . NV_CURRENTTIME . ", 1),
(8, 'Giáo dục 4.0', 'giao-duc-4-0', 'Anthony S. Bryk', 'NXB Đại học Quốc gia', 2022, '978-6043500000', 'Tương lai của giáo dục trong kỷ nguyên số.', 195000.00, 17, " . NV_CURRENTTIME . ", 1)";

// Insert sample orders
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_orders (order_code, customer_name, customer_email, customer_phone, customer_address, total_amount, order_status, payment_status, payment_method, order_note, add_time, edit_time) VALUES
('ORD001', 'Nguyễn Văn A', 'nguyenvana@example.com', '0123456789', '123 Đường ABC, Hà Nội', 500000.00, 2, 1, 'COD', 'Giao hàng nhanh', " . (NV_CURRENTTIME - 86400) . ", " . NV_CURRENTTIME . "),
('ORD002', 'Trần Thị B', 'tranthib@example.com', '0987654321', '456 Đường XYZ, TP.HCM', 320000.00, 2, 1, 'Bank Transfer', 'Gói kỹ', " . (NV_CURRENTTIME - 172800) . ", " . NV_CURRENTTIME . "),
('ORD003', 'Lê Văn C', 'levanc@example.com', '0111111111', '789 Đường DEF, Đà Nẵng', 180000.00, 0, 0, 'COD', '', " . NV_CURRENTTIME . ", NULL),
('ORD004', 'Phạm Thị D', 'phamthid@example.com', '0222222222', '321 Đường GHI, Cần Thơ', 750000.00, 2, 1, 'Credit Card', 'Thanh toán online', " . (NV_CURRENTTIME - 259200) . ", " . NV_CURRENTTIME . "),
('ORD005', 'Hoàng Văn E', 'hoangvane@example.com', '0333333333', '654 Đường JKL, Hải Phòng', 400000.00, 3, 0, 'COD', 'Khách hàng hủy', " . (NV_CURRENTTIME - 345600) . ", " . NV_CURRENTTIME . ")";

// Insert sample order items
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_order_items (order_id, book_id, quantity, price) VALUES
(1, 1, 2, 180000.00),
(1, 4, 1, 100000.00),
(1, 5, 1, 220000.00),
(2, 2, 1, 140000.00),
(2, 7, 1, 50000.00),
(2, 8, 1, 60000.00),
(3, 9, 1, 70000.00),
(3, 10, 1, 200000.00),
(4, 3, 1, 120000.00),
(4, 6, 2, 160000.00),
(4, 11, 1, 180000.00),
(4, 12, 1, 250000.00),
(5, 13, 1, 190000.00),
(5, 14, 1, 120000.00)";
