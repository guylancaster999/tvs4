<?php
$id				=$_REQUEST["id"];
$created		=$_REQUEST["created"];
$updated		=$_REQUEST["updated"];
$title			=$_REQUEST["title"];
$trackid		=$_REQUEST["trackid"];
$tracklength	=$_REQUEST["tracklength"];
$trackcreated	=$_REQUEST["trackcreated"];
$trackupdated	=$_REQUEST["trackupdated"];
$tracktitle		=$_REQUEST["tracktitle"];
$er		=$_REQUEST["er"];
$status	=$_REQUEST["status"];

function testNum($id0)
{	
   $id0 = trim($id0);
   $strl=strlen($id0);
   $ctr = 0;
   for ($i=0; $i<$strl; $i++)
   {
	   $c=substr($id0,$i,1);
       $ctr+=($c>="0" && $c<="9");
	}	   
    return (($strl>0) && ($ctr==strlen($id0) ) );
}
function testId($id0)
{
	$ok=false;
	$opts 	= array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"api-username: guy\r\n" .
				  "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n"
	  )
	);
	$context = stream_context_create($opts);
	$file = file_get_contents('http://178.62.37.42/albums', false, $context);
	$aAlbum=json_decode($file,true);
	foreach ($aAlbum as $k=>$v)
	{
		foreach ($v as $key => $value)
		{
			$id	= $value["id"]; 
			$ok = $ok || ($id==$id0);
		}
	}
return $ok;
}
$er="";
if (!testNum($id))
{
	$er="ID not numeric";
}
else if (!testID($id))
{
	$er="ID ".$id." not found";
}
if (strlen($er)>0)
{
	header("location: album.php?id=".$id."&er=".$er);
	exit;
}
?>
<html>
<head>
    <link href="main.css" rel="stylesheet"/>
</head>
<body>
<h1>Album System - Tracks</h1>
<div align="center">
	<span class="er"><?php print $er; ?></span>
	<span class="status"><?php print $status;?></span>
</div>
<form action="doGettracks.php" method="post">
	<table>
		<tr>
			<td>Album ID</td>
			<td><input type="hidden" name="id" id="id"  value="<?php print $id;?>"/><?php print $id;?> </td>
		</tr>
		<tr>
			<td>Album Title</td>
			<td><input type ="hidden" name="title" id="title" value="<?php print $title;?>"/>
			<?php print $title;?></td>
		</tr>
		<tr>
			<td>Album Created</td>
			<td><input type ="hidden" name="created" id="created"  value="<?php print $created;?>"/>
			<?php print $created;?></td>
		</tr>
		<tr>
			<td>Album Updated</td>
			<td><input type ="hidden" name="updated" id="updated" value="<?php print $updated;?>"/>
			<?php print $updated;?></td>
		</tr>
		<tr>
			<td>Track ID</td>
			<td><input type="text" name="trackid" id="trackid" size="10" value="<?php print $trackid;?>"/></td>
		</tr>
		<tr>
			<td>Track Title</td>
			<td><input type ="text" name="tracktitle" id="tracktitle" size="70" value="<?php print $tracktitle;?>"/></td>
		</tr>
		<tr>
			<td>Track Length</td>
			<td><input type ="text" name="tracklength" id="tracklength" size="20" value="<?php print $tracklength;?>"/></td>
		</tr>
		<tr>
			<td>Track Created</td>
			<td><input type ="hidden" name="trackcreated" id="trackcreated"  value="<?php print $trackcreated;?>"/>
			<?php print $trackcreated;?></td>
		</tr>
		<tr>
			<td>Track Updated</td>
			<td><input type ="hidden" name="trackupdated" id="trackupdated" value="<?php print $trackupdated;?>"/>
			<?php print $trackupdated;?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<input type="submit" name="submit" id="submit"  value="Add">
			<input type="submit" name="submit" id="submit"  value="Change">
			<input type="submit" name="submit" id="submit"  value="Delete">
			<input type="submit" name="submit" id="submit"  value="Enquire"> 
			<input type="submit" name="submit" id="submit"  value="List">
			<input type="submit" name="submit" id="submit"  value="Exit">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
