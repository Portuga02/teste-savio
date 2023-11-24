<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");




include 'contato.class.php';
$contato = new Contato();

if (isset($_POST['id']) && empty($_POST['id']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $id = addslashes($_POST['id']);
    if (!empty($email)) {
        $contato->editar($nome, $email, $id);
    }
    header("Location :index.php");
}

?>