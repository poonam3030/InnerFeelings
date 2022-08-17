<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>	
	<link rel = "stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="mychatbot.js"></script>

</head>
<body>
	<div class = "main-image">
	<div class="main">
		<div class = "navbar">
			<div class = "icon">
			<h2 class = "logo">			
				<img src = "images/Inner Feelings.jpg">
			</h2>
</div>
<div class = "menu">
	<ul>
	<li><a href = "#">HOME</a></li>
	<li><a href = "#blog">BLOG</a></li>

	<li><a href = "#messageform.html">STORY</a></li>

	<li><a href = "#Freebies.html">FREEBIES</a></li>
</ul>
</div>

		<div class = "content">
			<h1>Solution for a better life...</h1>
			<p>
			Find your Inner Peace and heal your soul	
			</p>
			<button class="cn"><a href="container">Join Us</a></button>	
	</div>
		<div class="form">
			<h2> Login Here</h2>
			<form  method="POST" action = "login.php"  onsubmit="return validateForm()">
			<input type="email"  name  = "email" placeholder = "Enter Your Email Id" required>
			<input type="password" name = "psw" placeholder="Enter Your Password"
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
			<button class="btn"> <a href = "login.php">Login</a></button>
			<p class="link">Don't have Account<br>
			<a href = "Signup.html"> Sign Up </a>Here</p>
			
	<div id="message">
  	<h3>Password must contain the following:</h3>
	<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
	<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
	<p id="number" class="invalid">A <b>number</b></p>
	<p id="length" class="invalid">Minimum <b>8 characters</b></p>
	</div>
</form>
<script>
		var myInput = document.getElementById("psw");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var length = document.getElementById("length");

	// When the user clicks on the password field, show the message box
	myInput.onfocus = function() {
	document.getElementById("message").style.display = "block";
	}

	// When the user clicks outside of the password field, hide the message box
	myInput.onblur = function() {
	document.getElementById("message").style.display = "none";
	}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
  

	</script>
		</div>
<div class="main_container">
		<div><br><br><br>
			<h1>
				What Are You Looking For....?
			</h1>
		</div>
			<div class = "button-blog">
				<div>
					<a href="Anxiety.html">
					<button>ANXIETY</button> </a>
					
				</div>

				<div>
					<a href="Depression.html">
						<button>DEPRESSION</button> </a>
				</div>

				<div>
					<a href="Mood-Swings.html">
						<button>MOOD-SWINGS</button> </a>
				</div>

				<div>
					<a href="Activites.html">
						<button>ACTIVITES</button> </a>
				</div>
				
				<div>
					<a href="Stress.html">
						<button>STRESS</button> </a>
				</div>
				
			</div>
</div>
	</div>
</div><br><br><br><br>
<div class="tableau-main">
	<div class="tb-text"><h1>Suicides Rates Due To Mental pressure
	</h1>
</div>
	<div class='tableauPlaceholder' id='viz1659369432713' style='position: relative'><noscript>
			<a href='#'><img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Su&#47;Suicidesrate&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Suicidesrate&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Su&#47;Suicidesrate&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /></object></div>               
			 <script type='text/javascript'>                    
			 var divElement = document.getElementById('viz1659369432713');                  
			   var vizElement = divElement.getElementsByTagName('object')[0];                  
			     if ( divElement.offsetWidth > 800 ) 
				 { vizElement.style.width='1000px';vizElement.style.height='827px';}
				  else if ( divElement.offsetWidth > 500 )
				   { vizElement.style.width='1000px';vizElement.style.height='827px';} 
				   else { vizElement.style.width='100%';vizElement.style.height='1227px';}                   
					var scriptElement = document.createElement('script');                  
					scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);        


</script></div>
	
</div>
<div class="contact-container">
		<div class="class1">
			<div class="class1-items" id="d">
				<i class="fa fa-map-marker"></i>
				<p>Address:Manav Rachna International University</p>
			</div>
			<div class="class1-items">
				<i class="fa fa-envelope"></i>
				<p>Email: innerfeelingsclub@gmail.com</p>
			</div>
			<div class="class1-items">
				<i class="fa fa-phone-square"></i>
				<p>Phn:7678262031</p>
			</div>
		</div>
		<div class="class2">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.968097155722!2d77.28155871505218!3d28.450378082489955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce0ab6fec0aab%3A0x87c9e10e1ae0b0fc!2sManav%20Rachna%20International%20Institute%20Of%20Research%20And%20Studies!5e0!3m2!1sen!2sin!4v1658309033534!5m2!1sen!2sin" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

	<div class="footer">
		<div class ="image">
			<img src = "images/Inner Feelings.jpg">
		</div>
		 <div class="icon-bar">
			 <h2>Follow Us</h2>
		 	<a href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a><br>
		 	<a href="#"><i class="fa fa-linkedin"></i>&nbsp;LinkedIn</a><br>
		 	<a href="#"><i class="fa fa-instagram"></i>&nbsp;Instagram</a><br>
		 	<a href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a><br>
		 </div>
		 <div class="services">
			 <h2>Our Main Services</h2>
			 
			 *Mental Health Counselling
			 <br>
			 *Career Guidance Test<br>
			 *Career Guidance Advice<br>
			 *Portfolio Building<br>

			</div> 
	

	<div class="lastline">
		<p>Disclaimer:This site is made for academic purpose</p>
	</div>
</div>

</div>
</body>
</html>