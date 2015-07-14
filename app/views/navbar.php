 <nav class="navbar navbar-default">
  <div class="container">

      <a class="navbar-brand" href="<?php echo site_url() ?>">
      	<img id = "logo" alt = "logo" src = "<?php echo site_url() ?>assets/media/images/new_logo_alpha.png" class = "img-responsive hidden-xs ">
      	<img id = "logo-smaller" alt = "logo" src = "<?php echo site_url() ?>assets/media/images/new_logo_alpha.png" class = "img-responsive hidden-lg hidden-md hidden-sm">
      </a>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url() ?>">Home</a></li>
        <li class = "dropdown">
          <a href="<?php echo site_url() ?>locations/">Locations</a>
          <ul class = "dropdown-menu">
            <li><a href="<?php echo site_url() ?>locations/springvale">Springvale</a></li>
            <li><a href="<?php echo site_url() ?>locations/lynbrook">Lynbrook</a></li>
          </ul>
        </li>
        <li class = "dropdown">
          <a href="<?php echo site_url() ?>conditions/">Common Conditions</a>
          <ul class = "dropdown-menu">
            <li><a href="<?php echo site_url() ?>conditions/heel">Heel Pain</a></li>
            <li><a href="<?php echo site_url() ?>conditions/skin">Skin and nail care</a></li>
            <li><a href="<?php echo site_url() ?>conditions/flat">Flat Feet</a></li>
            <li><a href="<?php echo site_url() ?>conditions/diabetes">Diabetes</a></li>
            <li><a href="<?php echo site_url() ?>conditions/shin">Shin Pain</a></li>
            <li><a href="<?php echo site_url() ?>conditions/knee">Knee Pain</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url() ?>services/">Services</a></li>
        <li><a href="<?php echo site_url() ?>blog/">News</a></li>
        <li><a href="<?php echo site_url() ?>booking/">Bookings</a></li>
        <li><a href="<?php echo site_url() ?>contact/">Contact</a></li>
      </ul>

  </div>
</nav>