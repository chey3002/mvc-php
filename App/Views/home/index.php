<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $controller->page_title; ?></title>
	<link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>
<body>
	<div class="container">

<h1>Agregar País</h1>

<form class="row" action="index.php?controller=pais&action=nuevo" method="post">
    <div class="col">
      <label for="nombre">Nombre del País:</label><br>
    <input class="form-control" type="text" id="nombre" name="nombre" required><br><br>

    </div>
<div class="col">    <label for="poblacion">Población:</label><br>
    <input class="form-control" type="number" id="poblacion" name="poblacion" required><br><br>
</div>
<div class="col">
      <label for="capital">Capital:</label><br>
    <input class="form-control" type="text" id="capital" name="capital" required><br><br>

</div>
<div class="col">
      <label for="imagen">Imagen de la Bandera (URL):</label><br>
    <input class="form-control" type="text" id="imagen" name="imagen" required><br><br>

</div>
    <input class="btn btn-primary" type="submit" value="Agregar País">
</form>
  <div class="container mt-12">
    <h1>Listado de Países</h1>
    <div class="row row-cols-4 row-cols-md-3 g-4">
        <?php
        // $dataToView["data"] debe contener el resultado de tu consulta SQL
        foreach ($dataToView["data"] as $pais) {
            echo '<div class="col">';
            echo '<div class="card h-100">';
            echo '<img src="' . $pais['imagen_bandera'] . '" class="card-img-top" alt="Bandera ' . $pais['nombre'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $pais['nombre'] . '</h5>';
            echo '<p class="card-text">Capital: ' . $pais['capital'] . '</p>';
            echo '<p class="card-text">Población: ' . $pais['poblacion'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

  </div>