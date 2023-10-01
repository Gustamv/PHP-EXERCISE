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
        
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao'

        $dados = json_decode(file_get_contents($url), true);

        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "A cotacao foi $cotacao";

        //Quanto $$ voce tem?
        $real = $_REQUEST["din"] ?? 0;
    ?>
    <br>
    <input type="button" value="Voltar" onclick="history.go(-1)">
    </section>
</body>
</html>

