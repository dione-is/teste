<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
<script type="text/javascript">
    var saldo = 1000;

    saldo = saldo -10;
    registro("debito", 10, "moises");

    saldo = saldo -300;
    registro("debito", 300, "Pedro");

    saldo = saldo +700;
    registro("credito", 800, "Ana");

    function registro(operacao, valor, cliente) {
        console.log("tipo"+operacao);
        console.log("valor R$"+valor);
        console.log("responsavel:"+cliente);
        console.log("saldo atual:"+saldo);
        console.log("-----------------------------------");
        
    }

    </script>
    
</body>
</html>
