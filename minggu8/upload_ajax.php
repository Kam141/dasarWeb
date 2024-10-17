<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png");
    $totalFiles = count($_FILES['file']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['file']['name'][$i];
        $file_size = $_FILES['file']['size'][$i];
        $file_tmp = $_FILES['file']['tmp_name'][$i];
        // $file_ext = strtolower(end(explode('.', $file_name)));
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi file yang diizinkan adalah jpg, jpeg, dan png untuk file: " . $file_name;
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file ' . $file_name . ' tidak boleh lebih dari 2 MB.';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "document/" . $file_name);
            echo "File " . $file_name . " berhasil diunggah.<br>";
        } else {
            echo implode(" ", $errors) . "<br>";
        }
    }
}
?>
