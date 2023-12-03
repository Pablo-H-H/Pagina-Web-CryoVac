<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRYOVAC</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="imagenes/logo.png" alt="Logo" style="height: 50px; width: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Producto">Producto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Contacto">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#FOOTER">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <!--Carrucel-->

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item carousel-image bg-img-1 active">
            <!--<img src="/imagenes/First.jpeg" class="d-block w-100" alt="...">-->
          </div>
          <div class="carousel-item carousel-image bg-img-2">
            <!--<img src="/imagenes/Second.jpeg" class="d-block w-100" alt="...">-->
          </div>
          <div class="carousel-item carousel-image bg-img-3">
            <!--<img src="/imagenes/Third.jpeg" class="d-block w-100" alt="...">-->
          </div>
        </div>
      </div>

      <!--Nosotros-->
      <div class="container-fluid justify-content-center text-center p-5 bg-body-tertiary">
        <h2 class="mb-4">CRYOVAC</h2>
        <p class="fs-4 fst-italic mb-3 mt-3">Entre las más de 50% de vacunas que son tiradas por la cadena de frío, un 16% son por errores totalmente prevenibles: fallos en la hielera, dejaron la puerta abierta o las vacunas afuera.</p>
        <p id="Producto" class="fs-4 fw-bold fst-italic">Nuestra mision es garantizar un ambiente adecuado para salvaguardar la integridad y eficacia de las vacunas.
        </p>
      </div>

      <!--Producto-->
      <section class="about-section-padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-5 mt-5">
              <div class="img-about text-center">
                <img src="imagenes/fondo.jpg" alt="" class="img-fluid" style="border-radius: 5%; ">
                <p class="pt-5 ">Nuestra producto es un contenedor de vacunas que sirve para preservar la efectividad por medio de la conservación térmica. Monitoreando en todo momento la temperatura y humedad de el interior del contenedor.
                </p>
              </div>
            </div>
            <div class="col-md-7 ps-5 mt-5 col-sm-12">
              <div class="about-text">
                <h3>ICE BOX</h3>
                <p class="mt-4 fw-bolder fst-italic">Caracteristicas:</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Color: Azul</li>
                  <li class="list-group-item">Estilo: Chiller</li>
                  <li class="list-group-item">Tipo de material de aislamiento: Unicel</li>
                  <li class="list-group-item">Componentes incluitos: Enfriador </li>
                  <li class="list-group-item">Bateria: si</li>
                  <li class="list-group-item">Capacidad: 18 litros</li>
                  <li class="list-group-item">Dimenciones: 45 cm x 40 cm x 30cm</li>
                  <li class="list-group-item">Voltaje usado: 12 voltz</li>
                </ul>
                <button class="btn btn-warning mt-3">Comprar Ahora</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Lista comparativa de beneficios-->
      <section>
        <div class="container"></div>
      </section>

      <!--Cards de equipo-->
      <div class="container text-center py-5" id="Contacto">
        <h3>Nuestro Equipo</h3>
        <div class="row row-cols-1 row-cols-md-3 justify-content-center g-4 py-5">
          <div class="col">
            <div class="card">
              <img src="imagenes/profile.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mario Godínez Chavero</h5>
                <p class="card-text">COO</p>
              </div>
              <div class="d-flex justify-content-evenly p-4">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-envelope-fill"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="imagenes/profile.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pablo Hazael Hurtado Mireles</h5>
                <p class="card-text">CEO</p>
              </div>
              <div class="d-flex justify-content-evenly p-4">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-envelope-fill"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="imagenes/profile.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cristian Chávez Guía</h5>
                <p class="card-text">CTO</p>
              </div>
              <div class="d-flex justify-content-evenly p-4">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-envelope-fill"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="imagenes/profile.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Diego Lira García</h5>
                <p class="card-text">CBO</p>
              </div>
              <div class="d-flex justify-content-evenly p-4">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-envelope-fill"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
              <img src="imagenes/profile.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Emiliano Gomez González</h5>
                <p class="card-text">CFO</p>
              </div>
              <div class="d-flex justify-content-evenly p-4">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-envelope-fill"></i>
                <i class="bi bi-whatsapp"></i>
              </div>
            </div>
          </div>

        </div>
    </div>
      
      <!--Footer-->
      <footer class="bg-light text-dark pt-5 pb-4" id="FOOTER">
        <div class="container text-center text-md-start">
          <div class="row text-center text-md-center">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-primary">CRYOVAC</h5>
              <hr class="mb-4">
              <p>Conciencia en Cada Grado</p>
              <br>
              <p>Mejorando la calidad de vida de las personas</p>
            </div>

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-primary">¿Quiénes somos?</h5>
              <hr class="mb-4">
              <p>Somos una empresa socialmente responsable cuyo proposito es resolver la problematica de el almacenamiento y conservacion de las vacunas las cuales necesitan condiciones especiales para que tenga su mayor efectividad</p>
            </div>
            
            <div class="col-md-3 col-lg-3 col-xl3- mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
              <hr class="mb-4">
              <p>
                <li class="fas fa-home me-3"></li>  Santiago de Querétaro, Qro.
              </p>
              <p>
                <li class="fas fa-envelope me-3"></li> correoejemplo@gmail.com
              </p>
              <p>
                <li class="fas fa-phone me-3"></li> +521234567890
              </p>
              <p>
                <li class="fas fa-print me-3"></li> +521234567890
              </p>
            </div>

            <hr class="mb-4">
            
            <div class="text-center mb-2">
              <p>
                Copyright Todos los derechos reservados 
                <a href="#">
                  <strong class="text-primary">CRYOVAC</strong>
                </a>
              </p>
            </div>

            <div class="text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-google-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>