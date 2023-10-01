<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $num =  $_GET['numero'] ?? 0;
            $raiz2 =pow($num,1/2);
            $raiz3 =pow($num,1/3);
        ?>

        <h1>Informe um numero</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="numero">Numero (R$)</label>
        <input type="number" name="numero" id="numero" value="<?=$salario?>">
        <input type="submit" value="Calcular Raizes">
<li></li>
        </form>

        <section>
            <?php
                echo "Analisando o <strong>numero $num</strong>, temos 
                <br>
                <ul>
                <li>A raiz quadrada é <strong>" . number_format($raiz2, 3, ",", ".") . "</strong></li>
                <li>A raiz cubica é <strong> " . number_format($raiz3, 3, ",", ".") . "</strong></li>"

            ?>
        </section>
    </main>
    
</body>
</html>