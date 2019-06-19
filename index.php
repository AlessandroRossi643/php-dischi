<?php // include 'datab.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP_DISCHI_AR</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <form class="search" action="">
        <input type="search" id="searchArtist" placeholder="Cerca artista..">
        <input type="submit" value="CERCA">
      </form>
    </header>

    <div class="container">
      <?php /* foreach ($dischi as $key => $value) { ?>
        <div class="card">
          <img src="<?php echo $value["immagine"]; ?>" class="immagineAlbum" alt="immagine album">
          <div class="card_info">
            <h2 class="titoloAlbum"><?php echo $value ["titolo"]; ?> </h2>
            <h3 class="artistaAlbum"> <?php echo $value ["artista"]; ?> </h3>
            <h4 class="annoAlbum"> <?php echo $value ["anno"]; ?> </h4>
          </div>
        </div> <?php
      }
      */?>
    </div>

    <script id="template-dischi" type="text/x-handlebars-template">
      <div class="card">
        <img src="{{immagine}}" class="immagineAlbum" alt="immagine album">
        <div class="card_info">
          <h1 class="titoloAlbum"> {{titolo}} </h1>
          <h2 class="artistaAlbum"> {{artista}} </h2>
          <div class="annoAlbum"> {{anno}} </div>
        </div>
      </div>
    </script>

    <script src="public/js/script.js" charset="utf-8"></script>
  </body>
</html>
