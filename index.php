<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pessoas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", "On");
    include 'contato.class.php';
    $contato = new Contato();
    ?>
    <h1>Pessoas </h1>
    <button><a href="adicionar.php"> Adicionar novo usuário</a> </button>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> Nome</th>
                <th scope="col"> Telefone</th>
                <th scope="col"> CPF</th>
                <th scope="col"> E-mail </th>
                <th scope="col"> Ações </th>
            </tr>
        </thead>
        <?php
        $lista = $contato->getAll();
        foreach ($lista as $item) : // e colocado os dois pontos : para indicar um endforeach
        ?>
            <tr>
                <td> <?php echo $item['id']; ?> </td>
                <td> <?php echo $item['nome']; ?></td>
                <td> <?php echo $item['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $item['id']; ?>"> Editar </a>
                    <a href="excluir.php?id=<?php echo $item['id']; ?>"> Excluir </a>
            </tr>
        <?php
        endforeach;
        ?>


    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>