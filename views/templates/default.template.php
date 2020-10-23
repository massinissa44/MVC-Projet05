<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <header class="header"></header>
    <section class="main">
    <?php
      require $this->getPartialPath();
    ?>
    </section>
    <footer class="footer"></footer>
  </body>
</html>
