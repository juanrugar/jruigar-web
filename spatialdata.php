<?php
 include("helper.php");
 include("./includes/header.php");

?>

   <title>giftOfGab</title>
</head>

  <body>
    <header class="container">
       <div class="row">
        <h1 class="col-sm-6"></h1>
           <!-- Navigation -->
      <nav class="col-sm-12 text-right">
        
         <?php
          include("./includes/navbar.php");
       
        ?>  
              
          </nav>
       </div>
    </header>

<!-- JUMBOTRON SECTION-->
    <section class="jumbotron">
          <div class="container">
            <div class="row">
              <h2>Juan Ruiz García</h2>
            </div>
            <br>
            <div class="row justify-content-center">
              <h3><em>"Experience is the Teacher of All Things"</em> - Julius Caesar</h3>
            </div>
          </div>
    </section>
    
<!-- SPATIAL DATA ANALYSIS SECTION-->
    <section class="container webGIS">
      <div class="row">
        <div class="col-sm-12">
          <h3><em>WebGIS and Web Mapping</em></h3>
          <p>A rich acosystem of javascript libraries, APIs, and other solutions to display information geospatially, and to feed apps with georeferenced data.
            This web mapping tools array comprises mainly Leaflet.js and MapBoxGL, along with KeplerGL and Google Maps Platform. 
            A comprehensive stack of projects developed with such tools is avalable <a href="https://juanrugar.github.io/webgis-portfolio/" target="_blank">here.</a></p>
        </div>
      </div>  
      <div class="row">
        <div class="col-sm-3">
          <a href="https://juanrugar.github.io/webgis-portfolio/index.html#leaflet" target="_blank"><h5>Leaflet.js</h5></a> <!-- Bookmark to webgis-portfolio leaflet section -->
        </div>
        <div class="col-sm-3">
          <a href="https://juanrugar.github.io/webgis-portfolio/index.html#mapbox" target="_blank"><h5>MapboxGL</h5></a>
        </div>
        <div class="col-sm-3">
          <a href="https://juanrugar.github.io/webgis-portfolio/index.html#kepler" target="_blank"><h5>KeplerGL</h5></a>
        </div>
        <div class="col-sm-3">
          <a href="https://juanrugar.github.io/webgis-portfolio/index.html#webapps" target="_blank"><h5>webGIS apps</h5></a>
        </div>
      </div>

    </section><br>
       
        
    <!-- END of WEBGIS section-->
  
   
    <!-- footer -->
    <?php include('./includes/footer.php') ?>
    <!-- // footer -->

   <!-- Jquery for Tooltips -->
  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  </body>
</html>
