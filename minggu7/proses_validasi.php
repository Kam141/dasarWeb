<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();
    $password = $_POST["password"];


    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?>