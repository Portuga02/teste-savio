<?php
include 'editarArquivo.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Configurações de Edição</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form method="POST" action="editar_config.php">
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>" /><br /><br />
        Nome:<br />
        <input type="text" name="nome" value="<?php echo $info['nome']; ?>" /> <br /><br /><br /><br />
        E-mail :<br />
        <input type="email" name="email" value="<?php echo $info['email']; ?>" /> <br /><br /><br /><br />
        <input type="submit" value="Clique aqui para editar" />
    </form>
</body>

</html>
<h1>Editar</h1>