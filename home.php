<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>James Landy Portfolio</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" media="screen" href="CSS/mobilemain.css">

	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

	<script src="JS/ajax.js"></script>
	<script src="JS/Manipulation.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>


</head>

<body>
<script>
$(document).ready(function()
{
        $("#SolsticeLogo" ).hide();
});
</script>

	<div id="container">

		<div id="leftColumn">
			</br>

<div id="SolsticeLogoOpener">
<h1>James Landy</h1>
</div><!--SolsticeLogo-->


<div class="choice" id="aboutMe">
	<p>ABOUT ME</p>
</div><!--aboutME-->

<a href="OnlineResume.pdf">
<div class="choice" id="resume">

	<p>RESUME</p>
</div><!--resume-->
</a>

<div id="lab" class="choice" >
	<p>CSS Lab</p>
</div><!--resume-->

<a href="https://github.com/JamesL13" target="_blank">
<div class="choice" id="github">
	<p>GITHUB</p>
</div><!--github-->
</a>

<a href="https://www.linkedin.com/in/jameslandy" target="_blank">
<div class="choice" id="linkedin">
	<p>LINKEDIN</p>
</div><!--linkedin-->
</a>

<a href="http://www.thelostsolstice.com" target="_blank">
<div class="choice" id="solstice">
	<p>THE LOST SOLSTICE</p>
</div><!--solstice-->
</a>

<a href="mailto:jtumi13@landy.net">
<div class="choice" id="contact">
	<p>CONTACT ME</p>
</div><!--solstice-->
</a>



</div><!--leftColumn-->


<div id="content">

	<div id="SolsticeLogo">
		<img src="SolsticeLogoOfficialBig.png" width="287px" height="700px">
	</div><!--SolsticeLogo-->

	<div id="aboutMeinfo">
	</div><!--aboutMeinfo-->


<div id="cssMenu">

	<div id="materialForm">
		<p>MATERIAL DESIGN FORM<p>
	</div><!--materialForm-->

</div><!--cssMenu-->

<div id="Form">
<iframe src="LAB/application.php" width="100%" height="100%"></iframe>
</div><!--Form-->

<div id="back">
BACK
</div><!--back-->
</div><!--content-->

</div><!--container-->


<!--HIDE AND SEEK-->
<script>
		$('#SolsticeLogoOpener').click(function() {
			$('#SolsticeLogoOpener').click(HideandSeek('SolsticeLogoOpener'));
			});

		$('#aboutMe').click(function() { 
			$('#aboutMe').click(HideandSeek('aboutme'));
			$('#content').fadeIn(500);
		});

		$('#lab').click(function() {
			$('#lab').click(HideandSeek('lab'));
			$('#content').fadeIn(500);
		});

		

		$('#materialForm').click(function() {
			$('#materialForm').click(HideandSeek('materialForm'));
			$('#content').fadeIn(500);
		});

		$('#back').click(function() {
			$('#back').click(HideandSeek('back'));
		});

</script>
</body>
</html>