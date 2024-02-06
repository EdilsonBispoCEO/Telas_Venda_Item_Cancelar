<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="cancelarItem.css">
    <title>Excluir Venda</title>
    
</head>
<body>
    <div class="container">
        <h2>Cancelar Item</h2>
        <label for="codigoVenda">Código do Item:</label>
        <input type="number" id="codigoVenda" name="codigoVenda" required>
        <br>
        <button class="sim" onclick="excluirItem()">Sim</button>
        <button class="nao" onclick="cancelarExclusao()">Não</button>

        <!-- <button type="button" class="btn btn-success" onclick="excluirVenda()">Sim</button>
        <button type="button" class="btn btn-danger" onclick="cancelarExclusao()">Não</button> -->
    </div>
    

    <script src="cancelarItem.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>