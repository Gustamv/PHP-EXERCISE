
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            var_dump($_GET); //$_GET eh uma variavel global  
            // esse ?? eh o operador de coalescencia nula
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p> Eh um prazer te conhecer, $n $s: Este eh o meu site!";
            // ctrl+shift envolver com abreviacao + abreviacao
        ?>
        
        <p><a href="javascript:History.go(-1)>" Voltar para a pagina anterior></a></p>
    </main>
</body>
</html>