<?php

require_once __DIR__ . "/database.php";
$id_image = $_GET['imagem_id'];
$imagem = buscarImagensDoUsuario($conn, $id_image);
function buscarImagensDoUsuario(PDO $conn, int $id_imagem)
{
    $stmt = $conn->query("SELECT * FROM imagens WHERE id_imagem={$id_imagem}");
    $imagem =  $stmt->fetch();
    return $imagem;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./editar/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>
</head>

<body>

    <div>
        <div class="links">
            <a href="./listar-imagens.php">Ver imagens já criadas</a>
        </div>
        <div class="area-card">

            <div class="opcoes-icones">
                <h2>Adicionar Item</h2>
                <div class="card-icon">
                    <i class="icon-element fa-solid fa-house"></i>
                </div>
                <div class="card-icon">
                    <i class="icon-element fa-brands fa-discord"></i>
                </div>
                <div class="card-icon">
                    <i class="icon-element fa-regular fa-face-smile"></i>
                </div>
                <div class="card-icon">
                    <i class="icon-element fa-solid fa-truck-fast"></i>
                </div>
            </div>

            <div class="card-imagem" id="image-to-download">

                <?php
                $selected_image;
                foreach (json_decode($imagem['image_infos'], true) as $key => $item) {
                    $selected_image = $item['background']; ?>
                    <div class="teste-drag" style="
                            top: <?= $item['top'] ?>;
                            bottom:  <?= $item['bottom'] ?>;
                            right:  <?= $item['right'] ?>;
                            left:  <?= $item['left'] ?>;
                        ">
                        <?php
                        $classes = "";
                        foreach ($item['classes'] as $classe) {
                            $classes .= $classe . " ";
                        }
                        ?>
                        <i class="<?= $classes ?>"></i>
                    </div>
                <?php } ?>
            </div>

            <div class="opcoes-fundo">
                <h2>Mudar Background</h2>
                <div id="bg1" class="bg-opt <?= $selected_image == "rgb(222, 184, 135)" ? "selected":"" ?>"></div>
                <div id="bg2" class="bg-opt <?= $selected_image == "rgb(218, 165, 32)" ? "selected":"" ?>"></div>
                <div id="bg3" class="bg-opt <?= $selected_image == "rgb(102, 51, 153)" ? "selected":"" ?>"></div>
                <div id="bg4" class="bg-opt <?= $selected_image == "rgb(0, 128, 128)" ? "selected":"" ?>"></div>

                <?= "<style>#image-to-download{background-color: {$selected_image} ;}</style>"; ?>
                
            </div>
        </div>
        <button id="download">Atualizar</button>
    </div>




    <script src="./editar/js/script.js" id="script-drag"></script>
    <script src="./editar/js/atualizar.js"></script>
    <script src="./editar/js/mudarbg.js"></script>
    <script src="./editar/js/addicon.js"></script>

</body>

</html>