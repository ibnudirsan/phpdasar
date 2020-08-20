<?php
require 'functions.php';
// Koneksi ke database
// $conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submit sudah di klik apa belum
if(isset($_POST["submit"])){

    //cek apakah data berhasil di tambahkan atau tidak
    // var_dump(mysqli_affected_rows($conn));
    // if(mysqli_affected_rows($conn) > 0 ){
    //     echo "berhasil";
    // } else {
    //     echo "Gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }

        if(tambah($_POST) > 0 ) {
            echo    "
                        <script>
                            alert('Data Berhasil ditambahkan');
                            document.location.href = 'index.php'
                        </script>
                    ";
        } else {
            echo "                       
                    <script>
                        alert('Data Gagal ditambahkan');
                        document.location.href = 'index.php'
                    </script>
                ";
        }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Wakif</title>
</head>
<body>
    
    <h1>Tambah Data Wakif</h1>

    <form action="" method="post">
    
        <ul>
                <li>
                        <label for="idwakif">Code :</label>
                        <input type="text" name="idwakif" id="idwakif" required>
                </li>

                <li>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" required>
                </li>

                <li>
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email" required>
                </li>

                <li>
                    <label for="nohp">No.HP</label>
                    <input type="text" name="nohp" id="nohp" required>
                </li>
        
                <li>
                    <label for="gambar">Gambar:</label>
                    <input type="text" name="gambar" id="gambar" required>
                </li>

                <li>
                        <button type="submit" name="submit">Tambah Data</button>
                </li>
        </ul>
    
    

    </form>

</body>
</html>