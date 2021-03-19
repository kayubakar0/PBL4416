<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <h1>Loop For</h1>
    <?php
        for($bil = 1; $bil <= 5; $bil++){
            for($bil2 = 1; $bil2 <= $bil; $bil2++){
                echo($bil);
            }
            echo("<br>");
        }
    ?>
    <h1>While Loop</h1>
    <?php
        $i = 1;
        while($i <= 5){
            $j = 1;
            while($j <= $i){
                echo($i);
                $j++;
            }
            $i++;
            echo("<br>");
        } 
    ?>
    <h1>Faktorial For</h1>
    <?php
        $faktorial = 1;
        $i = 0;
        for ($angka = 5; $angka>=1; $angka--){
            $faktorial *= $angka;
            $i++;
        }
        echo ("faktorial $i adalah $faktorial") 
    ?>
    <h1>Faktorial While</h1>
    <?php
        $angka = 5;
        $faktorial=1;
        $i = 0;
        while($angka >= 1){
            $faktorial *= $angka;
            $angka--;
            $i++;
        }
        echo ("faktorial $i adalah $faktorial")
    ?>
    <h1>Faktorial Do While</h1>
    <?php
        $bil = 5;
        $faktorial = 1;
        $i = $bil;
        do{
            $faktorial *= $i--;
        }
        while($i>=1);
        echo ("faktorial $bil adalah $faktorial")
    ?>
</body>
</html>