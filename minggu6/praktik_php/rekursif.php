<?php
// function tampilkanHaloDunia() {
//     echo "Hello dunia! <br>";
//     tampilkanHaloDunia();
// }
    
// tampilkanHaloDunia();

// function tampilkanAngka(int $jumlah, int $indeks = 1){
//     echo "Perulangan ke-{$indeks} <br>";

//     if($indeks < $jumlah){
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "kuliner"
            ],
            [
                "nama" => "hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"        
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampikanMenuBertingkat (array $menu){
echo "<ul>";
foreach($menu as $key => $item){
    echo "<li> {$item['nama']} </li>";
}
echo "</ul>";
}

tampikanMenuBertingkat($menu);
?>