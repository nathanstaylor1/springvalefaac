<!-- image slider -->

<div id="frontSlider" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class = "editable" name = "Slide-1-image" src="<?php echo site_url() ?>assets/media/images/foot1.jpg" alt="">
      <div class="carousel-caption">
        <span><h3 class = "editable-t caption" name = "Slide-1-Heading">skin and nail care</h3></span>
        <div class = "backing"></div>
      </div>

    </div>

    <div class="item">
      <img class = "editable" name = "Slide-2-image" src="<?php echo site_url() ?>assets/media/images/foot2.jpg" alt="">
        <div class="carousel-caption">
          <span><h3 class = "editable-t caption" name = "Slide-2-Heading">orthotics</h3></span>
          <div class = "backing"></div>  
      </div>
    </div>

    <div class="item">
      <img class = "editable" name = "Slide-3-image" src="<?php echo site_url() ?>assets/media/images/foot3.jpg" alt="">
      <div class="carousel-caption">
        <div class = "backing"></div>
        <span><h3 class = "editable-t caption" name = "Slide-3-Heading">heel pain</h3></span>
      </div>
    </div>

    <div class="item">
      <img class = "editable" name = "Slide-4-image" src="<?php echo site_url() ?>assets/media/images/foot4.jpg" alt="">
      <div class="carousel-caption">
        <div class = "backing"></div>
        <span><h3 class = "editable-t caption" name = "Slide-4-Heading">diabetes foot care</h3></span>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <div id = "slider-buttons">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="glyphicon glyphicon-chevron-right"></span>
  </div>

</div>

<!-- info blocks -->

<div id = "info-blocks" class = "container">
      <div class="row flexbox">
        <div class="col-md-4 white-text">
            <h2 class = "editable-t" name = "block-1-heading">What is a podiatrist?</h2>
            <p class = "editable-t" name = "block-1-content">Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
            <div class = "container"> <a href="<?php echo site_url() ?>services/" name = "block-1-link" class = "link-button pull-right editable"> Learn More </a> </div>
        </div>
        <div class="col-md-4 white-text">
            <h2 class = "editable-t" name = "block-2-heading">Rebates</h2>
            <p class = "editable-t" name = "block-2-content">Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
            
        </div>
        <div class="col-md-4 white-text">
            <h2 class = "editable-t" name = "block-3-heading"> <a href="<?php echo site_url() ?>blog/">News</a></h2>
            <ul>
              <?php foreach($archive as $a):?>
                <li><a href="<?php echo $a->url?>"><?php echo $a->title ?></a></li>
              <?php endforeach;?>
            </ul>
        </div>
      </div>
</div>

<!-- more content -->

<div id = "writeup" class = "container">
    <h1 class = "editable-t" name = "detailed-writeup-heading">Detailed Writeup</h1>
    <div id = "writeup-blocks" class = "container">
        <div class="row">
            <div class="col-md-6">
                <p class = "editable-t" name = "detailed-writeup-column1" >Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean. Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
            </div>
            <div class="col-md-6">
                <p class = "editable-t" name = "detailed-writeup-column2" >Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean. Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
             </div>
        </div>
    </div>
</div>

<div id = "text-circle" class = "circle blue center-block white-text container-fluid">
   <span>
      <span class = "glyphicon glyphicon-map-marker"></span>
      <h4 class = "editable-t" name = "circle-text"> 3/14 Balmoral Avenue, Springvale, Melbourne, Victoria, Australia </h4>
      <a href="<?php echo site_url() ?>locations/" class = "link-button editable" name = "circle-link">Find Us</a>
   </span>
</div>

<div id = "window" class = "container-fluid">
    <div class="row">
        <div class="col-md-8 ">
            <div id = "window-text" class = "white">
                <h1 class = "editable-t" name = "window-heading">Testimonials</h1>
                    <ul>
                        <li class = "editable-t" name = "window-dotpoint1" ><i>"Thank-you for your high level of care and treatment. I am so happy to say that I no longer suffer with heel pain, I am now pain free and can enjoy getting back to the activities I love."</i> - Lynette Stokie </li>
                        <li class = "editable-t" name = "window-dotpoint2" ><i>"Thanks to Lynne I now no longer have ankle pain. Friendly, professional and excellent at what she does. Highly recommended!"</i> - Anita Weber </li>
                        <li class = "editable-t" name = "window-dotpoint3" ><i>"After years of ankle pain, finally found a solution at this place. Fantastic"</i> - Karan Laxman </li>
                    </ul>
            </div>
        </div>
    </div>

    <div class = "slope top"></div>
</div>






