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
            $minimo = 1380;
            $salario = $_GET['salario'] ?? 0;
        ?>

        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="salario">Salário (R$)</label>
        <input type="number" name="salario" id="salario" value="<?=$salario?>">
        <input type="submit" value="Calcular">

        </form>

        <section>
            <?php
                $divisao = (int)($salario / 1380);
                $resto = $salario - ($divisao * $minimo);
                echo "<p>quem recebe um salário de R$ ". number_format($salario, 2, ",", ".") ." ganha <strong>$divisao salários mínimos</strong> + R$ " . number_format($resto, 2, ",", ".") . "</p>"

            ?>
        </section>
    </main>
    
</body>
</html>