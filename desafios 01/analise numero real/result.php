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
    // Verifica se o valor do campo "n" está definido

    $nReal = $_GET["n"];
    
    echo "Analisando o numero <strong>" . number_format($nReal, 3, ",", ".") . "</strong> informadao pelo usuario<br><br>";


    // agora criei as variaveis que irao pegar a parte inteira e a parte fracionaria para compor os proximos echos
    //Pode ser assim $nInt = floor($nReal);, ou:
    $nInt = (int) $nReal;
    //formatar dessa forma para que fique no padrao br de usar . e ,
    $nDecimal = number_format($nReal - $nInt, 3, ",", ".");


    echo "A parte inteira do numero eh <strong>" . number_format($nInt, 0, ",", ".") . "</strong><br>";
    echo "A parte fracionaria do numero eh <strong>$nDecimal</strong><br>";
    ?>
    <br>
    <button onclick="history.go(-1)">Voltar</button>
    </section>
</body>
</html>
