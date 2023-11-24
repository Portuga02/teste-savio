<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
?>
<?php
include 'contato.class.php';
$contato = new Contato();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $contato->excluirPeloId($id);
}
header("Location: index.php");
