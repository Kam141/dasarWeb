<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stye.css">
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#kotak").click(function(){
                    $("#kotak2").slideToggle("slow");
                });
            });
        </script>
    </head>
    <body>
        <h1 >Data siswa</h1>
        <div id="kotak">
            <p class="kotak" ><b>Click to show Database</b></p>
        </div>
        <div  id="kotak2">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
                $totalUmur = 0;
                $rata = 0; 
                $siswa = [
                    ['nama' => 'Andi', 'umur' => 15, 'kelas' => '10A', 'alamat' => 'Malang'],
                    ['nama' => 'Siti', 'umur' => 16, 'kelas' => '10B', 'alamat' => 'Batu'],
                    ['nama' => 'Budi', 'umur' => 15, 'kelas' => '10A', 'alamat' => 'Dinoyo'],
                    ['nama' => 'Anton', 'umur' => 25, 'kelas' => '15A', 'alamat' => 'Dinoyo'],
                ];

                foreach ($siswa as $key => $value) {
                    echo "<tr>";
                        echo "<td>" . $value['nama'] . "</td>";
                        echo "<td>" . $value['umur'] . "</td>";
                        echo "<td>" . $value['kelas'] . "</td>";
                        echo "<td>" . $value['alamat'] . "</td>";
                }
                    echo "</tr>";
                foreach($siswa as $key => $value){
                    if (isset($value['umur'])) {
                        $totalUmur += $value['umur'];
                    }
                }
                
                $rata = $totalUmur / count($siswa);

                
                   
            ?>
            
        </table>
        <?php
            echo "<b>" ."Rata-rata umur " . $rata. "</b>";
        ?>
        </div>
        
        
    </body>
</html>