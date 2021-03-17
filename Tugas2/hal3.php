<?php
    // session_start();
    include "cek.php";
    echo "Ini adalah halaman 3<br>";
    echo "Nama user Anda adalah: ".$_SESSION['namauser']. "<br><br>";
    echo "<a href=hal1.php>Halaman 1</a> <br> <a  href=hal2.php>Halaman 2</a> <br> <a  href=hal3.php>Halalaman 3</a> <br>";
    echo "<a href=logout.php>Keluar</a>";
?>