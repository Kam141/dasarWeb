<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP dan jQuery</title>
        <script src="../minggu5/praktik_jquery/jquery-3.7.1.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form action="proses_validasi.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span>
            <br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span>
            <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span>
            <br>

            <input type="submit" value="Submit">
        </form>
        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    var $nama = $("#nama").val();
                    var $email = $("#email").val();
                    var $password = $("#password").val();
                    var valid = true; 

                    if (nama === "") {
                        $("#nama-error").html("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").html("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }
                    
                    // Validasi Password (minimal 8 karakter)
                    if ($password.length < 8) {
                        $("#password-error").html("Password minimal harus 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }

                    // Jika validasi berhasil, kirim data menggunakan AJAX
                    if (valid) {
                        $.ajax({
                            url: "proses_validasi.php", // File PHP untuk memproses data
                            type: "POST",
                            data: {
                                nama: $nama,
                                email: $email,
                                password: $password
                            },
                            success: function(response) {
                                // Tampilkan respons dari server di div result
                                $("#result").html(response);
                            },
                            error: function() {
                                $("#result").html("Terjadi kesalahan saat mengirim data.");
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>