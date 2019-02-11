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

                function showimage(content, id){
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
					// if the id is value, then make the font smaller
					
					picturebox.innerHTML = content;
					if(id == "values"){
						picturebox.id = id;
					}
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
				<div onclick="showimage('MISSION: To guide men on a lifelong discovery of authenticity and personal growth. <br><br> VISION: A world where Lambda men live authentic, fulfilling lives and contribute through the pursuit of their noble purpose. <br><br>CORE VALUES:<br> Authenticity: Demonstration of one’s true self to the world, despite external expectations. <br><br> Courageous Leadership: Integrity through action towards a more humane world, especially in times of adversity. <br><br> Cultural Heritage: Ideas and experiences of a people, transcending the world through generations.<br><br> Love: Care and respect for oneself, the brotherhood, and the world. <br> Wisdom: Pursuit of understanding and its positive application towards one’s life and the world.', 'values')" class="values_box">
						<p>Our Values</p>
				</div>
				<div onclick="showimage('Lambda Phi Epsilon was founded on February 25, 1981 by a group of nineteen dedicated men led by principal founder Mr. Craig Ishigo.  Hoping to transcend the traditional boundaries of national origins, the founders aimed to create an organization that would set new standards of excellence within the Asian American community, develop leaders within each of the member’s respective community, and bridge the gaps between those communities. Today, Lambda Phi Epsilon continues to expand across North America and has become the largest and fastest growing Asian-interest fraternity in the world.')" class="national_box">
					<p>National History</p>
				</div>
				<div onclick="showimage('The Alpha Tau chapter of Lambda Phi Epsilon was founded with the help of the Upsilon chapter at Johns Hopkins University on March 16, 2002 with a charter class of 11 men. In 2004, the chapter successfully applied for associate status, and helped found the Multicultural Greek Council at the University of Virginia. Ten years later, in the Spring of 2014, the chapter gained active status. At this moment, it became the Alpha Tau chapter of Lambda Phi Epsilon, and the second chapter in Virginia to gain active status.')" class="chapter_box">
					<p>Chapter History</p>
				</div>
				<div onclick="showimage('The nineteen founders of Lambda Phi Epsilon created the fraternity on February 25, 1981. The founders, led by Mr. Craig Ishigo, had a vision that the members would eventually become the leaders of their respective ethnic communities, and thus, bridge the gaps fragmenting the Asian American community through their affiliation with a common organization.')" class="founding_box">
					<p>Founders History</p>
				</div>
				
			</div>



		<!-- CONTACT US -->
		<?php include("../templates/footer.php"); ?>

		</div>
	</body>
</html>
