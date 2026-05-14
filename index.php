<?php
    date_default_timezone_set("America/Sao_Paulo");
    $data = "";
    $codigo = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $tipo = $_POST['tipos'];
        switch($tipo){
            case "0":
                $data = date("Y-m-d H:i:s");
                $codigo = 'date("Y-m-d H:i:s")';
                break;
            case "1":
                $data = date("d/m/Y H:i");
                $codigo = 'date("d/m/Y H:i")';
                break;
            case "2":
                $data = "Exemplo_" . date("Y-m-d") . ".txt";
                $codigo = '$dataParaArquivo = date("Y-m-d");<br>$nomeArquivo = "relatorio_" . $dataParaArquivo . ".txt";';
                break;
            case "3":
                $data = date("H:i:s");
                $codigo = 'date("H:i:s")';
                break;
            case "4":
                $data = date("c");
                $codigo = 'date("c")';
                break;
        }
    };
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
    <title>Exemplo de date()</title>
</head>
<body>
    <header>
        <h1>Exemplos de date()</h1>
    </header>
    <form method="POST">
        <select name="tipos" id="tipos">
            <option value="0" <?= (isset($_POST['tipos']) && $_POST['tipos'] == "0") ? 'selected' : '' ?>>Formato Bancos de Dados</option>
            <option value="1" <?= (isset($_POST['tipos']) && $_POST['tipos'] == "1") ? 'selected' : '' ?>>Formato Padrão Brasileiro</option>
            <option value="2" <?= (isset($_POST['tipos']) && $_POST['tipos'] == "2") ? 'selected' : '' ?>>Formato Nome de Arquivos e Logs</option>
            <option value="3" <?= (isset($_POST['tipos']) && $_POST['tipos'] == "3") ? 'selected' : '' ?>>Formato Horário Simples</option>
            <option value="4" <?= (isset($_POST['tipos']) && $_POST['tipos'] == "4") ? 'selected' : '' ?>>Formato Integrações com APIs e JavaScript</option>
        </select>
        <button type="submit" onclick="mudarSelect()" class="mostrar">Mostrar</button>
    </form>
    <div class="exemplo">
        <h2>
            <?php
                if(!$data){
                    echo "";
                } else {
                    echo $data;
                };
            ?>
        </h2>
        <div class="codigo">
            <pre class="codigoEscrita">
                <?php
                    if(!$codigo){
                        echo "";
                    } else {
                        echo $codigo;
                    }
                ?>
            </pre>
        </div>
    </div>
    <footer>
        <a class="r" href="index2.php">Próximo</a>
    </footer>
</body>
</html>