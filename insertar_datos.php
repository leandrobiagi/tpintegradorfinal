<?php
  header('refresh: 10, url=http://localhost/curso_php/tp_integrador_front/index.php');

  include './include/templates/header.php';
?>

    <main class="altura2">
      <div class="alert alert-info" role="alert">
        Serás redirigido a la página principal en 10 segundos.
      </div>

    <?php
      $nombreInput = $_POST['nombre'];
      $apellidoInput = $_POST['apellido'];
      $correoInput = $_POST['correo'];
      $cantidadInput = $_POST['cantidad'];
      $categoriaInput = $_POST['inputCategoria'];

      require './include/config/conexion.php';

      $insertarDato = "INSERT INTO tickets_vendidos (id_ticket, nombre, apellido, correo, cantidad, categoria) VALUES (NULL, '$nombreInput', '$apellidoInput', '$correoInput', '$cantidadInput', '$categoriaInput')";

      $resultadoInsertar = mysqli_query($conexion, $insertarDato);

      if($resultadoInsertar) {
    ?>
        <div class="centrar">
          <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Ticket conferencia</div>
            <div class="card-body">
              <h5 class="card-title">¡Compra realizada!</h5>
              <p class="card-text">El ticket será enviado al correo.</p>
            </div>
          </div>
        </div>
    <?php
      } else {
    ?>
        <div class="centrar">
          <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Ticket conferencia</div>
            <div class="card-body">
              <h5 class="card-title">No se pudo realizar la compra</h5>
              <p class="card-text">Intente de nuevo en unos minutos.</p>
            </div>
          </div>
        </div>
    <?php
      }
    ?>
    </main>
<?php
  include './include/templates/footer.php';
?>
   