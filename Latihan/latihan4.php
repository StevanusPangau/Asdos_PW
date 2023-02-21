<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>

<body>
    <form action="latihan4Hasil.php" method="post">
        <table>
            <tr>
                <td>
                    <label>Nim : </label>
                </td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nama : </label>
                </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Jenis Kelamin : </label>
                </td>
                <td>
                    <input type="radio" name="jk" value="Laki-Laki">Pria
                    <input type="radio" name="jk" value="Perempuan">Wanita
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Ok">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>