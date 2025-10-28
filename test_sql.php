<?php

// Test SQL syntax
$test_sql = "INSERT INTO nv4_vi_bookmanager_books (cat_id, title, alias, author, publisher, publish_year, isbn, description, price, stock_quantity, add_time, status) VALUES
(1, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'clean-code-handbook-agile-software-craftsmanship', 'Robert C. Martin', 'Prentice Hall', 2008, '978-0132350884', 'A must-read for software developers.', 150000.00, 10, 1729708800, 1)";

echo "Testing SQL syntax...<br>\n";
echo "SQL: " . htmlspecialchars($test_sql) . "<br>\n";

// Check for syntax errors
$errors = array();
if (strpos($test_sql, '\"') !== false) {
    $errors[] = "Found escaped quotes (\") which may cause issues";
}
if (substr_count($test_sql, "'") % 2 != 0) {
    $errors[] = "Unmatched single quotes";
}

if (empty($errors)) {
    echo "<span style='color: green;'>SQL syntax appears correct</span><br>\n";
} else {
    echo "<span style='color: red;'>SQL syntax errors found:</span><br>\n";
    foreach ($errors as $error) {
        echo "- " . $error . "<br>\n";
    }
}

echo "<br>Done.";
?>
