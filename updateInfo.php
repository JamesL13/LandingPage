<?php
$infoId = empty($_GET['infoId']) ? 'solstice' : $_GET['infoId'];

switch($infoId) {
	case 'solstice':
		$info = 'The Lost Solstice is the name I go under when releasing software. 
		The website itself is used to show off different projects I have done on my own time or 
		during school.';
		break;
	case 'aboutme':
		$info = 'I love to code. I have a strong drive to always be improving my skills and 
		taking on new challenges. My skills include coding in C, Java, HTML5/CSS3, PHP, MYSQL, 
		Postgres, Javascript, Ajax, along with being able to learn new languages quickly.';
		break;
}
print $info;
?>