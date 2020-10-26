<?php 

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

session_start();

$_SESSION["nome"] = $nome;
$_SESSION["email"] = $email;
$_SESSION["telefone"] = $telefone;
$_SESSION["senha"] = $senha;

header("location:sessao.php");

?>

<!-- Crie uma pagina HTML com um formulário com os seguintes campos: nome, e-mail, telefone e senha envie o post deste formulário para a página: converter.php, que tem a função de ler estes parâmetros e de converter para variáveis de sessão do mesmo nome.

Em seguida redirecione a navegação para a página: sessao.php que vai ler as variaveis de sessão e vai imprimit na tela as variavies de sessão NOME, EMAIL, TELEFONE e SENHA -->