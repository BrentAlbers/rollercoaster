<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <?php
  require_once('header.php'); 
  ?>
  
  <main>
    <div class="container">
    <h2>Contactformulier</h2>

    <?php 
    if(isset($_GET['msg'])){
      echo $_GET['msg'];
    }
    ?>

    <form action="backend/contactController.php" method="post">
      

      <div class="form-group">
        <label for="title">Titel:</label>
        <br>
        <input type="text" name="title">
      </div>

      <div class="form-group">
        <label for="name">Naam:</label>
        <br>
        <input type="text" name="name">
      </div>


      <div class="form-group">
        <label for="email">E-mail:</label>
        <br>
        <input id="email" type="email" name="email" placeholder="test@gmail.com">
      </div>

      <div class="form-group">
        <label for="message">Uw boodschap:</label>
        <br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
      </div>
      
      <div class="form-group">
        <input type="submit" value="Verzend Contactformulier">
      </div>
    </form>
  </div>

  </main>

  <?php
  require_once('footer.php'); 
  ?>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>