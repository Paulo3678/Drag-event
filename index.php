

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">

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
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="card-icon">
                    <i class="fa-brands fa-discord"></i>
                </div>
                <div class="card-icon">
                    <i class="fa-regular fa-face-smile"></i>
                </div>
                <div class="card-icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
            </div>

            <div class="card-imagem" id="image-to-download">
                <div id="drag_me" class="teste-drag">
                    <i class="fa-regular fa-face-smile"></i>
                </div>
                <div class="teste-drag">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
            </div>

            <div class="opcoes-fundo">
                <h2>Mudar Background</h2>
                <div id="bg1" class="bg-opt"></div>
                <div id="bg2" class="bg-opt"></div>
                <div id="bg3" class="bg-opt"></div>
                <div id="bg4" class="bg-opt"></div>
            </div>
        </div>
        <button id="download">Salvar Imagem</button>

        <!-- <form>
            <input type="hidden" name="image" id="image-data">
            <input type="button" value="Upload" onclick="uploadImage()">
        </form> -->
    </div>




    <script src="./js/script.js" id="script-drag"></script>
    <script src="./js/download.js"></script>
    <script src="./js/mudarbg.js"></script>
    <script src="./js/addicon.js"></script>

</body>

</html>