<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Page Title</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
</head>

<body>
   <h1>Adicionar</h1>

   <!-- adiciona novos usuários ao banco -->
   <form method="post" action="adicionar_config.php">
      Nome: <br />
      <input type="text" name="nome" /><br /><br />
      Email:<br />
      <input type="email" name="email" /><br /><br />
      <input type="submit" value="Enviar novo cadastro">
   </form>

</body>

</html>