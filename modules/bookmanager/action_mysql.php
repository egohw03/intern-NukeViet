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
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books (
id INT(11) NOT NULL AUTO_INCREMENT,
title VARCHAR(255) NOT NULL,
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
  KEY idx_status (status),
  KEY idx_add_time (add_time)
) ENGINE=MyISAM DEFAULT CHARSET=utf8";

// Insert sample data
$sql_create_module[] = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_" . $module_data . "_books (title, author, publisher, publish_year, isbn, description, price, stock_quantity, add_time, status) VALUES
('Clean Code: A Handbook of Agile Software Craftsmanship', 'Robert C. Martin', 'Prentice Hall', 2008, '978-0132350884', 'A must-read for software developers.', 150000.00, 10, " . NV_CURRENTTIME . ", 1),
('The Pragmatic Programmer', 'David Thomas, Andrew Hunt', 'Addison-Wesley', 1999, '978-0201616224', 'Timeless advice for programmers.', 120000.00, 8, " . NV_CURRENTTIME . ", 1),
('Design Patterns', 'Gang of Four', 'Addison-Wesley', 1994, '978-0201633610', 'Classic design patterns book.', 100000.00, 5, " . NV_CURRENTTIME . ", 1)";
