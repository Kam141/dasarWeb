<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_pesanan'];
    $nama = $_POST['nama'];
    $coffee = $_POST['coffee'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $note = $_POST['note'];

    $stmt = $conn->prepare("UPDATE pemesanan SET nama = :nama, coffee = :coffee, size = :size, quantity = :quantity, note = :note WHERE id_pesanan = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':coffee', $coffee);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':note', $note);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>