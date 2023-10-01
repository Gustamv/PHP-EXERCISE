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
        $nota1 = $_GET['n1'] ?? 1;
        $nota2 = $_GET['n2'] ?? 1;

    ?>
    <main>
        <h1>Calcular media</h1>
        <!-- isso manda os dados pra ele mesmo, se o codigo php soo tiver o comando echo, o "php echo " pode ser substituido por "=" -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

            <label for="dividendo">Primeira nota</label>
            <!-- botar esse value fara com que preencha o valor na caixa-->
            <input type="number" name="n1" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Sugenda nota</label>
            <input type="number" name="n2" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2> RESULTADO</h2>
        <?php
            $media = ($nota1 + $nota2)/2;
            
            if($media >= 7) {
                echo "Como a media foi $media, aluno Aprovado!";
            }
            elseif($media < 7 && $media > 5) {
                echo "Como a media foi $media, aluno em recuperação";
            }
            else {
                echo "Como a media foi $media, aluno Reprovado!";
            }

        ?>
    </section>
</body>
</html>