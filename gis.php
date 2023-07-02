<?php
 include("helper.php");
 include("./includes/header.php");

?>

  
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
              <h2>Geographical Information Sytems</h2>
            </div>
            <br>
            <div class="row justify-content-center">
              <h3><em>Plain GIS: Layers, Thematic Cartography, and the traditional GIS insights</em></h3>
            </div>
          </div>
    </section>
    
<!-- GIS SECTION -->

   <section class="container GIS">
      <div class="row">
        <div class="col-sm-6">
          <h3><em>GIS</em></h3>
          <p>The traditional approach to geographic information management. Mainstream software packages are ArcGIS, ArcGIS Pro, and QGIS, as well as Hexagon Geomedia and Global Mapper. 
            Those tools enable to handle a wide variety of variables to provide suitable solutions for geospatial questions. However, here are five fields of use: territorial strategic studies, 
            local areas management and deployment of smarcity policies, routing systems for transportation and logistics, and geomarketing frameworks, 
            and, finally, the use of remote sensing for environmental hazard management and assessment using satellite imagery. (Here are a bunch of samples of those projects.)  
          </p>
        </div>
        <div class="col-sm-6" style="background-image: url('https://picsum.photos/1100/400?grayscale'); padding:0px 15px; border-radius: 10px;">
        </div>
      </div>
    </section><br>
    
   <!-- END of GIS section -->
   
<!-- WEBGIS WEBMAPPING SECTION-->
    <section class="container webGIS">
      <div class="row">
        <div class="col-sm-12">
          <h3><em>WebGIS and Web Mapping</em></h3>
          <p>A rich ecosystem of javascript libraries, APIs, and other solutions to display information geospatially, and to feed apps with georeferenced data.
            This web mapping tools array comprises mainly Leaflet.js and MapBoxGL, along with KeplerGL and, most recently, OpenLayers. 
            A comprehensive stack of projects developed with such tools is available <a href="https://juanrugar.github.io/webgis-portfolio/" target="_blank">here.</a></p>
        </div>
      </div>  
      <div class="row">
        <div class="col-sm-3">
          <a href="https://juanrugar.github.io/webgis-portfolio/leaflet-ajax.html" target="_blank"><h5>Leaflet.js</h5></a> <!-- Bookmark to webgis-portfolio leaflet section -->
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
   

    <!-- DATA ANALYSIS SECTION-->

      <!-- MOVED TO spatialdata.php -->
               
    <!-- END of DATA ANALYSIS section -->
        
    <!-- footer -->
    <?php include('./includes/footer.php') ?>
    <!-- // footer -->

   <!-- Jquery for Tooltips -->
  <script>
    /* $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    }); */
  </script>

  </body>
</html>
