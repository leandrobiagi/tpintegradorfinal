    <!-- Contenido -------------------------------------------------------------------------------->
    <main>
      <section>
        <!-- Componente Carousel -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagenes/ba1.jpg" class="d-block w-100" alt="Palacio de Aguas Corrientes">
            </div>
            <div class="carousel-item">
              <img src="imagenes/ba2.jpg" class="d-block w-100" alt="Casino y Teatro Marín">
            </div>
            <div class="carousel-item">
              <img src="imagenes/ba3.jpg" class="d-block w-100" alt="Obelisco ">
            </div>
          </div>
        </div>
        <!-- Fin componente Carousel -->
      </section>

      <section>
        <!-- Card flotante -->
        <div id="cardFlotante">
          <!-- fw-semibold texto seminegrita -->
          <h1 class="card-title fw-semibold">Conf Bs As</h1>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, culpa voluptate soluta eius fugit doloremque ipsa eligendi consectetur veritatis molestias facilis, omnis, aspernatur tenetur beatae. Minima mollitia rerum itaque voluptas.</p>
          <div id="botones">
            <a href="#orador" class="btn btn-outline-light">Quiero ser orador</a>
            <a href="#tickets" class="btn btn-success">Comprar tickets</a>
          </div>
        </div>
        <!-- Fin Card flotante -->
      </section>

      <section>
        <!-- Título principal oradores -->
        <div id="oradores" class="separar">
          <div class="altura centrar">
            <h6>CONOCE A LOS</h6>
          </div>
          <div class="centrar">
            <!-- fw-semibold texto seminegrita -->
            <h2 class="fw-semibold">ORADORES</h2>
          </div>
        </div>
        <!-- Fin título principal oradores -->

        <!-- Componente Card para oradores -->
        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-md-4 g-4 centrar">
            <div class="col">
              <div class="card h-100">
                <img src="imagenes/steve.jpg" class="card-img-top" alt="Steve Jobs">
                <div class="card-body">
                  <span class="badge text-bg-warning">JavaScript</span>
                  <span class="badge text-bg-info">React</span>
                  <!-- fw-semibold texto seminegrita -->
                  <h5 class="card-title fw-semibold">Steve Jobs</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa corrupti ratione distinctio, perspiciatis dignissimos est maiores praesentium similique modi veritatis alias sequi sed nostrum, asperiores iusto eum recusandae obcaecati odio.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="imagenes/bill.jpg" class="card-img-top" alt="Bill Gates">
                <div class="card-body">
                  <span class="badge text-bg-warning">JavaScript</span>
                  <span class="badge text-bg-info">React</span>
                  <!-- fw-semibold texto seminegrita -->
                  <h5 class="card-title fw-semibold">Bill Gates</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur tempora quod asperiores beatae dolorum architecto dolorem distinctio provident maxime facere aspernatur labore cupiditate nobis fuga quia recusandae, fugiat debitis illum?</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="imagenes/ada.jpg" class="card-img-top" alt="Ada Lovelace">
                <div class="card-body">
                  <span class="badge text-bg-secondary">Negocios</span>
                  <span class="badge text-bg-danger">Startups</span>
                  <!-- fw-semibold texto seminegrita -->
                  <h5 class="card-title fw-semibold">Ada Lovelace</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque autem et vero. Quibusdam aspernatur obcaecati aperiam! Inventore nisi asperiores quae, molestias amet, est voluptatibus sint consequuntur blanditiis odit eius harum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin componente Card para oradores -->
      </section>

      <section>
        <!-- Dos divs, imágen (1° div) y texto (2° div) -->
        <div id="lugarfecha" class="container-fluid separar2">
          <div class="row row-cols-1 row-cols-md-2">
            <!-- p-0 padding 0 -->
            <div class="col p-0">
              <img src="imagenes/honolulu.jpg" class="d-block w-100" alt="Honolulu">
            </div>
            <div class="col bg-dark text-white p-3">
              <!-- fw-semibold texto seminegrita -->
              <h3 class="fw-semibold">Bs As - Octubre</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente tempora repellendus facilis. Consequatur velit, officia numquam doloremque ad tenetur similique molestias veritatis repellendus vitae in recusandae earum? Accusamus, error perspiciatis?</p>
              <a href="#" class="btn btn-outline-light">Conocé más</a>
            </div>
          </div>                    
        </div>
        <!-- Fin dos divs, imágen (1° div) y texto (2° div) -->
      </section>

      <section>
        <!-- Título principal formulario -->
        <div id="orador" class="separar">
          <div class="altura centrar">
            <h6>CONVIÉRTETE EN UN</h6>
          </div>
          <div class="centrar">
            <!-- fw-semibold texto seminegrita -->
            <h2 class="fw-semibold">ORADOR</h2>
          </div>
          <div>
            <p class="centrar">Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</p>
          </div>
        </div>
        <!-- Fin título principal formulario -->

        <!-- Formulario -->
        <div class="container">
          <form class="row g-3">
            <div class="col-md-4 offset-md-2">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Apellido">
            </div>
            <div class="col-md-8 offset-md-2">
              <textarea class="form-control" rows="3" placeholder="Sobre qué quieres hablar?" aria-describedby="agregartítulo"></textarea>
              <div id="agregartítulo" class="form-text">
                Recuerda incluir un título para tu charla.
              </div>
            </div>
            <div class="col-md-8 offset-md-2 d-grid gap-2">
              <button class="btn btn-success" type="button">Enviar</button>
            </div>
          </form>
        </div>
        <!-- Fin formulario -->
      </section>

      <section>
        <!-- Componente Card para tickets -->
        <!-- mt-5 (margen superior de 5) -->
        <div class="container mt-5" id="tickets">
          <div class="row row-cols-1 row-cols-md-4 g-1 centrar">
            <div class="col">
              <!-- border border-primary (borde azul) y rounded-0 (borde no redondeado) -->
              <div class="card h-100 border border-primary rounded-0">
                <!-- text-center (texto centrado) -->
                <div class="card-body text-center">
                  <!-- fw-semibold (texto seminegrita) -->
                  <h5 class="card-title fw-semibold">Estudiante</h5>
                  <p class="card-text">Tienen un descuento</p>
                  <!-- fw-bold (texto en negrita) -->
                  <p class="fw-bold">80%</p>
                  <!-- fw-light (texto ligero) y text-muted (texto silenciado) -->
                  <p class="fw-light text-muted">* presentar documentación</p>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- border border-success (borde verde) y rounded-0 (borde no redondeado) -->
              <div class="card h-100 border border-success rounded-0">
                <!-- text-center (texto centrado) -->
                <div class="card-body text-center">
                  
                  <!-- fw-semibold (texto seminegrita) -->
                  <h5 class="card-title fw-semibold">Trainee</h5>
                  <p class="card-text">Tienen un descuento</p>
                  <!-- fw-bold (texto en negrita) -->
                  <p class="fw-bold">50%</p>
                  <!-- fw-light (texto ligero) y text-muted (texto silenciado) -->
                  <p class="fw-light text-muted">* presentar documentación</p>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- border border-warning (borde amarillo) y rounded-0 (borde no redondeado) -->
              <div class="card h-100 border border-warning rounded-0">
                <!-- text-center (texto centrado) -->
                <div class="card-body text-center">
                  
                  <!-- fw-semibold (texto seminegrita) -->
                  <h5 class="card-title fw-semibold">Junior</h5>
                  <p class="card-text">Tienen un descuento</p>
                  <!-- fw-bold (texto en negrita) -->
                  <p class="fw-bold">15%</p>
                  <!-- fw-light (texto ligero) y text-muted (texto silenciado) -->
                  <p class="fw-light text-muted">* presentar documentación</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin componente Card para tickets -->

        <!-- Título principal tickets -->
        <div class="separar">
          <div class="altura centrar">
            <!-- text-uppercase (texto en mayúscula) -->
            <h6 class="text-uppercase">Venta</h6>
          </div>
          <div class="centrar">
            <!-- fw-semibold texto seminegrita y text-uppercase (texto en mayúscula) -->
            <h2 class="fw-semibold text-uppercase">Valor de ticket $200</h2>
          </div>
        </div>
        <!-- Fin título principal tickets -->

        <!-- Formulario tickets -->
        <div class="container">
          <form class="row g-3" method="post" action="insertar_datos.php">
            <div class="col-md-4 offset-md-2">
              <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required aria-required="true" name="nombre">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" required aria-required="true" name="apellido">
            </div>
            <div class="col-md-8 offset-md-2">
              <input type="email" class="form-control" placeholder="Correo" aria-label="Correo" required aria-required="true" name="correo">
            </div>
            <div class="col-md-4 offset-md-2">
              <label for="inputCantidad" class="form-label">Cantidad</label>
              <input type="number" class="form-control" id="inputCantidad" placeholder="Cantidad" min="1" max="5" value="1" required aria-required="true" name="cantidad">
            </div>
            <div class="col-md-4">
              <label for="inputCategoria" class="form-label">Categoría</label>
              <select id="inputCategoria" class="form-select" required aria-required="true" name="inputCategoria">
                <option selected value="estudiante">Estudiante</option>
                <option value="trainee">Trainee</option>
                <option value="junior">Junior</option>
              </select>
            </div>
            <!-- bg-opacity-25 (opacidad de 25 del fondo) -->
            <div class="col-md-8 offset-md-2">
              <div id="divTotal" class="text-bg-info bg-opacity-25 p-3 form-control">Total a pagar: $</div>
            </div>
            <div class="col-md-4 offset-md-2 d-grid">
              <input id="btnBorrar" class="btn btn-danger" type="reset" value="Borrar">
            </div>
            <div class="col-md-4 d-grid">
              <button id="btnResumen" class="btn btn-secondary" type="button">Resumen</button>
            </div>
            <div class="col-md-8 offset-md-2 d-grid">
              <button id="btnComprar" class="btn btn-success" type="submit">Comprar</button>
            </div>
          </form>
        </div>
        <!-- Fin formulario tickets -->
      </section>

      <section>
         <!-- Título principal tabla tickets vendidos -->
          <!-- mt-5 (margen superior de 5) -->
         <div class="separar mt-5">
          <div class="altura centrar">
            <!-- text-uppercase (texto en mayúscula) -->
            <h6 class="text-uppercase">Lista de</h6>
          </div>
          <div class="centrar">
            <!-- fw-semibold texto seminegrita y text-uppercase (texto en mayúscula) -->
            <h2 class="fw-semibold text-uppercase">Tickets vendidos</h2>
          </div>
        </div>
        <!-- Fin título principal tabla tickets vendidos -->

        <!-- Tabla tickets vendidos -->
        <div class="container-fluid">
          <div class="row centrar">
            <div class="col-md-10">
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
  <?php
    require './include/config/conexion.php';
  
    $consultas = mysqli_query($conexion, "SELECT * FROM tickets_vendidos");
  
    while($listadoArray = mysqli_fetch_array($consultas)) {
  ?>
      <tr>
        <th scope="row"> <?php echo $listadoArray['id_ticket']; ?> </th>
        <td> <?php echo $listadoArray['nombre']; ?> </td>
        <td> <?php echo $listadoArray['apellido']; ?> </td>
        <td> <?php echo $listadoArray['correo']; ?> </td>
        <td> <?php echo $listadoArray['cantidad']; ?> </td>
        <td> <?php echo $listadoArray['categoria']; ?> </td>
        <td>
            <form method="post" action="borrar_datos.php">
              <input type="hidden" id="borrar" name="borrar" value="<?php echo $listadoArray['id_ticket']; ?>">
              <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
      </tr>
  <?php
    }
  ?>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin tabla tickets vendidos -->  
      </section>
    </main>