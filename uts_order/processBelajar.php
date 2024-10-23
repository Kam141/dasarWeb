<?php
session_start();


if (isset($_POST['delete_order'])) {
    $order_index = intval($_POST['delete_order']);
    if (isset($_SESSION['orders'][$order_index])) {
        // Hapus pesanan dari session
        unset($_SESSION['orders'][$order_index]);
        // Reindex array untuk memastikan urutannya tetap
        $_SESSION['orders'] = array_values($_SESSION['orders']);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& !isset($_POST['delete_order'])) {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $coffee = isset($_POST['coffee']) ? trim($_POST['coffee']) : '';
    $size = isset($_POST['size']) ? trim($_POST['size']) : '';
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $note = isset($_POST['note']) ? trim($_POST['note']) : '';

    if (!empty($name) && !empty($coffee) && !empty($size) && !empty($quantity)) {
        // Simpan pesanan 
        $_SESSION['orders'][] = [
            'name' => $name,
            'coffee' => $coffee,
            'size' => $size,
            'quantity' => $quantity,
            'note' => $note
        ];

        echo "Terima Kasih, $name! Orser  mu untuk $quantity $size $coffee telah diterima.";
        if (!empty($note)) {
            echo " Special requests: $note";
        }
    } 
}

// Tampilkan daftar pesanan jika ada
if (!empty($_SESSION['orders'])) {
    echo "<h2>Order List</h2>";
     echo "<table class='orderTable' border='1'>
        <tr>
            <th>Name</th>
            <th>Coffee</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Special Request</th>
            <th>Status</th>
            <th>Action</th>
        </tr>";

    foreach ($_SESSION['orders'] as $index => $order) {
        echo "<tr>
            <td>{$order['name']}</td>
            <td>{$order['coffee']}</td>
            <td>{$order['size']}</td>
            <td>{$order['quantity']}</td>
            <td>{$order['note']}</td>
            <td>
                <p>Success</p>    
            </td>
            <td><button class='delete-btn' data-index='{$index}'>Delete</button></td>

        </tr>";
    }

    echo "</table>";
}else {
    echo "<p>Tidak ada pesanan.</p>";
}
?>
