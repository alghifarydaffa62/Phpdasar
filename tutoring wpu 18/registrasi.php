<?php 

require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0){
        echo "
            <script>
                alert('Registrasi Berhasil!');
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Selamat Datang di Halaman Registrasi!</h2>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password:</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Sign Up!</button>
            </li>
        </ul>
    </form>
</body>
</html>