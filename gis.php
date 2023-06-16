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
          foreach($menus as $menu){
           echo '<a class="nav-link" href="'.$menu['url'].'">'.$menu['title'].'</a>';
          }
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
    
<!-- WEBGIS WEBMAPPING SECTION-->
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
  
   <section class="container GIS"> <!-- GIS SECTION -->
      <div class="row">
        <div class="col-sm-12">
          <h3><em>GIS</em></h3>
          <p>A more traditional approach to geographic and spatial analysis and management. Mainstream software packages are ArcGIS and QGIS, as well as Hexagon Geomedia and Global Mapper. 
            Those tools allow to handle a wide variety of topics to provide suitable solutions for geospatial questions. However, here are five fields of use: territorial strategic studies, 
            local areas management and deployment of smarcity policies, routing systems for transportation and logistics and geomarketing frameworks, 
            and the use of remote sensing for environmental hazard management and assessment using satellite imagery. Here are a bunch of samples of those projects.  
          </p>
        </div>
      </div>
    </section><br>
    
   <!-- END of GIS section -->
   
    <!-- DATA ANALYSIS SECTION-->
    <section class="container datAnalysis"> 
      <div class="row">
        <div class="col-sm-12">
          <h3><em>Data Analysis</em></h3>
          <p>In addition to the data analysis tools embedded into GIS packages, the use of R language libraries provides an extra array of useful resources for data 
            management and analysis, visualization, and cartographical production. This is specially true when handling a large amount of data, served in different formats, 
            and stored in very heavy files, which, usually overwhelm GIS or other usual data info packages such as databases and datasheets and crash your computer. 
            R and Python are a potent solution to tackle those technicalities and provide excellent results.</p>
        </div>
      </div>
      <div c class="row">
        <div class="col-sm-3">
          <a href="https://github.com/juanrugar/UrbanAnalysis" target="_blank"><h5>Urban Analysis</h5></a>
        </div>
      </div>
    </section>
    <br><br>
         
    <!-- END of DATA ANALYSIS section -->
        
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
