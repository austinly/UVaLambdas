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
                    <li><a href="/LFESite/templates/whoweare.php" class="link2">Who We Are</a></li>
                    <li ><a href="/LFESite/templates/whatwedo.php" class="link3">What We Do</a></li>
                    <li><a href="/LFESite/templates/brothers.php" class="link4">Brothers</a></li>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                 sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                     sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.</p>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                                ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
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
