

		<?php

			//define each page url
			$urls = array(
				'Home' => 'index.php',
				'About' => 'about.php',
				'GIS' => 'gis.php',
				'Spatial Data Analysis' => 'spatialdata.php',
				'Landscape Archaeology' => 'landsarch.php'
			);

			//iterate through the array to render the navbar
			
			foreach ($urls as $name => $url) {
				echo '<a class="nav-link" href="'.$url.'">'.$name.'</a>';
			 	// echo '<li '.(($name) ? ' class="active" ': '').'><a class="nav-link" href="'.$url.'">'.$name.'</a></li>';
			 } 

		?>

	