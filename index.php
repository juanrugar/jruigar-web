<?php
 include("helper.php");
 include("./includes/header.php");

?>
   <title>giftOfGab</title>
</head>

<body>

  <!-- Page Header -->
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

  <section class="jumbotron">
    <div class="container">
      <div class="row">
        <h2>Juan Ruiz García</h2>
      </div><br>
      <div class="row justify-content-center">
        <h3>Spatial Data Analyst | GIS Analyst | Landscape Archaeologist</h3>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-sm-6">
        <h4>Hello and welcome!</h4>
        <p>This is a simple personal showcase, a classic static, not-frameworked (yet!) portfolio webpage.<br>
          You may meet me at the <a href="about.php"><em>About</em></a> section for personal and professional details. There is a brief profile 
          and bio explaning who I am, what I do, and how I got here with some links to my online profiles and reference depos. 
          You can also check my academic career at the <a href="education.html"><em>Education</em></a>, where there is a summary of the fields I have devoted my professional 
          and personal interests through the years.
          Alternatively, you may jump to a probably more interesting section, where you can find samples of 
          each of my current activity niches: Spatial Data Analysis and traditional GIS. <br>
          Please, feel free to look around, and get in touch if any of it catches your eye.   
          <strong><h5>Thanks for visiting, and best wishes!</h5></strong>
        </p>
      </div>

      <div class="col-sm-6" style="background-image: url('https://picsum.photos/1100/400?grayscale');padding:100px 0px;">
        
      </div>  
    </div>
  </section>
  <br>

  <!-- footer -->
    <?php include('./includes/footer.php') ?>
    <!-- // footer -->

</body>

</html>