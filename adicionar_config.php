<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

?>
<?php
include 'contato.class.php';
$contato = new Contato();
if (isset($_POST['email']) && empty($_POST['email']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $contato->adicionar($email, $nome);
    header("Location: index.php");
}
?> 