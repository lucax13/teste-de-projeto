<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Explosão Cultural</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-dark text-light">
    <header class="bg-black p-3">
      <div class="container d-flex justify-content-between align-items-center">
        <h1 class="m-0"><a href="index.php" class="text-light text-decoration-none">Explosão Cultural</a></h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
            <button class="navbar-toggler" type="button" id="menuBtn" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="generos.php">Gêneros</a></li>
                <li class="nav-item"><a class="nav-link" href="enderecos.php">Endereços</a></li>
                <li class="nav-item"><a class="nav-link" href="usuarios.php">Login</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="container py-5">
  <h2 class="text-white mb-4">Eventos em Destaque</h2>

  <div id="carouselEventos" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="d-flex gap-3">
          <div class="card bg-secondary text-light" style="min-width: 300px;">
            <img src="https://source.unsplash.com/400x250/?music" class="card-img-top" alt="Evento 1">
            <div class="card-body">
              <h5 class="card-title">Show Indie</h5>
              <p class="card-text">Dia 10 de Junho - Centro Cultural</p>
            </div>
          </div>

          <div class="card bg-secondary text-light" style="min-width: 300px;">
            <img src="https://source.unsplash.com/400x250/?party" class="card-img-top" alt="Evento 2">
            <div class="card-body">
              <h5 class="card-title">Festa Black</h5>
              <p class="card-text">Dia 15 de Julho - Arena Norte</p>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="d-flex gap-3">
          <div class="card bg-secondary text-light" style="min-width: 300px;">
            <img src="https://source.unsplash.com/400x250/?exhibition" class="card-img-top" alt="Evento 3">
            <div class="card-body">
              <h5 class="card-title">Expo Arte Urbana</h5>
              <p class="card-text">De 5 a 20 de Julho - Galeria Sul</p>
            </div>
          </div>

          <div class="card bg-secondary text-light" style="min-width: 300px;">
            <img src="https://source.unsplash.com/400x250/?dj" class="card-img-top" alt="Evento 4">
            <div class="card-body">
              <h5 class="card-title">Noite Eletrônica</h5>
              <p class="card-text">Dia 25 de Julho - Club 303</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEventos" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselEventos" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>


    <footer class="bg-black text-center py-3">
      <p class="m-0">Explosão Cultural — Imagens usadas com permissão</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/menu.js"></script>
  </body>
</html>
