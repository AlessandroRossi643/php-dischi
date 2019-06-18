<?php include 'datab.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP_DISCHI_AR</title>
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>
    <div class="container">
      <?php foreach ($dischi as $key => $value) { ?>
        <div class="card">
          <img src="<?php echo $value["immagine"]; ?>" class="immagineAlbum" alt="immagine album">
          <h2 class="titoloAlbum"><?php echo $value ["titolo"]; ?> </h2>
          <h3 class="artistaAlbum"> <?php echo $value ["artista"]; ?> </h3>
          <h4 class="annoAlbum"> <?php echo $value ["anno"]; ?> </h4>
        </div> <?php
      }
      ?>
    </div>
    <script src="public/js/script.js" charset="utf-8"></script>
  </body>
</html>
