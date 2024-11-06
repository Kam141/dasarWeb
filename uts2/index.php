<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Order Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'connection.php';
    ?>
    <div class="container">
        <h1>Order Your Coffee</h1>
        <form id="orderForm" method="POST" action="create.php">
            <label for="nama">Name:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="coffee">Choose Coffee:</label>
            <select id="coffee" name="coffee" required>
                <option value="">Select a coffee</option>
                <option value="espresso">Espresso</option>
                <option value="latte">Latte</option>
                <option value="cappuccino">Cappuccino</option>
                <option value="americano">Americano</option>
            </select>

            <label for="size">Size:</label>
            <select id="size" name="size" required>
                <option value="">Select size</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="note">Special Request:</label>
            <textarea id="note" name="note" rows="4" placeholder="Any special requests?" value=""></textarea>

            <button type="submit">Submit Order</button>
        </form>
        <?php
        include 'connection.php';

        // Mengambil semua data obat
        $stmt = $conn->query("SELECT * FROM pemesanan");
        $order = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // 
        ?>
        <!-- <div id="orderTable"> -->
        <h1>Daftar cafee</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama </th>
                <th>coffee</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Request</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($order as $kopi): ?>
                <tr>
                    <td><?php echo  $kopi['id_pesanan'] ?></td>
                    <td><?= $kopi['nama'] ?></td>
                    <td><?= $kopi['coffee'] ?></td>
                    <td><?= $kopi['size'] ?></td>
                    <td><?= $kopi['quantity'] ?></td>
                    <td><?= $kopi['note'] ?></td>
                    <td>
                        <button><a href="edit.php?id=<?= $kopi['id_pesanan'] ?>">Edit</a> </button>

                        <button> <a href="delete.php?id=<?= $kopi['id_pesanan'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a></button>

                    </td>
                </tr>
            <?php endforeach; 
            ?>
        </table>
    </div>
    <!-- </div> -->

    <!-- <script src="../cafe-order/jquery-3.7.1.js"></script> -->

    <!-- <script src="scriptBelajar.js"></script> -->
</body>

</html>