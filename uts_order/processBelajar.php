<?php
/*session_start();


if (isset($_POST['delete_order'])) {
    $order_index = intval($_POST['delete_order']);
    if (isset($_SESSION['orders'][$order_index])) {
        // Hapus pesanan dari session
        $query = "delete * FROM pemesanan where id_pesanan = $order_index ";
        // Eksekusi query
        $stmt = $conn->query($query);
        // Reindex array untuk memastikan urutannya tetap
        
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
        $query = "insert into pemesanan (name, coffee, size, quantity, note) values ('$name', '$coffee', '$size', $quantity, '$note')";
        // Eksekusi query
        $stmt = $conn->query($query);

        // $_SESSION['orders'][] = [
        //     // 'name' => $name,
        //     // 'coffee' => $coffee,
        //     // 'size' => $size,
        //     // 'quantity' => $quantity,
        //     // 'note' => $note

            
        // ];

        echo "Terima Kasih, $name! Orser  mu untuk $quantity $size $coffee telah diterima.";
        if (!empty($note)) {
            echo " Special requests: $note";
        }
    } 
}

// Tampilkan daftar pesanan jika ada
if (!empty($_SESSION['orders'])) {
    $query = "SELECT * FROM pemesanan ";
        // Eksekusi query
        $stmt = $conn->query($query);
        // Ambil semua data dalam bentuk array asosiatif
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    foreach ($_SESSION['orders'] as $results => $order) {
        echo "<tr>
            <td>{$order['name']}</td>
            <td>{$order['coffee']}</td>
            <td>{$order['size']}</td>
            <td>{$order['quantity']}</td>
            <td>{$order['note']}</td>
            <td>
                <p>Success</p>    
            </td>
            <td><button class='delete-btn' data-index='{$result}'>Delete</button></td>

        </tr>";
    }

    echo "</table>";
}else {
    echo "<p>Tidak ada pesanan.</p>";
}*/


session_start();
include 'connection.php'; // Pastikan untuk menyertakan file koneksi database


//untuk menghapus pesanan
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_order'])) {
    $id_pesanan = intval($_POST['delete_order']); // Pastikan ID adalah integer

    // Query untuk menghapus pesanan
    $query = "DELETE FROM pemesanan WHERE id_pesanan = $id_pesanan";
    $stmt = $conn->prepare($query);
    $stmt->bindParam('id_pesanan', $id_pesanan, PDO::PARAM_INT);
    $stmt->execute();

    echo "Pesanan dengan ID $id_pesanan telah dihapus.";
}


//Digunakan untuk menambahkan pesanan
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['delete_order'])) {
    $name = ($_POST['name']);
    $coffee = ($_POST['coffee']);
    $size = ($_POST['size']);
    $quantity = ($_POST['quantity']);
    $note = ($_POST['note']);

    if (!empty($name) && !empty($coffee) && !empty($size) && $quantity > 0) {
        // Simpan pesanan ke dalam database
        $query = "INSERT INTO pemesanan VALUES ('$name', '$coffee', '$size', $quantity, '$note')";
        $stmt = $conn->query($query);

        echo "Terima Kasih, $name! Order mu untuk $quantity $size $coffee telah diterima.";
        if (!empty($note)) {
            echo " Special requests: $note";
        }
    }

    // Tampilkan daftar pesanan jika ada
    $query = "SELECT * FROM pemesanan";
    $stmt = $conn->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

    foreach ($results as $order) {
        echo "<tr>
            <td>{$order['nama']}</td>
            <td>{$order['coffee']}</td>
            <td>{$order['size']}</td>
            <td>{$order['quantity']}</td>
            <td>{$order['note']}</td>
            <td>Success</td>
            <td><form method='post'>
                <button type='submit' id='delete_order' name='delete_order' value='{$order['id_pesanan']}' class='delete_order'>Delete</button>
                </form>
            </td>
        </tr>";
    }

    echo "</table>";
}
