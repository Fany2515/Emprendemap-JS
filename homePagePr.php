<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Emprede Map - Beneficios para emprendedores</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet"
  />
  <!-- Archivo CSS externo -->
  <link href="homePagePr.css" rel="stylesheet" />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container">
      <a class="navbar-brand" href="#">Emprede Map</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="homePagePr.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="../funcionalidades/miLocal.php"> Mis Propiedades</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Recomendaciones</a></li>
          <li class="nav-item ms-3">
            <a href="../propietarios/perfil.php" class="btn btn-primary">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header con imagen en HTML -->
  <header>
    <img src="../img/local.jpeg" alt="Imagen de local" />
    <div class="header-text">
      Bienvenido a EmpredeMap<br />
Pon tu local en nuestro mapa y ayuda a emprendedores a encontrar el espacio ideal para crecer
    </div>
  </header>

  <!-- Beneficios para emprendedores -->
  <!-- Beneficios para propietarios -->
<section class="container my-5">
  <h3 class="text-center">Beneficios para propietarios</h3>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <i class="fas fa-map-marker-alt icon"></i>
        <h4>Visibilidad de tu propiedad</h4>
        <p>Publica tu local en nuestra plataforma y llega a más emprendedores interesados.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <i class="fas fa-wallet icon"></i>
        <h4>Ingresos adicionales</h4>
        <p>Aprovecha tus espacios disponibles y genera ingresos alquilándolos fácilmente.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <i class="fas fa-handshake icon"></i>
        <h4>Negociación directa</h4>
        <p>Conecta sin intermediarios con emprendedores que buscan espacios de negocio.</p>
      </div>
    </div>
  </div>
</section>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>