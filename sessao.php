<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW 12 - Exibir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    session_start();

    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    $telefone = $_SESSION["telefone"];
    $senha = $_SESSION["senha"];
    ?>

    <ul class="li"><?php echo $nome ?></ul>
    <ul class="li"><?php echo $email ?></ul>
    <ul class="li"><?php echo $telefone ?></ul>
    <ul class="li"><?php echo $senha ?></ul>

    <?php session_destroy(); ?>

</body>
</html>
<!-- Crie uma pagina HTML com um formulário com os seguintes campos: nome, e-mail, telefone e senha envie o SESSION deste formulário para a página: converter.php, que tem a função de ler estes parâmetros e de converter para variáveis de sessão do mesmo nome.

Em seguida redirecione a navegação para a página: sessao.php que vai ler as variaveis de sessão e vai imprimit na tela as variavies de sessão NOME, EMAIL, TELEFONE e SENHA -->