<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
		<?php wp_title('Zakra'); ?>
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.1/css/all.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css ?ver=<?php echo rand(111,999)?>">
	<script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?> /js/menu.js"></script>
</head>

<body>
	<div class="header-wrap">
		<header class="header flex-box container">
			<div class="left-sec">
				<span class="header-text">Location: 2899 Scott Street, NY, New York | Phone: +111-64763895987</span>
			</div>
			<div class="right-sec">
				<div class="icon-bar flex-box">
					<a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
					<a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
					<a href="#" title="Youtube"><i class="fab fa-youtube"></i></a>
					<a href="#" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>	
		</header>
	</div>
	<div class="banner">
		<div class="container">
		    <div class="top-sec flex-box">
			    <div class="logo-sec flex-box">
			        <a href="#" title="Zakra"><i class="fa fa-bullseye"></i></a>
				    <a href="#" title="Zakra"><h1 class="logo-title">Zakra</h1></a>
			    </div>
			    <div class="menu-bar">
				    <nav>
					    <ul class="menu-list flex-box">
						    <li><a href="#">Home</a></li>
						    <li><a href="#">Services</a></li>
						    <li><a href="#">Team</a></li>
						    <li><a href="#">Blog</a></li>
						    <li><a href="#">About Us</a></li>
						    <li><a href="#">Contact</a></li>
						    <li><a href="#" title="Search"><i class="fa fa-search"></i></a></li>
					    </ul>
				    </nav>
				</div>

				<div class="menu-hamburger">
                    <button class="openbtn" onclick="openNav()"><i class="fa fa-reorder" style="font-size:25px"></i></button> 
                </div>
				
				<div id="sideBar" class="sidebar">
					<button type="button" class="closebtn" onclick="closeNav()"><i class="fa fa-close close-icon"></i></button>
					<div class="menu">
				        <nav>
					        <ul class="menu-list">
						        <li><a href="#">Home</a></li>
						        <li><a href="#">Services</a></li>
						        <li><a href="#">Team</a></li>
						        <li><a href="#">Blog</a></li>
						        <li><a href="#">About Us</a></li>
						        <li><a href="#">Contact</a></li>
						        <li><a href="#" title="Search"><i class="fa fa-search"></i></a></li>
					        </ul>
				        </nav>
				    </div>  
                </div>
			</div>
			
		    <div class="banner-content">
			    <h2>We believe in creativity with innovative ideas</h2>
			    <p>We are here to help you in making your site beautiful and professional!</p>
			    <button class="primary-button" type="button" value="Learn More">Learn More</button>
		    </div>
        </div>
	</div>
  

