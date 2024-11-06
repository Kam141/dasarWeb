<?php

include 'connection.php';
$id_pesanan = ($_GET['id_pesanan']);
if (isset($_SESSION['orders'][$order_index])) {
    // Hapus pesanan dari database berdasarkan ID pesanan
    // $query = "DELETE FROM pemesanan WHERE id_pesanan = :id_pesanan";
    // $stmt = $conn->query($query);
    $stmt = $conn->prepare("DELETE FROM pemesanan WHERE id_pesanan = :id_pesanan");
    $stmt->bindParam(':id_pesanan', $id_pesanan);

    if ($stmt->execute()) {
        header("Location: indexBelajar.php");
    } else {
        echo "Gagal menghapus data.";
    }
}
// header('location: order.php');
