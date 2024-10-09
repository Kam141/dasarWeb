<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Input</title>
    </head>
    <body>

        <h2>Form Input</h2>
        <form method="POST" action="">
            <label for="input">Masukkan teks:</label>
            <input type="text" id="input" name="input" required><br><br>

            <label for="email">email: </label>
            <input type="text" id="email" name="email" required><br><br>
            
            <button type="submit">Kirim</button>    
        </form>
        

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $input = $_POST['input'];
                $email = $_POST['email'];

                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

                

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email = filter_var($email, FILTER_VALIDATE_EMAIL, 'UTF-8');
                    echo "<h3>Input yang aman: </h3>";
                    echo "<p>" . $email . "</p>";
                    echo "<h3>Input yang aman: </h3>";
                    echo "<p>" . $input . "</p>";
                } else {
                    echo "input tidak valid";
                }
            }
            
            
            
        ?>

    </body>
</html>
