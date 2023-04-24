<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvar.php" method="POST">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="">Valor</label>
            <input type="number" name="valor" step="0.01">
        </div>
        <div>
            <label for="">Descrição</label>
            <textarea name="descricao"></textarea> 
        </div>
        <div>
            <label for="">Ingredientes</label>
            <textarea name="ingredientes"></textarea>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>