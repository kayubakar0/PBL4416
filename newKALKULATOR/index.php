<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 
class hitung{
    private int $a;
    private int $b;
    function tambah($a, $b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a + $this->b;
        return $hasil; 
    }
    function kali($a, $b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a * $this->b;
        return $hasil;
    }
    function kurang($a, $b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a - $this->b;
        return $hasil;
    }
    function bagi($a, $b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a / $this->b;
        return $hasil;
    }
    function tampil(){
        ?>
        <div class="container-fluid" align="center" style="width: 60%;">
        <div class="card">
        <div class="card-header">
            KALKULATOR
        </div>
        <div class="card-body">
        <form method="post">
            <input type="text" name="a">
            <select name="operasi">
                <option value="tambah">+</option>
                <option value="kali">*</option>
                <option value="kurang">-</option>
                <option value="bagi">:</option>
            </select>
            <input type="text" name="b">
            <label>=</label>
            <input type="submit" value="Hitung">
        
        <?php
    }
}

$angka = new hitung();
$angka->tampil();

if ($_POST){
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($_POST['operasi'] == "tambah"){
        // echo "Hasil ".$a." + ".$b." = ".$angka->tambah($a, $b)."<br /><br />";
        ?><input type="text" value="<?php echo $angka->tambah($a, $b) ?>"><?php
    } elseif ($_POST['operasi'] == "kali"){
        ?><input type="text" value="<?php echo $angka->kali($a, $b) ?>"><?php
    } elseif ($_POST['operasi'] == "kurang"){
        ?><input type="text" value="<?php echo $angka->kurang($a, $b) ?>"><?php
    } elseif ($_POST['operasi'] == "bagi"){
        ?><input type="text" value="<?php echo $angka->bagi($a, $b) ?>">
        </form>
        </div>
        </div>
        </div>
        <?php
    }
}
?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>