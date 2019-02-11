<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script>
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
                    // $('body').append('<span class="mask2"><div class="picturebox"><div class="transition"></div></div></span>'); 
                    // var timer = setTimeout(function() {
                        window.location= pathToPage;
                    // }, 400);
               
                }
                
        </script>   
        

    </head>
    <title>UVa Lambdas</title>
    <style>
    </style>
    <body>
        <div class="container">
        

            <!--NAVBAR  -->
            <?php include("templates/header.php"); ?>


            <!-- Navbar exclusive to homepage -->
            
            <nav class="desktop_nav">
                <ul>
                    <!-- <li><a href="/LFESite/index.php"  class="link1">Home</a></li> -->
                    <li><a href="templates/whoweare.php" class="link2">Who We Are</a></li>
                    <li ><a href="templates/whatwedo.php" class="link3">What We Do</a></li>
                    <li><a href="templates/brothers.php" class="link4">Brothers</a></li>
                </ul>  
            </nav>

            <!-- LANDINGPAGE -->
            <section class="landingpage" id = "landingpage">
                    <div class="logo">
                        <img src="pictures/landingpage/LambdasLogo.png">
                    </div>

                <div class="inner_page">
                    

                </div>
            </section>


            


            <!--WHO WE ARE-->
            <div class="whoweare" id = "whoweare">
                <div class="whoweare__trapezoid">
                    <div class="whoweare__description">
                        <div class="description__box">
                            <h1>Who we are</h1>
                            <p>Lambda Phi Epsilon is the first and only internationally recognized Asian interest fraternity, with 58 chapters and thousands of brothers spanning the United States and Canada. Grounded on the principles of wisdom, honor, and courage, Lambda Phi Epsilon strives to provide opportunities for young men to grow throughout their college years and beyond as inspirational leaders and men of morals
.</p>
                            <a onclick='fadetoPage("templates/whoweare.php")'>Read more on Who We Are</a>
                        </div>
                    </div>
                    <div class="whoweare__photo">
		    	        <div class="photo__1"></div>
		            </div>
                </div>
            </div>

            <!--WHAT WE DO-->
            <section class="whatwedo" id="whatwedo">
                <div class="whatwedo__trapezoid">
                    <div class="whatwedo__photo">
			            <div class="photo__2"></div>
		            </div>
                    <div class="whatwedo__description">
                            <div class="whatwedo__box">
                                <h1>What We Do</h1>
                                <p>The brothers of Lambda Phi Epsilon at the University of Virginia aim to be a pillar in the surrounding community and a constant example of the values they represent. The Alpha Tau chapter hosts a variety of events throughout the school year, ranging from social mixers to philanthropy events in partnership with Be The Match, our national philanthropy.  </p>
                                <a onclick='fadetoPage("templates/whatwedo.php")'>Read more on Who We Are</a>
                            </div>
                    </div>
                </div>
            </section>

            <!-- BROTHERS -->
            <section class="brothers" id="brothers">
                <div class="brothers__trapezoid">
                    <div class="brothers__description">
                        <div class="brothers__box">
                            <h1>Brothers</h1>
                            <p>The Alpha Tau chapter has been steadily growing over the last 10 years, with the chapter roster recently crossing into the 100s. We are a tight knit family, dedicated to each other and our questions for self improvement. 

                            </p>
                                <a onclick='fadetoPage("templates/brothers.php")'>Read more on Who We Are</a>
                        </div>
                    </div>
                    <div class="brothers__photo">
			            <div class="photo__3"></div>
		            </div>
                </div>
            </section>
	   
            <section class="carousel" data-flickity='{ "groupCells": true }'>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/1.jpg")'><img src="pictures/landingpage/carousel/1.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/2.jpg")'><img src="pictures/landingpage/carousel/2.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/3.jpg")'><img src="pictures/landingpage/carousel/3.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/4.jpg")'><img src="pictures/landingpage/carousel/4.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/5.jpg")'><img src="pictures/landingpage/carousel/5.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/6.jpg")'><img src="pictures/landingpage/carousel/6.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/7.jpg")'><img src="pictures/landingpage/carousel/7.jpg"></div>
                    <div class="carousel-cell" onclick='showimage("pictures/landingpage/carousel/8.jpg")'><img src="pictures/landingpage/carousel/7.jpg"></div>
            </section>

            <?php include("templates/footer.php"); ?>
                  
            
    </div>
    </body>
</html>
