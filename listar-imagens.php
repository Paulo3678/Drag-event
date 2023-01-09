<?php

require_once __DIR__ . "/database.php";

function buscarImagensDoUsuario(PDO $conn, int $user_id)
{
    $query = "SELECT * FROM imagens WHERE id_usuario_fk={$user_id}";
    $images = $conn->query($query)->fetchAll();
    return $images;
}

$imagens = buscarImagensDoUsuario($conn, 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .area-imagens {
            display: flex;
            justify-content: center;
        }

        .card-imagem {
            width: 300px;
            margin: 0 30px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card-imagem img {
            width: 100%;
            margin: 0 auto;
        }

        a {
            text-decoration: none;
        }

        .card-imagem a.download-btn {
            background-color: #0081C9;
            color: #fff;
            font-weight: bold;
            display: inline-block;
            width: 100%;
            margin-top: 10px;
            padding: 10px 20px;
            text-align: center;
            font-size: 1.3rem;
        }
    </style>
    <div class="area-imagens">
        <?php foreach ($imagens as $key => $imagem) { ?>
            <div class="card-imagem">

                <img src="<?= $imagem['diretorio_imagem'] ?>" alt="">
                <a href="<?= $imagem['diretorio_imagem'] ?>" class="download-btn" download>
                    Download
                </a>
            </div>
        <?php } ?>
    </div>
    <div>
        <a href="./index.php">Voltar</a>
    </div>
</body>

</html>