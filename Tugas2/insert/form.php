<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Barang</title>
</head>
<body>
    <form action="save.php" method="POST">
        <h2>DATA BARANG</h2>
        <table border="1" cellpadding="0" width="50%">
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input type="text" name="kode" size="20"></td>
            </tr>
            <tr>
                <td>nama barang</td>
                <td>:</td>
                <td><input type="text" name="nama" size="20"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td>:</td>
                <td><input type="text" name="harga" size="20"></td>
            </tr>
            <tr align="center">
                <td colspan="3"><input type="submit" name="save" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>