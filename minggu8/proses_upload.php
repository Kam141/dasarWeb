<?php
// $targetDirectory = "document/";

// if (!file_exists($targetDirectory)) {
//     mkdir($targetDirectory, 0777, true);
// }

// if ($_FILES['files']['name'][0]) {
//     $totalFiles = count($_FILES['files']['name']);

//     for ($i=0; $i < $totalFiles; $i++) { 
//         $fileName = $_FILES['files']['name'][$i];
//         $targetFile = $targetDirectory . $fileName;
        
//         if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
//             echo "File $fileName berhasil diunggah. <br>";
//         } else {
//             echo "Gagal mengunggah file $fileName. <br>";
//         }   
//     }
// } else {
//     echo "Tidak ada file yang diunggah.";
// }


$targetDirectory = "document_Gambar/";
$allowedExtensions = array("jpg", "jpeg", "png", "gif");

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i=0; $i < $totalFiles; $i++) { 
        $fileName = $_FILES['files']['name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;
        
        if (in_array($fileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah. <br>";
            } else {
                echo "Gagal mengunggah file $fileName. <br>";
            }
        } else {
            echo "File $fileName tidak valid atau memiliki tipe yang tidak diizinkan. <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}




?>