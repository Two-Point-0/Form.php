<?php
// get_data.php - Returns database contents as JSON
$dbFile = 'dummy_database.json';

if (file_exists($dbFile)) {
    $content = file_get_contents($dbFile);
    echo $content;
} else {
    echo json_encode(['users' => [], 'counter' => 0]);
}
?>
