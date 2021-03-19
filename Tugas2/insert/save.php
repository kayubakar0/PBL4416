<?php 
    $koneksi = mysqli_connect("localhost", "root", "", "tugas2pbl");
    if(isset($_POST['save']))
    {
        $ckode = $_POST['kode'];
        $cnama = $_POST['nama'];
        $charga = $_POST['harga'];
        $simpan = "INSERT INTO databarang (kode,nama,harga) VALUES ('$ckode', '$cnama', '$charga')";

        $berhasil = mysqli_query($koneksi, $simpan);
        if($berhasil)
        {
            echo "Data Berhasil disimpan";
        }else{
            echo "Gagal";
        }
    }
?>