<?php
    $data1 = new DateTime('2026-01-01');
    $data2 = new DateTime();
    $msg = "";
    
    if ($data1 < $data2) {
        $msg = "A data 1 é no passado em relação à data 2.";
    } else {
        $msg = "A data 1 é no futuro em relação à data 2.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Intel+One+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Exemplo DateTime</title>
</head>
<body>
    <h1>Exemplo DateTime</h1>

    <main>
        <h2>
            <?php
                echo $msg . "<br>";
                echo "Data 1: " . $data1->format("Y/m/d") . "<br>";
                echo "Data 2: " . $data2->format("Y/m/d") . "<br>";
            ?>
        </h2>
        <div class="codigo">
            <pre class="codigoEscrita">
                $data1 = new DateTime('2026-01-01');
                $data2 = new DateTime();
                $msg = "";
                
                if ($data1 < $data2) {
                    $msg = "A data 1 é no passado em relação à data 2.";
                } else {
                    $msg = "A data 1 é no futuro em relação à data 2.";
                }
            </pre>
        </div>
    </main>

    <footer>
        <a class="l" href="index2.php">Anterior</a>
    </footer>
</body>
</html>