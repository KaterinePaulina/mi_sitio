<!DOCTYPE html>
<html>
<head>
  <title>ROCK</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link rel="stylesheet" href="CSS/rock.css">
 
  </head>
</head>
  <body class="container">
   <header>
    <div class="titulo_p">
    <center> <h1>ROCK</h1></center>
    </div>
   <div id="header">
    <ul class="nav">
    <li><a href="login.php">Ingresar</a>
    <li><a href="index.php">Home</a> 

      <li><a href="rap.php">Rap</a>

      <li><a href="rock.php">Rock</a>
        <ul>
       <li><a href="cantantes.php">cantante</a>
          <li><a href="instrumentos.php">instrumentos</a>
        </ul>
        </li>
        
      <li><a href="clasica.php">Clasico</a>
    </li>
   </ul>

      <div class="search-container">
            <input type="text" id="search-input" placeholder="Buscar..." class="search-box">
            <span class="search-icon"><i class="fas fa-search" onclick="searchText()"></i></span>
        </div>
   </div>

<br><br>

<section class="sesion1">
<h1>El origen del rock</h1>
<div class="cont_img">
  <img src="img/rock.jpg" alt="">
</div>
<div class="cont_inf">
<p> El origen del rock puede rastrearse hasta mediados del siglo XX, cuando se gestó a partir de la combinación de varios estilos musicales, principalmente el rhythm and blues, el country, el gospel y el blues. Estos géneros musicales influyeron en la creación de un sonido nuevo y distintivo que eventualmente se conocería como rock and roll.
<br><br>
El término "rock and roll" se popularizó en la década de 1950 y se utilizaba para describir la música que fusionaba elementos del rhythm and blues con un ritmo más animado y una actitud juvenil. Artistas como Chuck Berry, Little Richard, Fats Domino y Elvis Presley fueron pioneros en este estilo musical, llevando su música a audiencias más amplias y definiendo así los cimientos del rock.
<br><br>
A lo largo de las décadas, el rock ha evolucionado y diversificado en numerosos subgéneros, cada uno con su propio sonido distintivo. Esta capacidad de adaptación y cambio ha sido fundamental para mantener viva la influencia del rock en la cultura musical mundial.
</p>
</div>
</section>

<!-- se inicia el intento de video :O-->
<div class="video-container">
  <h1>Influencia del Rock en México</h1>
  <div class="inf">
  <p>Los jóvenes artos porque la industria de que únicamente lo hicieran rock en ingles los comenzaron a producir rock lo que en es ese momento se encontraba mal visto por la sociedad extremadamente conservadora de los 60s
<br><br>
Eso no detuvo a los jóvenes para que el rock pueda ser el sostre de cualquier lucha social, los jóvenes influenciados por el movimiento hippie empiezan a buscar que este genero musical se comience a ver como un estilo de vida y no solo como la rebeldía que se mostraba con anterioridad y asi dejando de ser solo un genero de música

  </p>
</div>
        <video controls>
            <source src="img/video.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>

<!--sesion4-->
   <section class="work contenedor" id="trabajo">
     <h3>MUSICA</h3>
     <p class="after">Hace tu vida divertida</p>
     <div class="botones-work">
       <ul>
         <li class="filter active" data-nombre='todos'>Todos</li>
         <li class="filter" data-nombre='diseño'>Instrumentos</li>
         <li class="filter" data-nombre='programacion'>Cantantes</li>
         <li class="filter" data-nombre='marketing'>Danza</li>
       </ul>
     </div>
     <div class="galeria-work">
       <div class="cont-work programacion">
        <div class="img-work">
         <img src="img/Robert.webp" alt="">
       </div>
       <div class="textos-work">
        <h4>Robet</h4>
      </div>
     </div>
     <div class="cont-work programacion">
       <div class="img-work">
         <img src="img/Mick.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Mick Jagger</h4>
       </div>
     </div>
     <div class="cont-work programacion">
      <div class="img-work">
        <img src="img/Freddie.jpg" alt="">
      </div>
      <div class="textos-work">
       <h4>Freddie Mercury</h4>
      </div>
     </div>
     <div class="cont-work diseño">
       <div class="img-work">
         <img src="img/bateria.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Bateria</h4>
       </div>
     </div>
     <div class="cont-work diseño">
       <div class="img-work">
         <img src="img/guitarraelectrica.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Guitarra electrica</h4>
       </div>
     </div>
     <div class="cont-work diseño">
       <div class="img-work">
         <img src="img/bajo.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Bajo</h4>
       </div>
     </div>
     <div class="cont-work marketing">
       <div class="img-work">
         <img src="img/baile-rock.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Headbanging</h4>
       </div>
     </div>
     <div class="cont-work marketing">
       <div class="img-work">
         <img src="img/twist.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Twist</h4>
       </div>
     </div>
     <div class="cont-work marketing">
       <div class="img-work">
         <img src="img/Shimmy.jpg" alt="">
       </div>
       <div class="textos-work">
         <h4>Shimmy</h4>
       </div>
     </div>
    </div>
</main><!--Cerramos el main-->
</section>
<footer>


<div class="redes">
    <center>
  <h2>Puedes encontrarnos en las siguientes redes sociales</h2>
  </center>
  </div>
 <div class="footer contenedor">
  <div class="marca-logo">
    <center>
    <a href="https://www.youtube.com/channel/UCMG5ViuxZK7GtpkJZXdlEvA="target="_blank">
      <img src="img/youtu.png" alt="">
    </a>
    <a href="https://www.facebook.com/profile.php?id=100047506792349="target="_blank">
      <img src="img/face.png" alt="">
    </a>
    <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">
      <img src="img/gmail.png" alt="">
      </center>
    </a>
  </div>
</footer>
<!--que configuran los efectos de los botones-->
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
   </section>

   
 </body>
</html>