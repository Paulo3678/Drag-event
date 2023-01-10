<?php
require_once __DIR__ . "/database.php";

$image_infos = $_POST['image_info'];

// get the image data
$imageData = $_POST['image'];

// decode the image data
$image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageData));

// generate a new file name
$fileName = uniqid() . '.jpg';

// set the destination for the uploaded file
$destination = './uploads/' . $fileName;

// write the image data to the destination file
file_put_contents($destination, $image);

// saving image in to database
$user_id = 1;
$image_path = "./uploads/" . $fileName;
return salvarImagemNoBancoDeDados($conn, $user_id, $image_path, $image_infos);


function salvarImagemNoBancoDeDados(PDO $conn, int $user_id, string $image_path, array $image_infos)
{

  $query = "INSERT INTO imagens (diretorio_imagem, id_usuario_fk, image_infos) VALUES (?,?,?)";
  $stmt = $conn->prepare($query);
  return $stmt->execute([$image_path, $user_id, json_encode($image_infos)]);
}
