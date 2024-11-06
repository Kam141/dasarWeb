<?php
include 'connection.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM pemesanan WHERE id_pesanan = :id");
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>