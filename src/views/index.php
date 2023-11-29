<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../css/web.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Inscripcio</title>

</head>
<body>
  <div class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../images/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../images/img2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../../images/img3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="text">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis recusandae pariatur ex, laborum voluptates a nesciunt, tempore exercitationem molestiae ut dicta sit consequuntur ratione voluptatem, libero soluta dolores voluptas blanditiis?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis recusandae pariatur ex, laborum voluptates a nesciunt, tempore exercitationem molestiae ut dicta sit consequuntur ratione voluptatem, libero soluta dolores voluptas blanditiis?</p>
      <p>inscriu-te:</p>
      <a id="link" href="index.php?r=inscripcio">Formulari</a>
      <a id="link2" href="index.php?r=seguridad">Consultas</a>
    </div>
  </div>


  <div class="modal" tabindex="-1" id="cookieModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Política de Cookies</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Este sitio web utiliza cookies para mejorar la experiencia del usuario. Al continuar utilizando este sitio, aceptas el uso de cookies de acuerdo con nuestra política de privacidad.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="aceptarCookies()">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../../js/app.js"></script>  

</body>
</html>