<nav style="" class="z-depth-0">
    <div class="nav-wrapper grey darken-4">
      <a href="/" class="brand-logo center white-text hide-on-med-and-down">CirconValleyBikes</a>
      <a href="/" class="brand-logo center white-text hide-on-large-only">CVB</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger show-on-large right"><i class="material-icons">menu</i></a>
      <a href="/cart.php" class="right"><i class="material-icons green-text">shopping_cart</i></a>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="shop.php">Merch</a></li>
  <li><a href="events.php">Events</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="trips.php">Trips</a></li>
</ul>

<script>
  $(document).ready(function(){
    $('.sidenav').sidenav({edge: 'right', inDuration: 700, outDuration: 700});
    $('.sidenav-trigger').sideNav({
      menuWidth: 300,
      closeOnClick: true,
      edge: 'right', // <--- CHECK THIS OUT
    }
  );
  });
</script>
