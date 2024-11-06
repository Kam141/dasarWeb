<?php

    include 'connection.php';
    $id_pesanan= ($_SERVER['delete_order']);
    echo $order_index;
    if (isset($_SESSION['orders'][$order_index])) {
        // Hapus pesanan dari database berdasarkan ID pesanan
        $query = "DELETE FROM pemesanan WHERE id_pesanan = $id_pesanan";
        $stmt = $conn->query($query);
    }
    // header('location: order.php');


?>