<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>MON BLOG</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <header class="container-fluid nav-perent">
      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
          <img class="img_logo" src="assets/images/logo.png"/>
        </div>
        <div class="menu">
          <ul>
            <li><a href="/index.php?page=home">Home</a></li>
            <li><a href="/index.php?page=about">About</a></li>
            <li><a href="/index.php?page=project">Projects</a></li>
            <li><a href="/index.php?page=contact">Contact</a></li>
            <li><a href="#"><i class="fas fa-sign-in-alt fa-1x"></i></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <?php
      require $this->getPartialPath();
    ?>
    <footer>
      <div class="container-fluid footer">
        <div class="container">
          <div class="row bloc-footer">
            <div>
              <img class="img_logo" src="assets/images/logo-footer.png"/>
              <p>TACHERIFTE Mohamed El Amine</p>
            </div>
            <div class="social footer_li">
              <ul> 
                <li><a href=""><i class="fab fa-twitter fa-2x"></i></a></li>
                <li><a href="https://www.facebook.com/balletnaghma"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>  
              </ul>
              <p>Powred by massnissa.tacherifte@gmail.com</p>
            </div>  
          </div>
        </div>
      </div>
    </footer>
    <script src="https://kit.fontawesome.com/1a5ab8cc7f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="index.js" type="text/javascript"></script>
  </body>
</html>
