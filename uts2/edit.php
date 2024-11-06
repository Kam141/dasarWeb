<?php
include 'connection.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM pemesanan WHERE id_pesanan = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$kopi = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kopi) {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Order</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Edit Order</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id_pesanan" value="<?= $kopi['id_pesanan'] ?>">
        

        <label for="nama">Name:</label>
        <input type="text" id="nama" name="nama" value="<?= $kopi['nama'] ?>" required>

        <label for="coffee">Choose Coffee:</label>
        <select id="coffee" name="coffee" value="<?= $kopi['coffee'] ?>" required>
            <option value="">Select a coffee</option>
            <option value="espresso">Espresso</option>
            <option value="latte">Latte</option>
            <option value="cappuccino">Cappuccino</option>
            <option value="americano">Americano</option>
        </select>

        <label for="size">Size:</label>
        <select id="size" name="size" value="<?= $kopi['size'] ?>" required>
            <option value="">Select size</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="<?= $kopi['quantity'] ?>"required>

        <label for="note">Special Request:</label>
        <textarea id="note" name="note" rows="4" placeholder="Any special requests?" value="<?= $kopi['note'] ?>"></textarea>

        <button type="submit">Submit Update Order</button>
    </form>
</body>

</html>