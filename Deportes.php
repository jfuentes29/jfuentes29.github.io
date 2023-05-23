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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Faro - Noticias</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <header>
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
          </ul>
        </div>
      </nav>
      
          <div class="col-md-4">
            <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404134601.jpg" with=700 height=300 alt="Destacados">
            <h1>A Pellegrini lo vinculan con la Premier... Los tres clubes con un "grande" incluido, su cláusula de salida y el plan del Betis
            <h1>
          </div>
          <p>A Manuel Pellegrini lo miran desde la Premier League. Y no de ahora. El interés por tenerlo de regreso viene hace ya semanas. Al menos así lo aseguran en Inglaterra. El técnico chileno gusta a varios equipos del fútbol británico y su nombre aparece entre las opciones ante el terremoto de despidos que se ha dado en la máxima categoría.</p>
          <div class="col-md-4">
            <img src="https://static.emol.cl/emol50/Fotos/2023/04/04/file_20230404161013.jpg" with=700 height=300 alt="Lo mas visto">
            <h1>Garin arrasa hasta con un 6-0 ante el boliviano Dellien y avanza en el ATP de Houston: Mira el match point y su próximo rival <h1>
          </div>
          <p>El tenista chileno arrasó en la primera ronda del torneo estadounidense que se juega sobre arcilla. Le pasó por encima al boliviano Hugo Dellien (112°) y lo venció por 6-3 y 6-0. "Gago" jugó a un nivel extraordinario. Quebró de entrada en el partido y logró otro rompimiento para cerrar la primera manga por 6-3 en 41 minutos. Ya en el segundo parcial, lo del nacional fue un monólogo. Jamás permitió que su rival entrar en juego. Tres quiebres para cerrar todo a su favor por un notable 6-0 en 23 minutos. Los números demuestran lo que fue el arrollador estreno de Garin en Houston. Logró un 94% de puntos ganados con el primer servicio, 6 aces y ninguna doble falta. Ahora Garin ya tiene rival para la siguiente fase. Será un desafío más complejo, pues irá contra el estadounidense Brandon Nakashima, 44º del mundo y tercer sembrado del torneo.</p>
          
          </div>
        </div>
      </div>
    </main>
    <!-- formulario de contacto -->
<section id="contacto">
  <div class="container">
    <h2>Contáctanos</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje:</label>
        <textarea class="form-control" rows="5" name="mensaje" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</section>
<br>
<br>
    <footer>
        <p>Derechos reservados © 2023 El Faro</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>