<!DOCTYPE html>
<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Staatliches" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../static/brothers.css">
		<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
		<link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
		<script>
            var house_classes = ['Charter', 'Alpha', 'Beta', 'Gamma', 'Delta', 'Epsilon', 'Zeta', 'Eta', 'Theta', 'Iota', 'Kappa','Mu', 'Nu', 'Xi', 'Omicron', 'Pi', 'Rho'];
            var pictures = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '11.jpg', '12.jpg', '13.jpg', '14.jpg', '15.jpg', '16.jpg', '17.jpg'];

            var charter = ["Thinh 'E.T.L Nguyen", "Tuan 'Ta-two' Huyuh", "C. Eugene 'Spacely' Lee", "Yuan 'Shakira' Ren", "Charles 'Braille' Lota ", "Terry 'Potato Head' Hsiung", "John 'H.O.P' Lee", "Cheng 'William Regal' Lu", "Amit 'Pinch' Goyal", "Burita 'Fez' Em", "Vivek 'Kick My Dog' Taneja"];
            var alpha = ["Kevin 'Pho Foot Tall' Nguyen", "Jack 'J-Lo' Chen", "Vinod 'Hinbad' Chopra" ];
            var beta = ["Frank Sungping 'Joystick' Chen", "John 'Generic' Kim", "Andrew 'Revlon' Hong", "Ga-Ram 'Snüz' Han"];
            var gamma = ["David 'Shebangs' Lee", "Kang Woon 'Incomplete' Chung", "Kun-He 'Loading' Cho", "Jonathan 'Peeperz' Tran","Thomas 'Voicebox' Li", "Hayato ' Desperado' Hoshino", "Jing 'SPF-Zero' Chan", "Jin Ho 'Jubilee' Kim"];
            var delta = ["Andrew Omesh 'Minindian' Jagnarian", "Calvin Shi-Hyung 'A.F.K.' Chun", "James 'Peon' Liu", "Dan 'Semolies' Phan"];
            var epsilon = ["Oliver Gene 'Boo Boo' Park", "Ken 'Sizzlin' Bacon' Ohnishi", "Bowen 'mp3' Xu", "Edward Ruoran 'Dial-Up' Wang"];
            var zeta = ["Dason 'Dazzle' Kwon", "Sean 'Daddy, No! Kim"];
            var eta = ["Nathan Min June 'Admiral Jackbar' Park", "Caleb Yo-Won 'Princess Choadstool' Chen","Chufan 'DOuche Depot' Zhai", "Taeyoung Joshua 'Wiidle' Kim", "Michael Hyun-Suk 'Cheez-Whiz' Kim"];
            var theta = ["Daniel 'Sharqueen' Chu", "ALex 'Cornuts' Brooks"," Thomas 'Thirty-Pho Rupee' Antony", "Tyler Del 'Ong Cok' Rosario", "Jon 'Lt.Dan' Park", "Mo 'WHERE IS SHE?!?' Lu", "Doug 'Zoboomafoo' Mao", "Bryan 'Hip Hop Anonymous' Cheong"];
            var iota = ["Christian 'Titty Kong Sanchez", "Soonhong 'Tae Kwon Don't' Choi", "Hao 'A Dell' Qiu", "Andrew 'neinGAG' Yang", "Vincent 'T-T Tourettesaurus Rex' Lam", "Shamal 'Blah. Blahh. Blahhh.' Lord", "Alex 'Yuan Crotchmon' Tran", "Elvin 'Pinkin Dark' Lee", "Louis 'Kid Cooties' Hwang", "Allen 'Jabba DA Slut' Au" ];
            var kappa = ["Yutao 'Ssstephen Stawking' Chen", "Dasith 'Dark Kelly' Gunawardhana", "Eugene 'Captain Juk' Cai"];
            var mu = ["Felix 'Honorable Discharge' Cao", "Tony 'Speedbump' Wu", "Aki 'Horlax' Gao", "Kevin 'Kaygol Kommander' Wu"];
            var nu = ["Glenn 'Rear Admiral Lower HalF' Getty", "Herbert 'Second Coming' Kwok", "Daniel 'Chad McFly' Moon", "Robert 'SnakeS on A Train' Chan", "Richard 'FrisbeeTeam5' Young", "Benjamin 'TransformHER' Hyde", "YiJiang 'wrecKING bawls' Guo"];
            var xi = ["Harrison 'AutoBlocks' Yu", "Sonny 'Side Beach' Moon", "Patrick 'PinK SaBBath' Muggill", "Jason 'Private Parks' Huang", "Jonathan 'Sonic the Edgehog' Ting", "Shaunn 'GV' Warmuth", "John 'Red Wiftpzrd' Herrick II", "Anthony 'shark bait OOH HA HA' Sanworanart", "Chris 'QWOP' Chueh"];
            var omicron = ["Jose 'Taco Tuesday' Carballo", "Edmun 'Netflixxx and J.I.L.L' Pan", "Michael 'Forrest Dump' Wu", "Austin 'Death By Pu-Pu' Ly", "Salman 'Dark Magician...Girl' Guliwala", "Andrew '2FapTooFurious' Johnston"];
            var pi = ["Peter 'Twin-ki Bear' Kim", "Richard 'Maid In China' Li", "Roman '$pace Perp Queso RoBBer' Wang", "Chris 'unplaNNed parenthOOD Han", "Adrien '#boizwillbboyz' Bernard", "Andrew 'Red Head Redemption' Chen"];
            var row = [ "Nicholas 'St.i-Patch' Landi", "Bennett 'DoppelBänger' Gilliam", "Eric 'Bongzi Scheme' Ng", "Jonathan 'Clogtimus Prime' Wen", "Josef 'L'Oréal Kidz' Shim", "Duncan 'My Limping Pony' Crooks", "Dhaval 'Discount Cub Scout' Patel", "Eric 'Senpai Style' Zhang", "Min Jea 'Zero Dark Curvy' Kim"];


            // Add all the classes to one dictionary for next step
            var all_names = {};
            all_names["Charter"] = charter;
            all_names["Alpha"] = alpha;
            all_names["Beta"] = beta;
            all_names["Gamma"] = gamma;
            all_names["Delta"] = delta ;
            all_names["Epsilon"] = epsilon ;
            all_names["Zeta"] =zeta ;
            all_names["Eta"] = eta;
            all_names["Theta"] = theta ;
            all_names["Iota"] = iota;
            all_names["Kappa"] = kappa ;
            all_names["Mu"] = mu;
            all_names["Nu"] = nu;
            all_names["Xi"] = xi;
            all_names["Omicron"] = omicron;
            all_names["Pi"] = pi;
            all_names["Rho"] = row;

            var greek_letters = {};
            greek_letters["Charter"] = "";
            greek_letters["Alpha"] = "&#913;";
            greek_letters["Beta"] = "&#914;";
            greek_letters["Gamma"] = "&#915;";
            greek_letters["Delta"] = "&#916;"; 
            greek_letters["Epsilon"] = "&#917;"; 
            greek_letters["Zeta"] = "&#918;"; 
            greek_letters["Eta"] = "&#919;";
            greek_letters["Theta"] = "&#920;"; 
            greek_letters["Iota"] = "&#921;";
            greek_letters["Kappa"] = "&#922;"; 
            greek_letters["Mu"] = "&#924;";
            greek_letters["Nu"] = "&#925;";
            greek_letters["Xi"] = "&#926;";
            greek_letters["Omicron"] = "&#927;";
            greek_letters["Pi"] = "&#928;";
            greek_letters["Rho"] = "&#929;";

            var class_start_num = {};
            class_start_num["Charter"] = 1;
            class_start_num["Alpha"] = 12;;
            class_start_num["Beta"] = 15;
            class_start_num["Gamma"] = 19;
            class_start_num["Delta"] = 27; 
            class_start_num["Epsilon"] = 31; 
            class_start_num["Zeta"] = 35; 
            class_start_num["Eta"] = 37;
            class_start_num["Theta"] = 44; 
            class_start_num["Iota"] = 52;
            class_start_num["Kappa"] = 62; 
            class_start_num["Mu"] = 65;
            class_start_num["Nu"] = 69;
            class_start_num["Xi"] = 76;
            class_start_num["Omicron"] = 85;
            class_start_num["Pi"] = 91;
            class_start_num["Rho"] = 98;



            function showContent(){
                var current_class = $(event.target).text();
                if(current_class == "Charter"){
                    current_class == "Charter";
                }
                else{
                    current_class = current_class.split(" ")[1];
                }
                var content = document.getElementsByClassName("picturebox");

                // get the name of the class whose div has been clicked
                var mask = document.createElement('span');
                mask.className = "mask";
                
                var picturebox = document.createElement('div');
                picturebox.className = "picturebox";
                picturebox.style.display = 'flex';


                listed_names = "<ul>" + "<span class='class_title'>" + current_class + " Class" + "</span>";

               
                var line_num = class_start_num[current_class];
                var missing_member = true;
                for(name in all_names[current_class]){
                    // if(name == 'Rho' & missing_member){
                    //     line_num += 1;
                    //     missing_member = false;
                    // }
                    listed_names += "<li>" + line_num.toString() + ". " + all_names[current_class][name] + "</li>";
                    line_num++;
                }

                listed_names += "</ul>";

                picturebox.innerHTML = listed_names;
               
                
                var exit_pic = document.createElement('div');
                exit_pic.className = "exit_pic";
                picturebox.appendChild(exit_pic);
                mask.appendChild(picturebox);
                $('body').append(mask);

                exit_pic.onclick = function(){
						mask.remove();

				}
            };

			function createboxes(){
				// For loop that creates separate boxes for each class with information and onclick events on each of the boxes
				for(var i=0; i < house_classes.length; i++){
					var newDiv = document.createElement('div');
					newDiv.id = house_classes[i];
					newDiv.className = 'test';
					// newDiv.style.background = "linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(" + "brothers_pics/" + pictures[i] + ")";
					// newDiv.style.backgroundSize = "300px 200px";
     
                    var current_class = house_classes[i];
					newDiv.onclick = function() {
                        showContent();
					};


					newDiv.innerHTML = "<p>" + greek_letters[house_classes[i]] + " " + house_classes[i] + "</p>";
					$('.box_container').append(newDiv);
					
				}
                
               
                    
                $("#dimScreen").delay(500).fadeOut();




			}

		
		
		</script>
	</head>

	

    <body onload="createboxes()">
        <div id="dimScreen">
            <img src="../transition/transition_logo.png">
        </div>
		<div class="container">

            <!-- Navbar -->
			<?php include("../templates/secondary_header.php"); ?>
		
			<div class="header">
				<div class="whoweare__title">
					<h1>The</h1>
                    <h2>Brotherhood</h1>
                    <h3>Classes</h3>
				</div>
				<div class="secondary_title">
					<h3>Classes</h3>
				</div>
				<div class="header__right"></div>
			</div>


			<div class="box_container">
				<!-- <div class="national_box">
					<p>National</p>
				</div> -->
			</div>

            <!-- CONTACT US -->
			<?php include("../templates/footer.php"); ?>
			
		</div>
	</body>
</html>