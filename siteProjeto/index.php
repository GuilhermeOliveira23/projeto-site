<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossa Horta - Sua Horta Doméstica</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel = "stylesheet" href = "./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm">
      <div class="container">
        
        <a class="navbar-brand fw-bold text-success" href="index.html">
          <i class="bi bi-tree-fill"></i> Nossa Horta
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" navbar collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="guias.php">Guias de Plantio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="comunidade.php">Comunidade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="especialistas.php">Encontrar Especialistas</a>
            </li>
          </ul>

          <a href="cadastro.php" class="btn btn-success">
            <i class="bi bi-person-fill-add"></i>
            Cadastre-se
          </a>
        </div>
      </div>
    </nav>

    <main>
      <div class="container-main col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <!-- <img src = "./images/hortaInicial.jpg" id= "img" class="d-block mx-lg-auto img-fluid rounded" alt="Horta com vegetais" width="700" height="500" loading="lazy"> -->
          </div>
          <div class="search-card col-lg-6">

            <h1 class="display-5 text-white fw-bold lh-1 mb-4">SUA HORTA DOMÉSTICA COMEÇA AQUI.</h1>
            <p class="texto fw-bold lead">Aprenda a plantar, cultivar e colher seus próprios alimentos orgânicos, mesmo com pouco espaço. Encontre guias fáceis, dicas da comunidade e ajuda profissional.</p>
            
            <form class="d-flex mt-4" role="search">
              <input class="form-control form-control-lg me-2" type="search" placeholder="O que você quer plantar hoje? (ex: Tomate)" aria-label="Search">
              <button class="btn btn-success btn-lg" type="submit">
                <i class="bi bi-search"></i>
              </button>

            </form>
          </div>
        </div>
      </div>

      <div class="album py-5 bg-body-tertiary">
        <div class="container">
          
          <h2 class="text-center mb-5 fw-bold">Guias de Plantio Populares</h2>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
            <div class="col">
              <div class="card shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1621434369938-c3132c6a9b5f?w=300&h=200&fit=crop" class="card-img-top" alt="Temperos">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Guia: Horta de Temperos</h5>
                  <p class="card-text">Aprenda a cultivar manjericão, alecrim, salsinha e outros temperos essenciais na sua janela.</p>
                  <a href="guia.php?id=1" class="btn btn-sm btn-outline-success mt-auto">Ver Guia Completo</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm h-100">
                <img src="./images/tomatecereja.jpg" class="card-img-top h-60" alt="Tomates">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">Como Plantar Tomate Cereja</h5>
                  <p class="card-text">O guia definitivo para ter tomates docinhos e suculentos plantados em vasos.</p>
                  <a href="guia.php?id=2" class="btn btn-sm btn-outline-success mt-auto">Ver Guia Completo</a>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm h-100">
                <img src="