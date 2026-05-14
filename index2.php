<?php
    $str = '2026-12-25';
    $msg = '';

    if (($timestamp = strtotime($str)) === false) {
        $msg = "A string ($str) tem problemas";
    } else {
        $msg = "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
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
    <title>Exemplo strtotime()</title>
</head>
<body>
    <h1>Exemplo strtotime()</h1>

    <main>
        <h2><span style="color: red;">A string (Not Good) tem problemas</span></h2>
        <div class="codigo">
            <pre class="codigoEscrita">
                $str = 'Not Good';
                $msg = '';

                if (($timestamp = strtotime($str)) === false) {
                    $msg = "A string ($str) tem problemas";
                } else {
                    $msg = "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
                }
            </pre>
        </div>
        <h2>
            <span style="color: green;">
                <?php
                    echo $msg;
                ?>
            </span>
        </h2>
        <div class="codigo c2">
            <pre class="codigoEscrita">
                $str = '2026-12-25';
                $msg = '';

                if (($timestamp = strtotime($str)) === false) {
                    $msg = "A string ($str) tem problemas";
                } else {
                    $msg = "$str == " . date('l dS \o\f F Y h:i:s A', $timestamp);
                }
            </pre>
        </div>
    </main>

    <footer>
        <a class="l" href="/">Anterior</a>
        <a class="r" href="index3.php">Próximo</a>
    </footer>
</body>
</html>