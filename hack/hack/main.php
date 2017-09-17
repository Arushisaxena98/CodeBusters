<? php
session_start();
require_once('includes/function.inc.php');	
require_once('includes/config.inc.php');
$con = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		if (mysqli_connect_errno()) 
			{
				printf("Unable to connect to database: %s", mysqli_connect_error());
				exit();
			}
echo "<html>
<head>
<!-- <link rel='stylesheet' href='css/bootstrap.min.css'>
<link rel='stylesheet' href='css/bootstrap-toggle.css'> -->
<link rel='stylesheet' type='text/css' href='css/common.css' />
<script type='text/javascript' src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/bootstrap.js'></script>
<title>Project Mania</title>
</head>
<style type='text/css'>
#content-wrap{
	display:none;
	margin:auto;
	}
maniawall{
	background-image: url('/hack/images/try1.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
}
#content-wrap{
	background-image: url('/hack/images/pic.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	background-attachment:fixed;
	}
	
</style>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $('a').on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<body id='content-wrap'>
	<div class='content-wrap'>
	<div id='divmain'>
		<div class='divmain1'>
			<p class='Mainmania'>Project Mania
		</div>
		<div style='width:15%;'>
			<p><a href=#mania class='textcol'>What is Project Mania</a>
		</div>
		<div style='width:10%;'>
			<p><a href=#about class='textcol' style='padding-left:20px;'>About</a>
		</div>
		<div style='width:10%;'>
			<p><a href=#contact class='textcol'>Contact us</a>
		</div>
		<div class='divmain4'>
			<p id='Login'>LOGIN
		</div>
	</div>
	<div id='id02' class='login-page'>
		<div class='form'>
			<form class='login-form' method='post' action='php/login.php'>
			<input type='text' name='username' placeholder='username'>
			<input type='password' name='pass' placeholder='password' required>
			<button>Go</button>
			<p class='message'>Not registered? <a href='#' onclick='document.getElementById(`id01`).style.display=`block`'>Create an account</a></p>
			</form>
		</div>
	</div>
	
	<div style='margin-top:13%;'>
		<div>
			<p class='pclass'>Search For Projects 
		</div>
		<div style='margin: 0px auto;width: 670px;'>
			<input id='inputtext' style='padding:15px;width:680px;' type='text' placeholder='Enter Project Name or Keyword' autofocus><span class='glyphicon glyphicon-search'> </span></input>
		</div>
		
	<div id='cat' style='display:none;'>
	<p id='paraid' value=></p>
	</div>
	<div id='subcat' style='display:none;'>
	<p id='parasubid'></p>
	</div>	
		
		<div style='margin-top:10px;'>
		<hr id='hr1'><p class='pclass orclass'>OR<hr id='hr2'>
		</div>
	</div>
	
	<div>
		<div>
			<p class='pclass contriclass'>Want To Contribute?
			<br>Do it for FREE! 
			<br></p>
		</div>
		<div style='margin:40px auto;width: 12%;'>
			<a href='#' onclick='document.getElementById(`id01`).style.display=`block`'><input class='classbutton' type='button' value='Sign Up'></a>
		</div>
	</div>
	<hr id='mania' style='margin-top:9%;'>
	</div>
	
	<div id='maniawall'>
		<p class='about'>What Is Project Mania<br>
		<p class='project1'>ProjectMania works to achieve a simple concept- to connect as many as students from across the country and gather all the ingenious ideas. This website helps to inculcate students and professionals into a group where they can collaborate and bring together equally minded students together for bigger opportunities to attend afterwards.
Come and join the sensation! 
For more information on how to sign up and start using ProjectMania check out our other FAQ’s. We're excited that you've come to check out what ProjectMania is and what we're about. Now go put your feet up and enjoy a great time with us.
	</div>
		<hr>
	
	<div>
		<p id='about' class='about'>About<br>
		<p class='project1'>CODEBUSTERS is a project designed and implemented by a group of 3rd year B.Tech students studying in Inderprastha Engineering College under an ongoing competition HACKATHON-2017.

The team members include-
   <ul style='color: gold;font-family:Roboto,sans-serif;'>
	<li>Arushi Saxena</li>
	<li>Harshit Gola</li>
	<li>Mayank Salwan</li>
	<li>Mayuri Gupta </li>
   </ul>
<p class='project1'>This project is to cater to today&lsquo;s generation has mixed mentality. Students often become confuse when it comes to their school and college projects. They know things but can&lsquo;t project them correctly due to either lack of confidence or lack of knowledge. We are providing a platform where these students can get help from the students across the country. Also the students / professionals across the nation can come forward and share their ideas/projects with everyone. Also, It is seen that collaborative projects help bring equally minded students together for bigger opportunities to attend afterwards.

		</div>
		<hr>
		
		<div>
			<p id='contact' class='about'>Contact Us<br>
			<p class='project1'>You can contact us at:
<br>Phone no.: 9899395131, 9990063715
<br>Email ID: codebusters2k17@gmail.com

		</div>
	</div> 
	
	<div id='id01' class='modal'>
	<span onclick='document.getElementById(`id01`).style.display=`none`' class='close' title='Close Modal'>X</span>
	<form class='modal-content animate' method='post' action='../hack/php/newuser.php'>
	<div class='container'>
	<h4 style='margin-left:43%;margin-bottom:4%;'>Create An Account</h4>
	<label>Name :</label>
	<input style='margin-left:89px' type='text' placeholder='Enter Name' name='name' required>
	<br>
	<label>Email :</label>
	<input style='margin-left:90px' type='email' placeholder='Enter Email' name='email' required>
	<br>
	<label>Password :</label>
	<input style='margin-left:11%' type='password' placeholder='Enter Password' name='pwd' required>
	<br>
	<label>Confirm Password :</label>
	<input style='margin-bottom:5%;' type='password' placeholder='Confirm Password' name='cnf' required>

	<div class='clearfix' style='display:flex;'>
	<button type='button' class='first' onclick='document.getElementById(`id01`).style.display=`none`' class='cancelbtn'>Cancel</button>
	<button type='submit' class='second'>Sign Up</button>
	</div>
	</div>
	</form>
	</div>
	<footer class='foter'>
	<a href='html/faqpm.html' class='foota'>FAQ</a>
	<div>
	<img src='images/like.png' id='like'>
	</div>
	<div>
	<img src='images/google.png' id='google'>
	</div>
	</footer>
</body>
</html>

<script type='text/javascript' src='js/main.js'></script>";
