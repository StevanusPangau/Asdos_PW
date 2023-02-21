<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <center>
        <table border="1">
            <tr>
                <th>n</th>
                <th>3n</th>
            </tr>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $i * 3; ?></td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>