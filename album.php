<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/noistudenti.css"  media="screen,projection"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css" rel="stylesheet"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Roboto', sans-serif;
      }
    </style>
  </head>

  <body>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/navbar_general.php'; ?>

    <div id="index-banner" class="parallax-container" style="height: 50vh;">
    <div class="section no-pad-bot">
      <div class="container">
        <br>
        <br>
          <h1 class="header center white-text text-lighten-2">Titolo Album</h1>
        <br>
        <br>
      </div>
    </div>
    <div class="parallax"><img src="/images/trip2.jpg" alt="Unsplashed background img 1" style="object-fit: cover; height: 200%; width: 80%;"></div>
  </div>

  <div class="margine_sotto spazio_sopra">
    <div class="container">
       <div class="row">
         <iframe src="https://drive.google.com/embeddedfolderview?id=1AlBs9M5NVh3g1r0-YUpOS91Fpx9k13zh#grid" style="width: 100%; height:600px; border:0;"></iframe>
       </div>
    </div>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'].'/footer_general.php'; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
    </script>

  </body>
</html>
