<?php
  header('refresh: 10, url=http://localhost/curso_php/tp_integrador_front/index.php');

  include './include/templates/header.php';
?>

    <main class="altura2">
      <div class="alert alert-info" role="alert">
        Serás redirigido a la página principal en 10 segundos.
      </div>

    <?php
      $RegistroABorrar = $_POST['borrar'];

      require './include/config/conexion.php';

      $borrarDato = "DELETE FROM tickets_vendidos WHERE id_ticket = $RegistroABorrar";

      $resultadoBorrar = mysqli_query($conexion, $borrarDato);

      if($resultadoBorrar) {
    ?>
        <div class="centrar">
          <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Ticket conferencia</div>
            <div class="card-body">
              <h5 class="card-title">¡Se ha cancelado la compra!</h5>
              <p class="card-text">Su ticket ya no es válido.</p>
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
              <h5 class="card-title">No se pudo cancelar la compra</h5>
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
   

 