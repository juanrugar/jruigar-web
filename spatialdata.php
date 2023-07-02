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

     <!-- FORMER DATA ANALYSIS SECTION-->
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
         
    <!-- FORMER END of DATA ANALYSIS section -->
  <!-- SPATIAL DATA ANALYSIS SECTION-->
   
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
