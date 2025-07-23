<!DOCTYPE html>
<html>
<head>
  <title>Cantantes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link rel="stylesheet" href="CSS/cantantes.css">
  <link rel="stylesheet" href="JS/cantantes.js">
</head>
  <body>
   <header>
    <div class="titulo_p">
    <center> <h1>Cantantes</h1></center>
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

<div class="column">
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="img/jagger.webp" alt="" class="gallery-image" data-info="Mick Jagger (The Rolling Stones)

            Nadie se mueve como Jagger, ni tiene su voz, imagen, sentido de la moda o carisma del líder de la banda de rock and roll más grande del mundo. Un locutor grita memorablemente esa afirmación en los primeros momentos del histórico álbum en vivo de los Stones de 1970 Get Yer Ya-Yas Out!, y Jagger, quien cumplió 80 años el 26 de julio, ha permitido que la banda esté a la altura de ese alarde por más de medio siglo, desde su debut en el Hot 100 en 1964 (con “Not Fade Away”) hasta el hito que marcó su Sixty Tour de 2022. No le resta nada a los actuales compañeros de banda sobrevivientes de Jagger — los legendarios Keith Richards y Ronnie Wood — y sus músicos de gira darle crédito al cantante ante todo por la importancia duradera de los Stones para la música y la cultura del rock. Después de tantos años, Mick Jagger continúa personificando no solo a los Rolling Stones, sino también al mismo rock and roll: poderosamente sexual, amenazante, liberador y alegre, todo a la vez.">
        </div>

        <div class="gallery-item">
            <img src="img/stevie.webp" alt="Imagen 2" class="gallery-image" data-info="Stevie Nicks (Fleetwood Mac)

            Mucho se ha dicho sobre la vibra mágica de Stevie Nicks en las últimas cinco décadas, y realmente hay algo encantador en la líder de Fleetwood Mac. Ya sea en el escenario o en una sala llena de algunos de los músicos más talentosos de una generación, Nicks no pudo evitar sobresalir con sus capas flotantes y una voz que presentaba suficiente valor para lijar los exteriores más ásperos. Las canciones que Nicks contribuyó a Mac no solo están entre las mejores de la banda, sino también son elementos básicos de la cultura pop y la radio más perdurables de los años 70 y 80, con su capacidad para aprovechar las grietas más profundas de su propia alma para hipnotizar y obsesionar a los oyentes de una manera que ningún otro cantante podría esperar igualar">
        </div>

        <div class="gallery-item">
            <img src="img/Freddie.jpg" alt="Imagen 3" class="gallery-image" data-info="Freddie Mercury (Queen)

            El puntal seguro de sí mismo. El rango vocal de cuatro octavas. El extenso catálogo de éxitos. Freddie Mercury nació para ser líder, y su estilo teatral (en su música, moda, presencia escénica y, en realidad, en su vida misma) hizo que Queen se destacara en la concurrida escena del rock británico en la década de 1970. Además de su voz inmediatamente reconocible, Mercury también escribió algunas de las canciones más importantes de Queen, incluyendo la mitad de las 14 pistas del álbum Greatest Hits de 1981 de la banda. La película biográfica Bohemian Rhapsody de 2018 solo realzó el legado ya legendario de Mercury, concluyendo con la venerada actuación de la banda en el Live Aid de 1985 antes de la muerte del cantante por complicaciones de sida en 1991 a los 45 años. Otra historia de un virtuoso que se fue demasiado pronto, pero entre momentos de la cultura pop y un catálogo por siempre relevante, el genio de Mercury sigue vivo.">
        </div>
    </div>
</div>
    <div id="infoModal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <p id="infoText"></p>
        </div>
    </div>

    <script>
        document.querySelectorAll('.gallery-image').forEach(image => {
            image.addEventListener('click', function() {
                var info = this.getAttribute('data-info');
                document.getElementById('infoText').textContent = info;
                document.getElementById('infoModal').style.display = 'block';
            });
        });

        document.querySelector('.close-button').addEventListener('click', function() {
            document.getElementById('infoModal').style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == document.getElementById('infoModal')) {
                document.getElementById('infoModal').style.display = 'none';
            }
        });
    </script>


    <div class="container">
        <div class="info-box">
            <img src="img/chuck.webp" alt="Imagen 1" class="info-image">
            <div class="info-content">
                <h2>Charles Edward Anderson Berry,</h2>
                <p>Charles Edward Anderson Berry, el legendario Chuck Berry, falleció con 90 años después de siete décadas de carrera. Es considerado de manera indiscutible como uno de los pioneros y forjadores de la música rock and roll. Llamado el "padre fundador" del género.</p>
            </div>
        </div>
        <div class="info-box">
            <img src="img/cancionfamosa.jpg" alt="Imagen 2" class="info-image">
            <div class="info-content">
                <h2>[I Can't Get No] Satisfaction- The Rolling Stones</h2>
                <p>Esta canción debe ocupar el primer lugar dentro del ranking de Las 100 mejores canciones de Rock; Lou Reed, Bono de U2, Johnny Cash, Art Garfunkel y Bonnie Raitt, son algunas de las grandes estrellas que eligieron entre miles de melodías.</p>
            </div>
        </div>
        <div class="info-box">
            <img src="img/peorcancion.png" alt="Imagen 3" class="info-image">
            <div class="info-content">
                <h2>Queen – I’m Going Slightly Mad</h2>
                <p>La canción se destaca por un solo de motosierra interpretado por Dupree. William Phillips y Brian Cogan en la Encyclopedia of Heavy Metal Music se refirieron a él como un "éxito novedoso un tanto cursi".El vídeo musical de la canción presenta a John David Kaldoner, entonces ejecutivo de A&R de Geffen Records , interpretando a un leñador. Greg Vernon fue el director del vídeo. </p>
            </div>
        </div>
        <div class="info-box">
            <img src="img/William.jpg" alt="Imagen 4" class="info-image">
            <div class="info-content">
                <h2>William Hung</h2>
                <p> Hong Kong, 13 de enero de 1982 es un estudiante universitario de origen chino radicado en los Estados Unidos, que ganó fama y notoriedad a principios del 2004 como resultado de su paupérrima interpretación del éxito de Ricky Martin «She Bangs», en la audición de la tercera temporada del programa de televisión estadounidense American idol</p>
            </div>
        </div>
    </div>

<!--
 <div class="container2">
        <div class="circle" id="circle" onclick="fillCircle(80)">
            <div class="mask full" id="maskFull"></div>
            <div class="fill" id="fill"></div>
        </div>
    </div>
-->



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

 </body>
</html>
