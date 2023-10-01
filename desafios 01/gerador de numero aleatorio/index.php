<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
        <h1>Trabalhando com numero aleatorios</h1>
        <p>Gerando um numero aleatorio entre 0 e 100...</p>
        <?php 
        // random_int() gera numeros aleatorios criptograficamente seguros, eh lento porem seguro
            $numero = mt_rand(0, 100);
            echo "O valor gerado foi:  <strong>$numero</strong>";
        ?>

        <input type="button" value="Gerar outro" onclick="location.reload()">
    </section>
    
</body>
</html>