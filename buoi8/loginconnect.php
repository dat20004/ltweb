<?php


try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=sql304.infinityfree.com;dbname=if0_37501868_employee_db", "if0_37501868", "d2208204");
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Optionally: echo 'Server Connected Successfully'; // Uncomment for testing
} catch (PDOException $e) {
    // Handle connection errors
    die("Connection failed: " . $e->getMessage());
}
?>


