<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/mplus_webfonts.css" />  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel='stylesheet' type="text/css" href='resources/css/style.css'/>

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='resources/js/script.js'></script>
</head>
<body>

    <?php include 'navbar.php';?>

  <!-- image slider -->

    <div id="frontSlider" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="resources/css/images/foot1.jpg" alt="">
          <div class="carousel-caption">
            <h3>HEADING1</h3>
            <div class = "backing"></div>
          </div>

        </div>

        <div class="item">
          <img src="resources/css/images/foot2.jpg" alt="">
            <div class="carousel-caption">
              <h3>HEADING2</h3>
              <div class = "backing"></div>  
          </div>
        </div>

        <div class="item">
          <img src="resources/css/images/foot3.jpg" alt="">
          <div class="carousel-caption">
            <div class = "backing"></div>
            <h3>HEADING3</h3>
          </div>
        </div>

        <div class="item">
          <img src="resources/css/images/foot4.jpg" alt="">
          <div class="carousel-caption">
            <div class = "backing"></div>
            <h3>HEADING4</h3>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <div id = "slider-buttons">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="glyphicon glyphicon-chevron-right"></span>
      </div>
        <!-- fase in images on left and right -->
      <div class = "covers">
          <div class = "left"></div>
          <div class = "right"></div>
      </div>
    </div>

    <!-- info blocks -->

    <div id = "info-blocks" class = "container">
          <div class="row">
            <div class="col-md-4 white-text">
                <h2>Heading 1</h2>
                <h4>Subheading 1</h4>
                <p>Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
                <div class = "container"> <a class = "link-button pull-right"> Link 1 </a> </div>
            </div>
            <div class="col-md-4 white-text">
                <h2>Heading 2</h2>
                <h4 class = "darkerblue-text">Subheading 2</h4>
                <p>Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
                <div class = "container"> <a class = "link-button pull-right"> Link 2 </a> </div>

            </div>
            <div class="col-md-4 white-text">
                <h2>Heading 3</h2>
                <h4>Subheading 3</h4>
                <p>Montes, Vivamus a Integer pede Lorem dis vitae, vel, pretium. mollis ridiculus enim. eget nec, consequat dictum nascetur justo. vitae, nascetur Aenean Aenean </p>
                <div class = "container"> <a class = "link-button pull-right"> Link 3 </a> </div>
            </div>
          </div>
    </div>

  <!-- more content -->

    <div id = "writeup" class = "container">
        <h1>Detailed Writeup</h1>
        <div id = "writeup-blocks" class = "container">
            <div class="row">
                <div class="col-md-6">
                    <p class = "LE 50"></p>
                </div>
                <div class="col-md-6">
                    <p class = "LE 50"></p>
                </div>
            </div>
        </div>
    </div>

    <div id = "alt-circle" class = "container-fluid hidden-md hidden-lg">
        <div class="row">
            <div class="col-md-12">
                 <div class = "circle blue center-block white-text">
                    <span class = "glyphicon glyphicon-map-marker"></span>
                    <h4> 3/14 Balmoral Avenue, Springvale, Melbourne, Victoria, Australia </h4>
                    <div class = "container"> <a class = "link-button">Find Us</a> </div>
                 </div>
            </div>
        </div>
    </div>

    <div id = "window" class = "container-fluid">
        <div class="row">
            <div class="col-md-8 ">
                <div id = "window-text" class = "white">
                    <h1>Testimonials</h1>
                        <ul>
                            <li><i>"Thank-you for your high level of care and treatment. I am so happy to say that I no longer suffer with heel pain, I am now pain free and can enjoy getting back to the activities I love."</i> - Lynette Stokie </li>
                            <li><i>"Thanks to Lynne I now no longer have ankle pain. Friendly, professional and excellent at what she does. Highly recommended!"</i> - Anita Weber </li>
                            <li><i>"After years of ankle pain, finally found a solution at this place. Fantastic"</i> - Karan Laxman </li>
                        </ul>
                </div>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm">
                 <div class = "circle blue pull-right white-text">
                    <span class = "glyphicon glyphicon-map-marker"></span>
                    <h4> 3/14 Balmoral Avenue, Springvale, Melbourne, Victoria, Australia </h4>
                    <div class = "container"> <a class = "link-button">Find Us</a> </div>
                 </div>
            </div>
        </div>

        <div class = "slope top"></div>
        <img id = "window-photo" src="resources/css/images/clinic1.jpg">      
    </div>



    <?php include 'footer.php';?>

</body></html>