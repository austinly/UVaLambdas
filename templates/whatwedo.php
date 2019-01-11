<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Staatliches" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../static/whatwedo.css">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
		<link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script>
			function transition(){
				$("#dimScreen").delay(500).fadeOut();

			}
			function showimage(image){
				console.log("CLICKED");
				/*
				$('body').append('<span class="mask"><span class="picture"></span></span>'); 
				$('.picture').css('background-image','url(' + image + ')');
				$('.picture').css('background-size','cover');

				<img class="picture" src=' + image + '>
				*/
				var mask = document.createElement('span');
				mask.className = "mask";
				var picturebox = document.createElement('div');
				picturebox.className = "picturebox";
				picturebox.style.backgroundImage = 'url(' + image + ')';
				var exit_pic = document.createElement('div');
				exit_pic.onclick = function(){
					mask.remove();

				}

				exit_pic.className = "exit_pic";

				picturebox.appendChild(exit_pic);
				mask.appendChild(picturebox);

                $('body').append(mask); 
			}

			function fadetoPage(pathToPage){
				$('body').append('<span class="mask2"><div class="picturebox"><div class="transition"></div></div></span>'); 
				var timer = setTimeout(function() {
					window.location= pathToPage;
				}, 400);
		   
			}
	</script>   
	</head>
	<body onload="transition()">
		<div class="container">
			<div id="dimScreen">
				<img src="/LFESite/transition/transition_logo.png">
			</div>
			<!-- Navbar -->
			<?php include("../templates/header.php"); ?>

			<div class="header">
				<div class="whatwedo__title">
					<h1>What</h1>
					<h2>We Do</h2>
				</div>
				<div class="header__right"></div>
			</div>
			<section class="philantrophy">
					<h3>Philantrophy</h3>
				<div class="phil_description">
				                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                 sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
				</div>

			</section>

			<section class="social">
				<div class="social_description">
					<h4>Social</h4>
					 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                 sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
				</div>
			</section>

			<div class="carousel2" data-flickity='{ "groupCells": true }'>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/1.jpg')"><img src="../pictures/whatwedo_pics/carousel/1.jpg"></div>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/2.jpg')"><img src="../pictures/whatwedo_pics/carousel/2.jpg"></div>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/3.jpg')"><img src="../pictures/whatwedo_pics/carousel/3.jpg"></div>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/4.jpg')"><img src="../pictures/whatwedo_pics/carousel/4.jpg"></div>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/5.jpg')"><img src="../pictures/whatwedo_pics/carousel/5.jpg"></div>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/6.jpg')"><img src="../pictures/whatwedo_pics/carousel/6.jpg"></div>
			    <div class="carousel-cell2" onclick="showimage('../pictures/whatwedo_pics/carousel/7.jpg')"><img src="../pictures/whatwedo_pics/carousel/7.jpg"></div>

			</div>
				   
			<!-- CONTACT US -->
			<?php include("../templates/footer.php"); ?>
		
		
		</div>
	</body>
</html>
