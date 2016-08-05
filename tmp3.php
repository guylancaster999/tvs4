<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
function showPage(j)
{
	for(var i=1;i<=6;i++)
	{
		if (i==j)
		{
			$("#text"+i).show();
		}
		else
		{
			$("#text"+i).hide();
		}
	}
	return;
}
$(document).ready(function(){
	showPage(1);
	for(var i=1;i<=6;i++)
	{
		$("#link"+i).click(function(){
		showPage(i);
    });
});
</script>
</head>
<body>
<a href="#bio" id="link1">Zola</a>
<a href="#bio" id="link2">Jim</a>
<a href="#bio" id="link3">Guy</a>
<a href="#bio" id="link4">Margaret</a>
<a href="#bio" id="link5">Susan</a>
<a href="#bio" id="link6">Elizabeth</a>
<a name="bio" id="bio"></a>
<div id="text1">Margaret</div>
<div id="text2">Susan</div>
<div id="text3">Elizabeth</div>
<div id="text4">Zola</div>
<div id="text5">Jim</div>
<div id="text6">Guy</div>
</body>
</html>