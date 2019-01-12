<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Staatliches" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../static/whoweare.css">
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

	

                
        </script>   
        
	</head>

	<body onload="transition()">
		<div id="dimScreen">
			<img src="../transition/transition_logo.png">
		</div>
	
		<div class="container">
			<!-- Navbar -->
			<?php include("../templates/secondary_header.php"); ?>

			<div class="header">
				<div class="whoweare__title">
					<h1>Who</h1>
					<h2>We Are</h2>
					<h3>"Leaders Among Men"</h3>
				</div>

				<div class="header__right"></div>
			</div>


			<div class="box_container">
				<div onclick="showimage()" class="values_box">
						<p>Our Values</p>
				</div>
				<div onclick="showimage()" class="national_box">
					<p>National History</p>
				</div>
				<div onclick="showimage()" class="chapter_box">
					<p>Chapter History</p>
				</div>
				<div onclick="showimage()" class="founding_box">
					<p>Founders History</p>
				</div>
				
			</div>



		<!-- CONTACT US -->
		<?php include("../templates/footer.php"); ?>

		</div>
	</body>
</html>
