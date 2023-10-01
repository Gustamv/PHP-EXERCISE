<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
    <h1>Resultado Final</h1> <br>
    <?php 

    $cotacao = 5.22;

    $real = $_GET["reais"];

    //formatar para o padrao brasileiro
    $dolar = number_format($real/$cotacao, 2, ",", ".");
    $real = number_format($real, 2, ",", ".");
    $cotacao = number_format($cotacao, 2, ",", ".");

    echo "Seus R$ $real equivalem a <strong>US$ $dolar </strong><br><br>";
    echo "<strong>Cotacao fixa de R$ $cotacao</strong> informada diretamente no codigo<br>";
    ?>
    <br>
    <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>
