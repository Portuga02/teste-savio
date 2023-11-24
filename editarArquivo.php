<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
?>
    <?php
    include 'contato.class.php';
    $contato = new Contato();
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        $info = $contato->getInfo($id);
        if (empty($info['email'])) {
            header("Location:index.php");
            exit;
        }
    } else {
        header("Location:index.php");
        exit;
    }
    ?>