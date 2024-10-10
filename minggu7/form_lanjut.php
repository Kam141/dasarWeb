<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form action="proses_lanjut.php" method="post">
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang"></option>
                <option value="mangga">Mangga</option>
                <option value="Jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih warna Favorit</label><br>
            <input type="checkbox" name="warna[]" value="merah">Merah <br>
            <input type="checkbox" name="warna[]" value="biru">Biru <br>
            <input type="checkbox" name="warna[]" value="hijau">Hijau <br>

            <br>
            <label>Pilih Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <br>
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>

            <br>

            <input type="submit" name="submit" value="Kirim">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selectedBuah = $_POST["buah"];

                if (isset($_POST['warna'])) {
                    $selectedWarna = $_POST['warna'];
                } else {
                    $selectedWarna = [];
                }
                
                $selectedKelamin = $_POST['jenis_kelamin'];

                echo "Anda memilih buah: " . $selectedBuah . "<br>";

                if (!empty($selectedWarna)) {
                    echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
                } else {
                    echo "Anda tidak memilih warna favorit. <br>";
                }
                
            }
        ?>
    </body>
</html>