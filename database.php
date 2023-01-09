<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=upload_js_files;', "root", "Sandisk266");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


