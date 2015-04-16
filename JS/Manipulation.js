$(document).ready(function()
{
        $("#resumepic" ).hide();
        $("#aboutMeinfo").hide();
        $("#solsticePic").hide();
        $("#solsticeInfo").hide();
        $("#cssMenu").hide();
        $("#Form").hide();
}); 

function Emily(infoId)
{
	var xmlHttp = xmlHttpObjCreate();
		if (!xmlHttp) {
			alert("The browser doesn't support this action.");
			return;
		}
		var classchoice;
		
		if(infoId == 'aboutme')
		{
			classchoice = 'aboutMeinfo';
		}

		if(infoId == 'solstice')
		{
			classchoice = 'solsticeInfo';
		}

		xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				elemObj = document.getElementById(classchoice);
				elemObj.innerHTML = xmlHttp.responseText;
			  }
		}
		
		// Append GET data to identify which quote we want
		var reqURL = "updateInfo.php?infoId=" + infoId;
		xmlHttp.open("GET", reqURL, true);
		xmlHttp.send();
}


function HideandSeek(Seek)
{
//THIS IS WHERE I WILL HAVE THE SWITCH STATEMENTS TO CHOOSE WHAT TO HIDE AND WHAT TO SEEK
	switch (Seek)
	{
		case 'SolsticeLogoOpener':
			$('#SolsticeLogo').fadeIn(1250);
			$('#resumepic').fadeOut(500);
			$('#aboutMeinfo').fadeOut(500);
			$('#solsticePic').fadeOut(500);
			$('#solsticeInfo').fadeOut(500);
			$('#cssMenu').fadeOut(500);
			$('#Form').fadeOut(500);		
		break;

		case 'aboutme':
			$('#aboutMeinfo').fadeIn(1250);	
			$('#aboutMe').click(Emily('aboutme'));	
			$('#SolsticeLogo').fadeOut(500);
			$('#resumepic').fadeOut(500);
			$('#solsticePic').fadeOut(500);
			$('#solsticeInfo').fadeOut(500);
			$('#cssMenu').fadeOut(500);
			$('#Form').fadeOut(500);
		break;

		case 'lab':
			$('#cssMenu').fadeIn(1250);	
			$('#SolsticeLogo').fadeOut(500);
			$('#resumepic').fadeOut(500);
			$('#aboutMeinfo').fadeOut(500);
			$('#solsticePic').fadeOut(500);
			$('#solsticeInfo').fadeOut(500);
			$('#Form').fadeOut(500);
		break;

		case 'solstice':
			$('#solsticePic').fadeIn(1250);	
			$('#solsticeInfo').fadeIn(1250);	
			$('#solstice').click(Emily('solstice'));
			$('#SolsticeLogo').fadeOut(500);
			$('#resumepic').fadeOut(500);
			$('#aboutMeinfo').fadeOut(500);
			$('#cssMenu').fadeOut(500);
			$('#Form').fadeOut(500);
		break;

		case 'resume':
			$('#resumepic').fadeIn(1250);
			$('#SolsticeLogo').fadeOut(500);
			$('#aboutMeinfo').fadeOut(500);
			$('#solsticePic').fadeOut(500);
			$('#solsticeInfo').fadeOut(500);
			$('#cssMenu').fadeOut(500);	
			$('#Form').fadeOut(500);
		break;

		case 'materialForm':
			$('#Form').fadeIn(1250);
		break;

		case 'github':
			$('#Form').fadeOut(500);
			$('#cssMenu').fadeOut(500);
		break;

		case 'linkedin':
			$('#Form').fadeOut(500);	
			$('#cssMenu').fadeOut(500);
		break;

		case 'back':
			$('#aboutMeinfo').fadeOut(500);
			$('#resumepic').fadeOut(1250);
			$('#cssMenu').fadeOut(500);	
			$('#Form').fadeOut(500);
		break;

//		default 'SolsticeLogoOpener'

//		break;
	}
	
}
