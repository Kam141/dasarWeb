<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $coffee = $_POST['coffee'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $note = $_POST['note'];

    $stmt = $conn->prepare("INSERT INTO pemesanan (nama, coffee, size, quantity, note) VALUES (:nama, :coffee, :size, :quantity, :note)");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':coffee', $coffee);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':note', $note);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data.";
    }
}
?>