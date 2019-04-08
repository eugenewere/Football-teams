<!DOCTYPE html>
<html>
<head>
	<title>Football</title>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/core.css">
</head>
<body >
<!--preloader-->
    <div class="preloader hidden">
		<div class="loader hide"><p><p></div>

	</div>
<!--side-nav-->
	<div class="side-nav" id="drop">

		<div class="upper-content">
			<i class="far fa-times-circle" onclick="hide()"></i>
			<i class="fas fa-futbol" id="logo-pic"></i>
			<p id="logo-name">jkuat-usl</p>

		</div>

		<div class="menu-icons-side">
			<ul>
				<a href="#home"><li>home</li></a>
       <a href="#services"> <li>services</li></a>
        <a href="#fixtures"><li>fixtures</li></a>
        <!-- <li><a href="#table">table</a></li> -->
        <a href="#blog"><li>blog</li></a>
        <a href="#contact"><li>contact</li></a>

		</div>
		<div class="social">
			<div class="social-icons">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>


			<div class="registration-side">
					<button id="log-in-side"><i class="fas fa-sign-in-alt"></i> <a href="login.html">log-in</a></button>
					<button id="registration-side"><i class="fas fa-user-plus"></i> <a href="regestration.html"target="blank">sign up</a></button>
			</div>

		</div>
	</div>
<!--top-nav-->
	<div class="top-nav" id="body">

		<div class="logo left1 flex ">
			<i class="fas fa-futbol" id="logo-pic"></i>
			<p id="logo-name"><a href="#home">jkuat-usl</a></p>
		</div>

		<div class="menu-icons middle1 flex ">
			<ul>
				<li><a href="#home">home</a></li>
				<li><a href="#services">services</a></li>
				<li><a href="#fixtures">fixtures</a></li>
				<!-- <li><a href="#table">table</a></li> -->
				<li><a href="#blog">blog</a></li>
				<li><a href="#contact">contact</a></li>
			</ul>

		</div>

		<div class="registration right1 flex ">
			<button id="log-in"><i class="fas fa-sign-in-alt"></i><a href="login.html">log-in</a></button>
			<button id="registration"><i class="fas fa-user-plus"></i><a href="regestration.html" target="_blank">sign up</a></button>
		</div>

		<div class="expand-menu " onclick="drop()">
		  <i class="fas fa-align-right"></i>
		</div>
	</div>
	<!--end of navigation-->

<!--start of 2nd-nav-->
	<div class="nd-nav">
		<div class="nd-nav-content">
			<img src="images/2ndnav.jpg">
			<div class="nd-nav-left">
				<h1>jkuat-usl</h1>
			    <p>Bridging the gap between talent and opportunity in Jkuat football scene.</p>
			     <a href="#table"><button type="button" id="more"
			     class="sliders">league table</button></a>
			</div>


		</div>
	</div>
<!--3th section-->
	<section id="services">
		<div class="rd-container">
			<div class="center1">
				<h2>why we do what we do</h2>

				<p>Jkuat usl purpose is what drives us each day to achieve our hopes and dreams for football in this country.
				</p>
		    </div>


			<div class="showcase">
				<div class="change s1">
					<i class="fas fa-futbol"></i>
					 <h4>change</h4>
					<p>We strive to change the fate of every aspiring sports man or woman in Jkuat.</p>

				</div>

				<div class="enhance s1">
					<i class="fas fa-industry"></i>
					<h4>enhance</h4>
					<p>We aspire to enhance the environmental energy in which the company operates on in true entrepreneurial spirit.</p>

				</div>

				<div class="world s1">
					<i class="fas fa-globe-americas"></i><br>
	                 <h4>showcase</h4>
					<p>As proud Africans we are intent on preserving and showcasing the unique African culture through all our services.
					</p>

				</div>

			</div>

		</div>
	</section>

<!--4th section-->
	<div class="info">
		<div class="info-content">
			<h2>stay in touch with all things Jkuat sports.</h2>
		</div>
	</div>
	<section id="fixtures">
		<h2 class="fixh2" align="center">fixtures</h2>
    <table>
      <tr>
        <td class="left" colspan="4">MATCHDAY 1</td>
      </tr>
      <tr>
        <td>Mining</td>
        <td class="time">10:00</td>
        <td>Boka</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td class="left" colspan="4">MATCHDAY 2</td>
      </tr>
      <tr>
        <td colspan="4">All fixtures postponed due to KUSA games at JKUAT</td>
      </tr>
      <tr>
        <td class="left" colspan="4">MATCHDAY 3</td>
      </tr>
      <tr>
        <td>Castilla</td>
        <td class="time">08:00</td>
        <td>Aberdeen</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Galacticos</td>
        <td class="time">10:00</td>
        <td>Boka</td>
        <td>AICAD Pitch</td>
      </tr>
      <tr>
        <td>Straight</td>
        <td class="time">12:00</td>
        <td>Mining</td>
        <td>AICAD Pitch</td>
      </tr>
      <tr>
        <td>Highlanders FC</td>
        <td class="time">14:00</td>
        <td>Classic FC</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td class="left" colspan="4">MATCHDAY 4</td>
      </tr>
      <tr>
        <td>Classic FC</td>
        <td class="time">08:00</td>
        <td>Castilla</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Straight FC</td>
        <td class="time">10:00</td>
        <td>Boka</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>HFC FC</td>
        <td class="time">10:00</td>
        <td>Mining</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td class="left" colspan="4">MATCHDAY 5</td>
      </tr>
      <tr>
        <td>Classic</td>
        <td class="time">08:00</td>
        <td>Aberdeen</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Straight FC</td>
        <td class="time">08:00</td>
        <td>JKUMSA</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>HFC FC</td>
        <td class="time">10:00</td>
        <td>Boka</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Mining</td>
        <td class="time">10:00</td>
        <td>Castilla</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td class="left" colspan="4">MATCHDAY 6</td>
      </tr>
      <tr>
        <td>Aberdeen</td>
        <td class="time">08:00</td>
        <td>Straightt FC</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Classic FC FC</td>
        <td class="time">08:00</td>
        <td>Mining</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Boka</td>
        <td class="time">10:00</td>
        <td>Castilla</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>JKUMSA</td>
        <td class="time">10:00</td>
        <td>Highlanders</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td class="left" colspan="4">MATCHDAY 7</td>
      </tr>
      <tr>
        <td>Aberdeen</td>
        <td class="time">08:00</td>
        <td>Mining</td>
        <td>Main Pitch</td>
      </tr>
      <tr>
        <td>Straight FC</td>
        <td class="time">08:00</td>
        <td>Highlanders</td>
        <td>AICAD Pitch</td>
      </tr>
      <tr>
        <td>Classic</td>
        <td class="time">10:00</td>
        <td>Boka</td>
        <td>AICAD Pitch</td>
      </tr>
      <tr>
        <td>JKUMSA</td>
        <td class="time">10:00</td>
        <td>Castilla</td>
        <td>Main Pitch</td>
      </tr>
    </table>
  </section>
  <section id="table">
    <table align="center">
      <tr>
        <td colspan="8"><h2>USL Round-Up Standings</h2></td>
      </tr>
      <tr>
        <th>position</th>
        <th>team</th>
        <th>played</th>
        <th>won</th>
        <th>drow</th>
        <th>lost</th>
        <th>goal diffrence</th>
        <th>points</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Castilla</td>
        <td>5</td>
        <td>4</td>
        <td>1</td>
        <td>0</td>
        <td>12</td>
        <td>13</td>
      </tr>
      <tr>
        <td>2</td>
        <td>HCF</td>
        <td>5</td>
        <td>2</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Boka</td>
        <td>4</td>
        <td>2</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>7</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Straight</td>
        <td>5</td>
        <td>2</td>
        <td>0</td>
        <td>3</td>
        <td>-8</td>
        <td>6</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Classic FC</td>
        <td>3</td>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>4</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Mining</td>
        <td>4</td>
        <td>1</td>
        <td>0</td>
        <td>3</td>
        <td>-2</td>
        <td>3</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Aberdeen</td>
        <td>4</td>
        <td>1</td>
        <td>0</td>
        <td>3</td>
        <td>-2</td>
        <td>3</td>
      </tr>
      <tr>
        <td>8</td>
        <td>JKUMSA</td>
        <td>2</td>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>-2</td>
        <td>1</td>
      </tr>
    </table>
  </section>
<!--5th section-->
<section id="blog">
	<div class="jkuatie">
		<h2> the jkuatie</h2>
		<p class="p1">All the latest news and blogposts from our jkuat Sports playing teams
		</p>
		<div class="blogposts">
            <!--threeblogs-->
			<div class="blogs f1">
				<div class="blog-image"><img src="images/jkuat.jpg"></div>
				<span><a href="#">Opinion</a></span>
				<h3>why most jkuat students make it to premier league</h3>
				<p>
					The most popular league in Kenya is not the Kenyan Premier League. It’s the English Premier League. Most Football fanatics in this country can name the entire Chelsea starting 11 but would struggle to name even one left back playing in the Kenyan Premier League. It’s bizarre.
				</p>
			</div>
			<div class="blogs f2">
				<div  class="blog-image"><img src="images/jkuatcup2019.jpg"></div>
				<span><a href="#">Jkuat-cup</a></span>
				<h3>Jkuat cup 2019</h3>
				<p>
					OUT WITH THE OLD AND IN WITH THE NEW In an effort to keep our commitment to maintaining originality while also improving the player experience at our tournaments, Green Sports Africa is proud to present
				</p>
			</div>
			<div class="blogs f3">
				<div  class="blog-image"><img src="images/download.jpg"></div>
				<span><a href="#">Jkuat-league</a></span>
				<h3>Here Is What’s Happening to All Our Talented Players</h3>
				<p>
					There are two very distinct narratives when it comes to kids playing football in Kenya. Let’s look at two stories. Here’s Dennis. Dennis’ story began in 1999 when he first fell in love with football
				</p>
			</div>
		</div>
	</div>
</section>
<!--footer-->
<section id="contact">
	<div class="footer">
		<div class="footer-content">
			<div class="social">
				<h2> get in touch</h2>
				<div id="social-icons">
					<a href="#"><i class="fab fa-facebook-f"></i> Football on facebook</a><br>
					<a href="#"><i class="fab fa-twitter"></i> Football on twitter</a><br>
					<a href="#"><i class="fab fa-instagram"></i> Football on instagram</a><br>
					<a href="#"><i class="fab fa-youtube"></i> Football on youtube</a><br>
				</div>
			</div>
			<div class="forms-container">
				<div class="forms">
					<span>Contact Us</span>
					<form id="input">
						<input type="text" name="fullname" placeholder="Your Name" id="fnme"> <br>

						<input type="text" name="mail" placeholder="Your Mail" id="lnme"><br>

						<input type="text" name="subject" placeholder="Subject"
						id="sbj"><br>

						<textarea placeholder="Describe yourself here..." name="textarea" id="msg">

						</textarea><br>

						<button type="button" id="snd" onclick="verify()"> SEND MESSAGE</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!--footer credits-->

<div class="footer-credits">
	<div>
		<p>© Copyright Jkuat</p>
	    <p>Jkuat Football</p>
	    <div class="help-center">
	    	<a href="">Help</a>
	    	<a href="#snd"> SendFeedback</a>
	    	<a href="">Terms</a>
	    </div>
    </div>
</div>

<!-- scripting-lib-->
<script type="text/javascript" src="javascript/script.js"></script>
</body>
</html>
