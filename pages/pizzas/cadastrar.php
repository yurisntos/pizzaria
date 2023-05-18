<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <form action="salvar.php" method="POST">
        <div class="box_input">
            <label class="text_label" for="">Nome</label>
            <input class="input" type="text" name="nome">
        </div>
        <div class="box_input">
            <label class="text_label" for="">Valor</label>
            <input class="input" type="number" name="valor" step="0.01">
        </div>
        <div class="box_input">
            <label class="text_label" for="">Descrição</label>
            <textarea name="descricao"></textarea> 
        </div>
        <div class="box_input">
            <label class="text_label" for="">Ingredientes</label>
            <textarea class="input" name="ingredientes"></textarea>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>