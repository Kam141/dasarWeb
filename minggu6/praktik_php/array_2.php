<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Dosen</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .table-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                border: 1px solid #ddd;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            tr:hover {
                background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>  
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            // echo "Nama: {$Dosen['nama']} <br>";
            // echo "Domisili: {$Dosen['domisili']} <br>";
            // echo "Jenis Kelamin: {$Dosen['jenis_kelamin']} <br>";
        ?>
        <div class="table-container">
            <h2>Data Dosen</h2>
            <table>
                <tr>
                    <th>Nama</th>
                    <td><?php echo $Dosen['nama']; ?></td>
                </tr>
                <tr>
                    <th>Domisili</th>
                    <td><?php echo $Dosen['domisili']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo $Dosen['jenis_kelamin']; ?></td>
                </tr>
            </table>
            </div>
    </body>
</html>