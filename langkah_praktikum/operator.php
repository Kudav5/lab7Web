<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji * $pajak);
    echo "gaji sebelum pajak = Rp. $gaji <br>";
    echo "gaji yang dibawa pulang = Rp. $thp"; 
    ?>
</body>
</html>