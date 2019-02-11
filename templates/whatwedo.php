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
				<img src="../transition/transition_logo.png">
			</div>
			<!-- Navbar -->
			<?php include("../templates/secondary_header.php"); ?>

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
				                            <p>The Alpha Tau chapter of Lambda Phi Epsilon places 
												a large emphasis on interaction with the greater University 
												of Virginia community. The chapter hosts multiple large social 
												events for the entire surrounding community to enjoy every year, 
												as well as many opportunities to interact with other members of 
												the Multicultural Greek Council and Asian-American community at 
												the University. The brothers of the Alpha Tau chapter of Lambda
												 Phi Epsilon also make it a personal goal to support the events 
												 hosted by other organizations on grounds by participating 
												 whenever possible.</p>
				</div>

			</section>

			<section class="social">
				<div class="social_description">
					<h4>Social</h4>
					 <p>Lambda Phi Epsilon works with the National Marrow Donor Program (NMDP)
						  to save the lives of patients requiring bone marrow transplants. In 1996,
						   Lambda Phi Epsilon’s national philanthropy, Be The Match, was founded
							and has been working closely with the fraternity on a national scale 
							ever since. The Alpha Tau chapter of Lambda Phi Epsilon hosts bone 
							marrow drives and a large university wide philanthropy event every 
							year. In the past these events have included a comedy show, Flicks
							 for Lives ultimate frisbee tournament, and Twitch Plays Lambdas 
							 live streams, with all profits benefiting Be The Match.</p>
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
