<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
function showPage(j)
{
	switch(j)
	{
		case 1:
		$("#text01").show();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
		case 2:
		$("#text01").hide();
		$("#text02").show();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
		case 3:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").show();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
		case 4:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").show();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
		case 5:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").show();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
		
		case 6:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").show();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
 		case 7:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").show();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").hide();
		break;
 		case 8:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").show();
		$("#text09").hide();
		$("#text10").hide();
		break;
 		case 9:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").show();
		$("#text10").hide();
		break;
 		case 10:
		$("#text01").hide();
		$("#text02").hide();
		$("#text03").hide();
		$("#text04").hide();
		$("#text05").hide();
		$("#text06").hide();
		$("#text07").hide();
		$("#text08").hide();
		$("#text09").hide();
		$("#text10").show();
		break;
 		}
	return;
}
$(document).ready(function(){
	showPage(1);
	$("#link01").click(function(){showPage(1);});
 	$("#link02").click(function(){showPage(2);});
 	$("#link02a").click(function(){showPage(2);});
	$("#link03").click(function(){showPage(3);});
	$("#link04").click(function(){showPage(4);});
	$("#link04a").click(function(){showPage(4);});
	$("#link05").click(function(){showPage(5);});
	$("#link05a").click(function(){showPage(5);});
	$("#link06").click(function(){showPage(6);});
	$("#link07").click(function(){showPage(7);});
	$("#link07a").click(function(){showPage(7);});
	$("#link08").click(function(){showPage(8);});
	$("#link08a").click(function(){showPage(8);});
	$("#link09").click(function(){showPage(9);});
	$("#link09a").click(function(){showPage(9);});
	$("#link10").click(function(){showPage(10);});
	 });
</script>
</head>
<body>
V-2
<a href="#bio" id="link01">Zola</a>
<a href="#bio" id="link02">Jim</a>
<a href="#bio" id="link03">Guy</a>
<a href="#bio" id="link04">Margaret</a>
<a href="#bio" id="link05">Susan</a>
<a href="#bio" id="link06">Elizabeth</a>
<a href="#bio" id="link07">Geraldine</a>
<a href="#bio" id="link08">Caroline</a>
<a href="#bio" id="link09">Stephanie</a>
<a href="#bio" id="link10">Liz</a>
<a name="bio" id="bio"></a>
<div id="text1">Zola</div>
<div id="text2">Jim</div>
<div id="text3">Guy</div>
<div id="text4">Margaret</div>
<div id="text5">Susan</div>
<div id="text6">Elizabeth</div>
<div id="text7">Geraldine</div>
<div id="text8">Caroline</div>
<div id="text9">Stephanie</div>
<div id="text10">Liz</div>
</body>
</html>