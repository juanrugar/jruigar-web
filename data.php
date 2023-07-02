<?php

//This file acts as a little database

// We're using PHP arrays for almost all info about our blog, posts, etc.
$menus = [
    ["title" => "Home", "url" => "#"],
    ["title" => "About", "url" => "#"],
    ["title" => "GIS", "url" => "#"],
    ["title" => "Spatial Data Analysis", "url" => "#"],
    ["title" => "Landscape Archaeology", "url" => "#"]
];

$posts = [
    ["num" => "1", 
        "ptitle" => "Turpis nunc eget lorem dolor sed", 
        "author" => "lazyblogger", 
        "day"=>"8", 
        "month"=> "July", 
        "year"=>"2019",
        "img"=>"https://picsum.photos/150/150/?123",
        "text"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ],
    ["num" => "2", 
        "ptitle" => "Vitae tempus quam pellentesque nec nam", 
        "author" => "lazyblogger", 
        "day"=>"14", 
        "month"=> "September", 
        "year"=>"2020",
        "img"=>"https://picsum.photos/150/150/?a",
        "text"=>"Vitae tempus quam pellentesque nec nam. Platea dictumst fermentum odio eu feugiat pretium. Ut enim blandit volutpat
									maecenas volutpat blandit vestibulum rhoncus est. Aliquam id diam maecenas ultricies. Arcu ac tortor dignissim convallis
									aenean et. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium. Ut enim blandit volutpat maecenas volutpat
									blandit."
    ],
];