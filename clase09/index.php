<?php
  $acceptedMimeTypes = ['image/jpeg', 'image/png', 'video/mp4'];

	if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    if (strlen($_POST["nombre"]) < 4) {
      exit("Nombre debe tener al menos 5 caracteres<br>");
    }
    if ($_FILES["foto"]["size"] > 100000) {
      exit("Archivo muy pesado<br>");
    }
    if ($_FILES["foto"]["error"] != 0) {
      exit("Hubo un error");
    }
    foreach ($acceptedMimeTypes as $mimeType) {
      if(!in_array($_FILES["foto"]["type"], $acceptedMimeTypes)) {
        exit("extension invalida");
      }
    }

    move_uploaded_file($_FILES["foto"]["tmp_name"], './images/'.$_POST["nombre"]);
    echo "Guardado correctamente";
  }

?>

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
  <form action="index.php" method="POST" enctype="multipart/form-data">
    Subir Imagen<br>
    <input type="file" name="foto">
    <br>
    Nombre:
    <br>
    <input type="text" name="nombre">
    <button type="submit">enviar</button>
  </form>
</body>
</html>
