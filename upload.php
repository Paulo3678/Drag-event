<?php
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
  
  // inform the user that the file was uploaded
  echo 'File uploaded successfully!';
?>