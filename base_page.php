<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/noistudenti.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  </head>

  <body>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/navbar_general.php'; ?>

    <div class="parallax-container" style="height: 50vh">
        <div class="parallax"><img src="/merch2.jpeg" style="height: 160%; width: auto; opacity: 0.5;"></div>
    </div>

    <div class="margine_sotto spazio_sopra">
      <div class="container">
        <div class="row">
          <div class="col s4">
            <h3 class="center">Latest Merch</h3>
            <div class="card z-depth-1">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="/parallax1.jpg">
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
          <div class="col s4">
            <h3 class="center">Latest Event</h3>
                <div class="card">
                  <div class="card-image">
                    <img src="parallax1.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-action">
                    <a href="#">Scopri di più</a>
                  </div>
                </div>
          </div>
          <div class="col s4">
            <h3 class="center">Latest Trip</h3>
                <div class="card">
                  <div class="card-image">
                    <img src="parallax1.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title">Card Title</span>
                  </div>
                  <div class="card-action">
                    <a href="#">Scopri di più</a>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
</html>
