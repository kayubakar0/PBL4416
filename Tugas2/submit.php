<?php
    session_start();
    $username = $_POST['username'];
    $_SESSION['namauser'] = $username;
    echo "Nama user Anda adalah: $username<br><br>";
    echo "<a href=hal1.php>Halaman 1</a> <br> <a  href=hal2.php>Halaman 2</a> <br> <a  href=hal3.php>Halalaman 3</a>";
?>

