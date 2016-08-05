<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
function showPage(s)
{
	switch(s)
	{
		case "#margarettext":
		$("#zolatext").hide();
		$("#jimtext").hide();
		$("#guytext").hide();
		$("#margarettext").show();
		$("#susantext").hide();
		$("elizabethtext").hide();
		break;
		case "#susantext":
		$("#zolatext").hide();
		$("#jimtext").hide();
		$("#guytext").hide();
		$("#margarettext").hide();
		$("#susantext").show();
		$("elizabethtext").hide();
		break;
		case "#elizabethtext":
		$("#zolatext").hide();
		$("#jimtext").hide();
		$("#guytext").hide();
		$("#margarettext").hide();
		$("#susantext").hide();
		$("elizabethtext").show();
		break;
		
		case "#zolatext":
		$("#zolatext").show();
		$("#jimtext").hide();
		$("#guytext").hide();
		$("#margarettext").hide();
		$("#susantext").hide();
		$("elizabethtext").hide();
		break;
		
		case "#jimtext":
		$("#zolatext").hide();
		$("#jimtext").show();
		$("#guytext").hide();
		$("#margarettext").hide();
		$("#susantext").hide();
		$("elizabethtext").hide();
		break;
		
		case "#guytext":
		$("#zolatext").hide();
		$("#jimtext").hide();
		$("#guytext").show();
		$("#margarettext").hide();
		$("#susantext").hide();
		$("elizabethtext").hide();
		break;
	}
	return;
}
$(document).ready(function(){
	showPage("#zolatext");
	$("#zolalink").click(function(){
		showPage("#zolatext");
    });
    $("#jimlink").click(function(){
       showPage("#jimtext");
	});
    $("#guylink").click(function(){
		showPage("#guytext");
    });
	$("#margaretlink").click(function(){
		showPage("#margarettext");
    });
    $("#susanlink").click(function(){
       showPage("susantext");
	});
    $("#elizabethlink").click(function(){
		showPage("#elizabethtext");
    });
});
</script>
</head>
<body>
<a href="#bio" id="zolalink">Zola</a>
<a href="#bio" id="jimlink">Jim</a>
<a href="#bio" id="guylink">Guy</a>
<a href="#bio" id="margaretlink">Margaret</a>
<a href="#bio" id="susanlink">Susan</a>
<a href="#bio" id="elizabethlink">Elizabeth</a>
<a name="bio" id="bio"></a>
<div id="margarettext">Margaret</div>
<div id="susantext">Susan</div>
<div id="elizabethtext">Elizabeth</div>
<div id="zolatext">Zola</div>
<div id="jimtext">Jim</div>
<div id="guytext">Guy</div>
</body>
</html>