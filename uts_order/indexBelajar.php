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
            <form id="orderForm" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

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
            <div id ="orderTable"></div>
        </div>

        <script src="../minggu5/praktik_jquery/jquery-3.7.1.js"></script>
        <script src="scriptBelajar.js"></script>
    </body>
</html>
