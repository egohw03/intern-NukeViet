<?php

// Test script to check module functionality
define('NV_SYSTEM', true);
define('NV_ROOTDIR', dirname(__FILE__));
define('NV_MAINFILE', true);

// Include main config
require_once NV_ROOTDIR . '/includes/mainfile.php';

// Test database connection
try {
    $db = $db_slave ?: $db;
    echo "Database connection: OK<br>\n";

    // Test if tables exist
    $tables_to_check = array(
        NV_PREFIXLANG . '_bookmanager_books',
        NV_PREFIXLANG . '_bookmanager_categories',
        NV_PREFIXLANG . '_bookmanager_orders',
        NV_PREFIXLANG . '_bookmanager_order_items'
    );

    foreach ($tables_to_check as $table) {
        $result = $db->query('SHOW TABLES LIKE "' . $table . '"');
        if ($result->rowCount() > 0) {
            echo "Table $table: EXISTS<br>\n";
        } else {
            echo "Table $table: MISSING<br>\n";
        }
    }

    // Test sample queries
    echo "<br>Testing sample queries:<br>\n";

    // Test categories
    $sql = 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_bookmanager_categories';
    $result = $db->query($sql);
    $count = $result->fetchColumn();
    echo "Categories count: $count<br>\n";

    // Test books
    $sql = 'SELECT COUNT(*) FROM ' . NV_PREFIXLANG . '_bookmanager_books';
    $result = $db->query($sql);
    $count = $result->fetchColumn();
    echo "Books count: $count<br>\n";

    // Test books with categories
    $sql = 'SELECT b.title, c.title as cat_title FROM ' . NV_PREFIXLANG . '_bookmanager_books b LEFT JOIN ' . NV_PREFIXLANG . '_bookmanager_categories c ON b.cat_id = c.id LIMIT 5';
    $result = $db->query($sql);
    echo "Books with categories:<br>\n";
    while ($row = $result->fetch()) {
        echo "- {$row['title']} (Category: {$row['cat_title']})<br>\n";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>\n";
}

echo "<br>Test completed.";
?>
