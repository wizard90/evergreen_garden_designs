<!--
 * index file
 * PHP5,HTML5,CSS3,JAVASCRIPT(JQUERY)
 *
 * @title    Ever Green Garden Designs
 * @author     Renjith VR
 * @since      Version 1.0
 * @link       
 -->

<!DOCTYPE HTML>
<html>
	<head>
		<title>Ever Green Garden Designs</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="We are professional garden designers that offering you some beautiful designs and construction services, We are able to do a number of maintenance works available to keep your newly created garden looking beautiful,Create stylish landscapes, follow garden trends, and get a curated collection of tools" />
		<meta name="keywords" content="garden design,landscape design,garden decoration,garden photos" />
		<script src="js/jquery.min.js"></script> 
		<script src="js/jquery.poptrox.min.js"></script> 
		<script src="js/skel.min.js"></script> 
		<script src="js/init.js"></script>
		<script src="js/jquery.galpop.js"></script>
		<script type="text/javascript">
		function validateMessage(input)
		{
			if (input.value.length < 20) 
			{
				input.setCustomValidity("Your message must be more than 20 characters");
			}
            else 
		    {
				input.setCustomValidity("");
		     }
        }
		
		function validateName(input)
		{
			if (input.value.length < 3)
			{
				input.setCustomValidity("Your name must be more than 3 characters");
			}
			else
			{
				input.setCustomValidity("");
			}
		}
		</script>
		<script type="text/javascript">
		$(document).ready(function()
		{
			$('.galpop-single').galpop();
			$('.galpop-multiple').galpop();
			$('.galpop-info').galpop();
			var callback = function()
			{
				var wrapper = $('#galpop-wrapper');
				var info    = $('#galpop-info');
				var count   = wrapper.data('count');
				var index   = wrapper.data('index');
				var current = index + 1;
				var string  = 'Image '+ current +' of '+ count;
				info.append('<p>'+ string +'</p>').fadeIn();
		    };
		    $('.galpop-callback').galpop({ callback: callback });
		});
		</script>

		<link rel="stylesheet" href="css/galpop.css" />	
		<link rel= "icon" media="all" type="file content-type" href="images/favicon.ico" />
		<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="images/favicon.ico" />
		
		<noscript>	
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
	</head>
	
	<body>
	
		<!-- Header -->
		<header id="header">
			
			<!-- Logo -->
			<h1 id="logo"><a href="#home"><img src="./images/logo.png" /></a></h1> 		
			
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="#home">HOME</a></li>
						<li><a href="#aboutus">ABOUT US</a></li>
						<li><a href="#services">OUR SERVICES</a></li>
						<li><a href="#work">OUR LATEST WORKS</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</nav>
		</header>
		
		<!-- Home -->
		<section id="home" class="main style1 dark fullscreen">
			<div class="content container small">
				<header>
					<h2>EVER GREEN <br /> GARDEN DESIGNS</h2>
					<h3>Free Estimates | Fully Insured</h3>
				</header>
			</div>
		</section>
       
        <!-- Secondpage -->             
        <section id="aboutus" class="main style2 right dark fullscreen">
        	<div class="content box style2">
        		<header>
        			<h2>ABOUT US</h2>
        		</header> 
	        	<p>
	        		We are professional garden designers that offering you some beautiful designs and construction services. 
	        		We are really happy at creating personal spaces that reflect the sensibilities and dreams of our clients.
	        		We offer the complete gardening work that look great and make our customers happy.
	    	        We are able to do a number of maintenance works available to keep your newly created garden looking beautiful.
	    	        if you want to create a beautiful garden,we promise! we can create an inspirational garden.
	        	</p>
       		 </div>             
    	</section>
		
		<!--Thirdpage  -->
		<section id="services" class="main style2a left dark fullscreen">
			<div class="content box style2a">
				<header>
					<h2>OUR SERVICES</h2>
				</header>
				<ul>
					<li class="buttons grow-rotate">Landscaping</li>
					<li class="buttons grow-rotate">Residential Tree Services</li>
					<li class="buttons grow-rotate">Commercial Tree Services</li>
					<li class="buttons grow-rotate">Tree Removal</li>
					<li class="buttons grow-rotate">Pruning</li>
					<li class="buttons grow-rotate">Weight Reductions</li>
					<li class="buttons grow-rotate">Weight Reductions</li>
					<li class="buttons grow-rotate">Thinning</li>
					<li class="buttons grow-rotate">Dead Wooding</li>
					<li class="buttons grow-rotate">Stump Removal</li>
					<li class="buttons grow-rotate">Brush Removal</li>
					<li class="buttons grow-rotate">Clearing Lawn Care</li>
					<li class="buttons grow-rotate">Weed Control</li>
					<li class="buttons grow-rotate">Garden Tiding</li>
				</ul>
			</div>
		</section>
			
		<!-- Work -->
		<section id="work" class="main style3 primary">
			<div class="content container">
				<header>
					<h2>OUR LATEST WORKS</h2>
					<p>We can give some important instructions to our clients through the process to meet their impression, maintenance and budget needs.</p>
					<hr>
				</header>
				<div id="gallery-wrapper">
					<a class="galpop-multiple" data-galpop-group="multiple" href="images/gallery/large/11.jpg" alt="1"><img src="images/gallery/thumbs/11.jpg" alt="1" /></a>
					<a class="galpop-multiple" data-galpop-group="multiple" href="images/gallery/large/22.jpg" alt="2"><img src="images/gallery/thumbs/22.jpg" alt="2" /></a>
					<a class="galpop-multiple" data-galpop-group="multiple" href="images/gallery/large/11.jpg" alt="3"><img src="images/gallery/thumbs/11.jpg" alt="3" /></a>
					<a class="galpop-multiple" data-galpop-group="multiple" href="images/gallery/large/11.jpg" alt="5"><img src="images/gallery/thumbs/11.jpg" alt="5" /></a>
					
				</div>
			</div>
		</section>
				
		<!-- Contact -->
		<section id="contact" class="main style3 secondary">
			<div class="content container">
				<header>
					<h2>CONTACT US</h2>
					<p>For estimates on your gardening dreams and for other informations,please contact us by sending a message from here! <br />or Call Us: <b> &nbsp+91-8086675118 or +91-9961995446 </b>.</p>
				</header>
				
				<div class="error" style="color:#F91212;position:relative;left:30%;">
					<?php if(isset($error)) { echo  $error; } ?>					 
				</div>
				
				<div class="box container small">
					<form method="POST" action="mail.php" >
						<fieldset>
							<div class="row half">
								<div class="6u"><input oninput="validateName(this)"  required type="text" name="name" placeholder="Your Name" value="<?php if(isset($_POST['name'])) { echo htmlentities($_POST['name'], ENT_QUOTES); } ?>"/></div>
								<div class="6u"><input required type="email" name="email"  placeholder="Your Email" value="<?php if(isset($_POST['email'])) { echo htmlentities($_POST['email'], ENT_QUOTES); } ?>" /></div>
							</div>
							<div class="row half">
								<div class="12u"><textarea oninput="validateMessage(this)" required type="textarea" name="message" placeholder="Your Message(Please Include Your Contact Number)" rows="6"><?php if(isset($_POST['message'])) { echo htmlentities($_POST['message']); } ?></textarea></div>
							</div>
						</fieldset>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" class="button" value="Send" name="submit" /></li>			
								</ul>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<!-- Share -->
			<p>
			<!-- Go to www.addthis.com/dashboard to generate a new set of buttons -->
<a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?pco=tbxnj-1.0&url=http%3A%2F%2Fevergreendesigns.in%2F&pubid=ra-53e36c0331a7dacc&ct=1" target="_blank"><img src="images/share/Facebook-icon.png" border="0" alt="Facebook"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?pco=tbxnj-1.0&url=http%3A%2F%2Fevergreendesigns.in%2F&pubid=ra-53e36c0331a7dacc&ct=1" target="_blank"><img src="images/share/Twitter-icon.png" border="0" alt="Twitter" border="0" alt="Twitter"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?pco=tbxnj-1.0&url=http%3A%2F%2Fevergreendesigns.in%2F&pubid=ra-53e36c0331a7dacc&ct=1" target="_blank"><img src="images/share/GooglePlus-icon.png" border="0" alt="Google+"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/pinterest/offer?pco=tbxnj-1.0&url=http%3A%2F%2Fevergreendesigns.in%2F&pubid=ra-53e36c0331a7dacc&ct=1" target="_blank"><img src="images/share/Pinterest-icon.png" border="0" alt="Pinterest"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/tumblr/offer?pco=tbxnj-1.0&url=http%3A%2F%2Fevergreendesigns.in%2F&pubid=ra-53e36c0331a7dacc&ct=1" target="_blank"><img src="images/share/Tumblr-icon.png" border="0" alt="Tumblr"/></a>
<a href="https://api.addthis.com/oexchange/0.8/forward/stumbleupon/offer?pco=tbxnj-1.0&url=http%3A%2F%2Fevergreendesigns.in%2F&pubid=ra-53e36c0331a7dacc&ct=1" target="_blank"><img src="images/share/StumbleUpon-icon.png" border="0" alt="StumbleUpon"/></a>
			</p>
			<!-- Menu -->
			<div class="menu">
				<p>Developed By:<a href = "https://twitter.com/allow1234me" target="_blank">Renjith VR </a><p>
			</div>	
		</footer>
	</body>
</html>
