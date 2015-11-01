<?php
$gpics='{"gallery":
	[
	{"picsmall":"fredsmall1.pic","piclarge":"fred1.pic","picttl":"fred1"},
	{"picsmall":"fredsmall2.pic","piclarge":"fred2.pic","picttl":"fred2"},
	{"picsmall":"fredsmall3.pic","piclarge":"fred3.pic","picttl":"fred3"}
	]}';
	$x =json_decode($gpics,true);
	$y =$x["gallery"][1]; 
	var_dump($x);
	print $y["id"]."<br/>";
	print $y["picsmall"]."<br/>";
	print $y["piclarge"]."<br/>";
	print $y["picttl"]."<br/>";

 <?php displayPic("gallery_general.php","General Photos",2,$gpics); ?>	