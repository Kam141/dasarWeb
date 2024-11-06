<?php
try {
    $serverName = "LAPTOP-A6N5VPUV"; 
    $database = "cafe";
    
    // DSN (Data Source Name) untuk koneksi PDO
    $dsn = "sqlsrv:Server=$serverName;Database=$database";
    // koneksi menggunakan PDO
    $conn = new PDO($dsn);
    // PDO agar melempar exception jika terjadi error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Koneksi Gagal.<br />";
    die("Error: " . $e->getMessage());
}
?>