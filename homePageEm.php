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
  <link href="homePageEm.css" rel="stylesheet" />
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
          <li class="nav-item"><a class="nav-link" href="homePageEm.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="../verLocales/locales.php">Locales</a></li>
          <li class="nav-item"><a class="nav-link" href="../emprendedores/recomendaciones.php">Recomendaciones</a></li>
          <li class="nav-item ms-3">
            <a href="../emprendedores/perfilEm.php" class="btn btn-primary">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header con imagen en HTML -->
  <header>
    <img src="../img/local.jpeg" alt="Imagen de local" />
    <div class="header-text">
      Bienvenido a Emprede Map<br />
      Encuentra el local ideal para tu emprendimiento
    </div>
  </header>

  <!-- Beneficios para emprendedores -->
  <section class="container my-5">
    <h3 class="text-center">Beneficios para emprendedores</h3>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-map-marker-alt icon"></i>
          <h4>Ubicaciones ideales y servicios</h4>
          <p>Encuentra locales cerca de tu comunidad para crecer con apoyo local.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-wallet icon"></i>
          <h4>Precios accesibles</h4>
          <p>Filtra por presupuesto y necesidades reales para encontrar la mejor opción.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-handshake icon"></i>
          <h4>Conexión directa</h4>
          <p>Habla directamente con los propietarios para negociar sin intermediarios.</p>
        </div>
      </div>
    </div>
  </section>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>