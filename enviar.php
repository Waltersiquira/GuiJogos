<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuiJogos</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $n = $_POST['nome'];
    $p = $_POST['preco'];
    $d = $_POST['descricao'];
    $i = $_POST['imagem'];
    if ($l->query("INSERT INTO `jogos` (`id`, `nome`, `descrição`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$d', '$p', '$i')") == true){
        echo "jogo adcionado com sucesso";
    } else {
        echo 'erro a inserir dados';
    }
    ?>
</body>
</html>