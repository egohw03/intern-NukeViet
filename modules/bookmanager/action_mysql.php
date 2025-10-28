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

// Insert sample categories
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_categories (title, alias, description, weight, status) VALUES
('Programming', 'programming', 'Books about programming and software development', 1, 1),
('Web Development', 'web-development', 'Books about web development technologies', 2, 1),
('Database', 'database', 'Books about database management', 3, 1),
('Fiction', 'fiction', 'Fiction and literature books', 4, 1)";

// Insert sample books
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books (cat_id, title, alias, author, publisher, publish_year, isbn, description, price, stock_quantity, add_time, status) VALUES
(1, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'clean-code-handbook-agile-software-craftsmanship', 'Robert C. Martin', 'Prentice Hall', 2008, '978-0132350884', 'A must-read for software developers.', 150000.00, 10, " . NV_CURRENTTIME . ", 1),
(1, 'The Pragmatic Programmer', 'pragmatic-programmer', 'David Thomas, Andrew Hunt', 'Addison-Wesley', 1999, '978-0201616224', 'Timeless advice for programmers.', 120000.00, 8, " . NV_CURRENTTIME . ", 1),
(1, 'Design Patterns', 'design-patterns', 'Gang of Four', 'Addison-Wesley', 1994, '978-0201633610', 'Classic design patterns book.', 100000.00, 5, " . NV_CURRENTTIME . ", 1),
(2, 'HTML and CSS: Design and Build Websites', 'html-css-design-build-websites', 'Jon Duckett', 'Wiley', 2011, '978-1118008188', 'Learn HTML and CSS with this visual guide.', 80000.00, 15, " . NV_CURRENTTIME . ", 1),
(2, 'JavaScript: The Definitive Guide', 'javascript-definitive-guide', 'David Flanagan', 'O''Reilly Media', 2020, '978-1491952023', 'Comprehensive guide to JavaScript.', 200000.00, 7, " . NV_CURRENTTIME . ", 1)";
