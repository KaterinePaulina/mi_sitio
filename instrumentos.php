<!DOCTYPE html>
<html>
<head>
  <title>Instrumentos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link rel="stylesheet" href="CSS/instrumentos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
  <body>
   <header>
    <div class="titulo_p">
    <center> <h1>Instrumentos</h1></center>
    </div>
   <div id="header">
    <ul class="nav">
    <li><a href="login.php">Ingresar</a>
    <li><a href="index.php">Home</a> 

      <li><a href="rap.php">Rap</a>
        
      </li>


      <li><a href="rock.php">Rock</a>
        <ul>
       <li><a href="cantantes.php">cantante</a>
          <li><a href="instrumentos.php">instrumentos</a>
        </ul>
        </li>

      <li><a href="clasica.php">Clasico</a>

<li><a href="ayuda.php">Ayuda</a>



    </li>
   </ul>

<div class="search-container">
            <input type="text" id="search-input" placeholder="Buscar..." class="search-box">
            <span class="search-icon"><i class="fas fa-search" onclick="searchText()"></i></span>
        </div>
   </div>

<div class="cont">
    <div class="batery">
        <img src="img/bateria.jpg" alt="Imagen para reproducir audio" class="clickable-image" id="audioImage">
        <audio id="audio" src="img/bateria.mp3"></audio>
        <p>BATERIA</p>
    </div>
    
    <div class="gitarry">
        <img src="img/guitarraelectrica.jpg" alt="Imagen para reproducir audio" class="clickable-image" id="audioImage1">
        <audio id="audio1" src="img/guitarraelectrica.mp3"></audio>
        <p>GUITARRA ELECTRICA</p>
    </div>
   
    <div class="bajo">
        <img src="img/bajo.jpg" alt="Imagen para reproducir audio" class="clickable-image" id="audioImage2">
        <audio id="audio2" src="img/bajo.mp3"></audio>
        <p>BAJO</p>
    </div>
    </div>
</div>

    <script>
        document.getElementById('audioImage').addEventListener('click', function() {
            var audio = document.getElementById('audio');
            audio.play();
        });
    </script>

    <script>
        document.getElementById('audioImage1').addEventListener('click', function() {
            var audio = document.getElementById('audio');
            audio1.play();
        });
    </script>

    <script>
        document.getElementById('audioImage2').addEventListener('click', function() {
            var audio = document.getElementById('audio');
            audio2.play();
        });
    </script>





    <div class="container2">
        <div class="info-box">
            <h2 class="info-title">¿Por que se popularizaron estos instrumentos en el rock?</h2>
            <div class="info-content">
                <p>Los instrumentos se popularizaron en el rock debido a su capacidad para producir sonidos potentes y enérgicos que complementaban perfectamente el estilo de música de rock. La guitarra eléctrica, por ejemplo, permite crear riffs y solos impactantes, mientras que la batería aporta un ritmo contundente que impulsa la energía de la música. Estos instrumentos se convirtieron en pilares del género rock debido a su capacidad para transmitir emociones fuertes y crear un ambiente vibrante en las presentaciones en vivo.</p>
            </div>
        </div>
        <div class="info-box">
            <h2 class="info-title">¿En que año se popularizaron?</h2>
            <div class="info-content">
                <p> Los instrumentos en el rock se popularizaron en la década de 1950, cuando surgieron artistas pioneros como Elvis Presley, Chuck Berry y Buddy Holly. A partir de entonces, el rock and roll comenzó a incorporar guitarras eléctricas, bajos, baterías y teclados de manera prominente en su sonido</p>
            </div>
        </div>
        <div class="info-box">
            <h2 class="info-title">Bandas que suelen utilizar este tipo de instrumentos</h2>
            <div class="info-content">
                <p>Bandas legendarias como Led Zeppelin, The Who, AC/DC, y Red Hot Chili Peppers son conocidas por destacar la batería, guitarra eléctrica y bajos en sus composiciones. Estas bandas han demostrado una maestría en el uso de estos instrumentos para crear sonidos poderosos y memorables que han dejado una huella indeleble en la historia del rock</p>
            </div>
        </div>
        <div class="info-box">
            <h2 class="info-title">¿El instrumento realmente genera un cambio en la cancion?</h2>
            <div class="info-content">
                <p>Absolutamente, el instrumento puede generar un cambio significativo en una canción. Por ejemplo, la introducción de la guitarra eléctrica distorsionada en el rock le otorga un sonido distintivo y poderoso, mientras que un piano puede añadir un tono melódico y emotivo. Los diferentes instrumentos tienen la capacidad de alterar el estado de ánimo, el ritmo y la energía de una canción, lo que influye en la forma en que se percibe y se experimenta. La elección de instrumentos y cómo se utilizan es crucial en la creación musical.</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.info-title').forEach(title => {
            title.addEventListener('click', function() {
                this.nextElementSibling.classList.toggle('show');
            });
        });
    </script>

<div class="GIF">
    <img src="img/gif.gif">
</div>

<!--redes sociales-->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
</html>
