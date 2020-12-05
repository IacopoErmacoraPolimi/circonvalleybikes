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

  <div class="margine_sotto spazio_sopra">
    <div class="container">
      <div class="row">
        <h3 class="center">Shopping Cart</h3>
      </div>
      <div class="row" style="overflow: scroll;">
        <table>
        <thead>
          <tr>
              <th>Image</th>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>
        </thead>

        <tbody>
        <?php for ($i=1; $i < 6 ; $i++) { ?>
          <tr>
            <td><img style="width: 75px; height: 75px; object-fit: cover;" class="circle" src="/images/shop1.jpg"></td>
            <td style="overflow-wrap: break-word; word-wrap: break-word; hyphens: auto;">Felpa Circonvalleybikes 2020</td>
            <td>
              <select class="browser-default">
                <option value="" disabled selected>Choose your option</option>
                <?php for ($j=0; $j < 11; $j++) { ?>
                  <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                <?php } ?>
              </select>
            </td>
            <td>15$</td>
          </tr>
        <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="row center">
        <h5><b>Totale:</b> 157$</h5>
      </div>
      <div class="row center">
        <a class="col s12 waves-effect waves-light btn green">Order</a>
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
