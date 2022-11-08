<?php
$errors = array();
//verifica se o verbo é post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //cria ou abre o arquivo para escrita
  $handle = fopen('emails.txt', 'a');
  //obtém o campo nome
  $nome = $_POST['nome'];
  if (empty($nome)) {
    array_push($errors, "Nome é obrigatório.");
    $_SESSION['error'] = "Nome é obrigatório.";
  }

  //obtém o campo email
  $email = $_POST['email'];
  if (empty($email)) {
    array_push($errors, "Email é obrigatório.");
    $_SESSION['error'] = "Email é obrigatório.";
  } else {
    //se o campo e-mail existir, salva um cookie com o valor
    setcookie("email", $email);
  }

  //monta uma string com o nome e o email para salvar no documento
  $string = $nome . ";" . $email . "\r\n";

  //escreve o nome e o email no documento
  $result = fwrite($handle, $string);
  //fecha o arquivo
  fclose($handle);

  //se a quantidade de bytes for 0 ou menos
  if ($result <= 0) {
    array_push($errors, "Não foi possível salvar os dados.");
  }

  if (count($errors) == 0) {
    header('location: sucesso.php');
  } else {
    header("location: erro.php");
  }
} else {
  header("location: erro.php");
}
