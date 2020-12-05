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

    <div id="index-banner" class="parallax-container" style="height: 40vh;">
    <div class="section no-pad-bot">
      <div class="container">
        <br>
        <br>
          <h1 class="header center white-text text-lighten-2">Shop</h1>
        <br>
        <br>
      </div>
    </div>
    <div class="parallax"><img src="/images/shop2.jpg" alt="Unsplashed background img 1" style="object-fit: cover; height: 200%; width: 80%;"></div>
  </div>

  <div class="margine_sotto spazio_sopra">
    <div class="container">
      <div class="row">
        <?php for ($i=1; $i < 10 ; $i++) { ?>
          <div class="col l4 m4 s12">
            <div class="card z-depth-0">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/images/shop1.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php echo $row["capo"]; ?>Nome Capo<i class="material-icons right">more_vert</i></span>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?php echo $row["capo"]; ?>Nome Capo<i class="material-icons right">close</i></span>
                    <p><?php echo $row["descrizione"]; ?>Descrizione Capo</p>
                    <form action="" method="post" enctype="multipart/form-data">
                    <p><b>Colori disponibili: </b></p>
                    <div class="input-field col s12">
                        <select name="colore<?php echo $row['id']; ?>" class="browser-default">
                          <option value="" disabled selected>Seleziona</option>
                        <?php
                        $colore = explode(",",$row["colori"]);
                        foreach ($colore as $item)
                        {
                          print "<option value='$item'>$item</option>";
                        }
                        ?>
                        </select>
                      </div>
                    <p><b>Taglie disponibili: </b></p>
                    <div class="input-field col s12">
                        <select name="taglia<?php echo $row['id']; ?>" class="browser-default">
                          <option value="" disabled selected>Seleziona</option>
                          <?php
                          $taglia = explode(",",$row["taglie"]);
                          foreach ($taglia as $item)
                          {
                            print "<option value='$item'>$item</option>";
                          }

                          ?>
                        </select>
                      </div>
                      <p><i>Vai allo shop per acquistare</i></p>
                    </form>
                  </div>
                </div>
          </div>
          <?php
          if ($i%3==0) {
            ?>
            </div>
            <div class="row">
            <?php
          }
         } ?>
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
