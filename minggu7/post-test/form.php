<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to external CSS file -->
    <script src=.../minggu5/praktik_jquery/jquery-ui-1.14.0.custom/jquery-ui-1.14.0.custom/jquery-ui.js></script> <!-- Include jQuery -->
</head>
<body>
    <div class="container">
        <h1>Input Jumlah Baris Tabel</h1>
        <form method="POST" action="">
            <label for="rows">Masukkan jumlah baris:</label>
            <input type="number" id="rows" name="rows" min="1" required>
            <button type="submit">Buat Tabel</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rows = intval($_POST["rows"]);
            if ($rows > 0) {
                echo '<table id="dynamicTable">';
                echo '<thead>';
                echo '<tr><th>No</th><th>Nama</th><th>NIM</th></tr>';
                echo '</thead>';
                echo '<tbody>';
                for ($i = 1; $i <= $rows; $i++) {
                    echo "<tr><td>$i</td><td class='editable' data-col='Nama'></td><td class='editable' data-col='NIM'></td></tr>";
                }
                echo '</tbody>';
                echo '</table>';
            }
        }
        ?>
    </div>

    <script>
        $(document).ready(function () {
            $('.editable').click(function () {
                var currentCell = $(this);
                var currentText = currentCell.text();
                var inputField = $('<input type="text" value="' + currentText + '"/>');

                currentCell.html(inputField);

                inputField.focus();
                inputField.blur(function () {
                    var newText = $(this).val();
                    currentCell.text(newText);
                });
            });
        });
    </script>
</body>
</html>
