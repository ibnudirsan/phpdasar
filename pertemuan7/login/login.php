<?php
// Cek apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])){
// cek username dan password
    if(  $_POST["username"]=="admin" && $_POST["password"]=="123"){
// jika benar maka , redirect ke halaman admin
        header("Location:admin.php");
        exit;
    } else {
        // Jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body>
<h1>Login Admin</h1>
<?php if(isset($error)) : ?>
<p style="color: red;font-style: italic;">Username / Password Salah</p>
<?php endif; ?>
<ul>
    <form action="" method="POST">

        <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
        </li>

        <li>
                <label for="pass">Password :</label>
                <input type="password" name="password" id="pass">
        </li>

        <li>
                <button type="submit" name="submit">Login</button>
        </li>
    </form>
</ul>

</body>
</html>