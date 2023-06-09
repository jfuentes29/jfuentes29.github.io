<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>El Faro</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    
    <!-- Contenido del sitio -->
  </body>
</html>

</html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Faro - Noticias</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
</body>
</html>
  <header>
        <!-- contenido del menú -->
      </nav>
      
      <div class="alert alert-warning mb-0 text-center">
        <p>Las noticias de Chile y el mundo en un solo sitio.</p>
      </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="https://static.emol.cl/emol50/Fotos/2018/02/17/file_20180217094140.jpg
      " width="100" height="100" class="d-inline-block align-top" alt="">
          
        </a>
        <!-- Resto del código del menú aquí -->
      </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">El Faro</a>
    </nav>
    <div id="hora"></div>
<script>
    function mostrarHora() {
        var fecha = new Date();
        var diaSemana = fecha.toLocaleDateString('es-CL', { weekday: 'long' });
        var dia = fecha.getDate();
        var mes = fecha.toLocaleDateString('es-CL', { month: 'long' });
        var anio = fecha.getFullYear();
        var hora = fecha.getHours();
        var minutos = fecha.getMinutes();
        var segundos = fecha.getSeconds();
        document.getElementById("hora").innerHTML = "Santiago, " + diaSemana + " " + dia + " de " + mes + " " + anio + " " + hora + ":" + (minutos < 10 ? '0' : '') + minutos + ":" + (segundos < 10 ? '0' : '') + segundos;
    }
    setInterval(mostrarHora, 1000);
</script>
  </header>
  <main>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Noticias.php">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Deportes.php">Deportes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Negocios.php">Negocios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contactanos.php">Contacto</a>
          </ul>
        </div>
      </nav>
      
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Destacados</h2>
          <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404151638.jpg" with=350 height=200 alt="Destacados">
          <p>Zelenski expone ante el Congreso y agradece postura de Chile frente a la guerra: FA y PC se restaron
        </p>
        </div>
        <div class="col-md-4">
          <h2>Lo mas visto</h2>
          <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404151840.jpg" with=350 height=200 alt="lo mas visto">
          <p>Donald Trump se declaró no culpable de pagos irregulares a actriz porno: regresó a Florida
        </p>
        </div>
        <div class="col-md-4">
            <h2>Noticias Recientes</h2>
            <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404114709.jpg" with=350 height=200 alt="Noticia Recientes">
            <p>Cronología del terremoto que sacude al Colegio San Ignacio luego de que alumnas denunciaran "encerrona" de compañeros </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404134601.jpg" with=350 height=200 alt="Destacados">
            <p>A Pellegrini lo vinculan con la Premier... Los tres clubes con un "grande" incluido, su cláusula de salida y el plan del Betis
            </p>
          </div>
          <div class="col-md-4">
            <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404161013.jpg" with=350 height=200 alt="Lo mas visto">
            <p>Garin arrasa hasta con un 6-0 ante el boliviano Dellien y avanza en el ATP de Houston: Mira el match point y su próximo rival </p>
          </div>
          <div class="col-md-4">
            <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404160446.jpg" with=350 height=200 alt="Noticias Recientes">
            <p>Ministro de Agricultura respalda un alza al impuesto específico: "Está en el programa y me parece del todo sensato" </p>
          
          </div>
        </div>
      </div>
        </li>
       
        </li>
      </ul>
    </main>   
    <footer>
        <p>Derechos reservados © 2023 El Faro</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>