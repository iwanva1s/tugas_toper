
<?php
$server   = 'localhost';
$username = 'root';
$password = '';
$db = "data_toper_paok";
$con = new mysqli($server, $username, $password,$db);
if ($con) {
    echo '<script>alert("Selamat Datang di Toko Online")</script>';
} else {
    echo 'Koneksi gagal !';
}
?>