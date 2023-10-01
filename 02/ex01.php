<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- estrutura de comentario -->
    <?php 
        //capturando os dados do formulario retroalimentado
        $dividendo = $_GET['dividendo'] ?? 1;
        $divisor = $_GET['divisor'] ?? 1;

    ?>
    <main>
        <h1>Anatomia de uma divisao</h1>
        <!-- isso manda os dados pra ele mesmo, se o codigo php soo tiver o comando echo, o "php echo " pode ser substituido por "=" -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <label for="dividendo">Dividendo</label>
            <!-- botar esse value fara com que preencha o valor na caixa-->
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2> resultado da divisao</h2>
        <?php
            $divisao = (int)($dividendo / $divisor);
            $resto = $dividendo - ($divisao * $divisor);
            echo "<p>O quociente da divisao entre $dividendo e $divisor é: <strong>$divisao</strong>
            <br>e o resto é: $resto</p>"

        ?>
    </section>
</body>
</html>