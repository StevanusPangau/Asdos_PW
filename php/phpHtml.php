<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$varA = 5;
$nama = "Budi";
?>

<body>
    <h1 style="color: blue;"><?= $nama; ?></h1>

    <?php
    if ($varA == 5) {
        echo '<h2 style="color: red;">Ini adalah Angka ' . $varA . '</h2>';
    } else {
        echo "<h2>Ini bukan Angka " . $varA . "</h2>";
    }
    ?>

    <h2><?= "ini adalah H2" ?></h2>
</body>

</html>