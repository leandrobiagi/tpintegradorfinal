<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP integrador front</title>    
    <!-- CSS Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <!-- Encabezado -------------------------------------------------------------------------------->
    <header>
      <!-- Componente Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-2 pb-3">
        <div class="container-fluid">
          <div id="logo">
            <a class="navbar-brand" href="#">
            <!-- align-middle centra verticalmente -->
            <img src="imagenes/codoacodo.png" alt="codoacodo" width="100" height="" class="d-inline-block align-middle">
            Conf Bs As
            </a>
          </div>
       
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
       
          <div class="collapse navbar-collapse alinearAlFinal" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#oradores">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lugarfecha">El lugar y la fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#orador">Conviértete en orador</a>
              </li>
              <li class="nav-item">
                <!-- link-success pone color verde el enlace -->
                <a class="nav-link link-success" href="#tickets">Comprar tickets</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin componente Navbar -->
    </header>