<?php
function testDescr($d)
{
	return (strlen(trim($d))>2);
}

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
	$context= stream_context_create($opts);
	$file 	= file_get_contents('http://178.62.37.42/albums', false, $context);
	$aAlbum	=json_decode($file,true);
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

$funq  	 	= $_POST["submit"];
$id			= $_POST["id"];
$title		= $_POST["title"];
$created    = $_POST["created"];
$updated    = $_POST["updated"];
$er			= $status = "";
switch ($funq)
{
	case "Tracks":
	$link="tracks.php";
    $link.="?id=".$id;
	$link.="&title=".$title;
	$link.="&created=".$created;
	$link.="&updated=".$updated;
	header('Location: '.$link);
	break;
	
	case "Add":
	$er="";
	if (!testDescr($title)) $er="Full Title Required - ".$title;
	if (strlen($er)==0)
	{
		$created	=date("Y-m-d G:i:s");
		$updated	="";
		$postdata 	= http_build_query(
		array(    "id"         => "1",
		"title"      => $title,
		"created_at" => $created,
		"updated_at" => $updated
		)
		);
		$opts = array('http' =>
    			array('method'  => 'POST',
				       'header'  => "api-username: guy\r\n".
					   "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n",
				'content' => $postdata
			)
		);
		$context  = stream_context_create($opts);
		$result   = file_get_contents('http://178.62.37.42/albums', false, $context);	
		$status   = "Added Album";
	}
	$link="album.php";
    $link.="?id=".$id;
	$link.="&title=".$title;
	$link.="&created=".$created;
	$link.="&updated=".$updated;
	$link.="&tracks=".$tracks;
	$link.="&er=".$er;
	$link.="&status=".$status;
	header('Location: '.$link);
	exit;
	break;
	
	case "Change":
    $er="";
	if (!testDescr($title)) $er="Full Title Required - ".$title;
	if (!testnum($id))$er.="ID must be numeric.";elseif (!testId($id))	$er.="ID ".$id." not found";
	if (strlen($er)==0)
	{
		$updated=date("Y-m-d G:i:s");
		$postdata = http_build_query(
			array("id"   => $id,
			"title"      => $title,
			"updated_at" => $updated,
			"created_at" => $created
			)
		);
		$opts = array('http' =>
					array('method'  => 'PUT',
				       'header'  => "api-username: guy\r\n".
					   "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n",
					'content' => $postdata)
		);
		$context  = stream_context_create($opts);
		$result = file_get_contents('http://178.62.37.42/albums/'.$id, false, $context);	
		$status="Changed Album";
	}
	$link="album.php";
    $link.="?id=".$id;
	$link.="&title=".$title;
	$link.="&created=".$created;
	$link.="&updated=".$updated;
	$link.="&tracks=".$tracks;
	$link.="&er=".$er;
	$link.="&status=".$status;
	header('Location: '.$link);
	exit;
	break;

	case "Delete":
	$er="";
	if (!testNum($id))	$er="ID must be numeric.";	elseif (!testId($id))$er="ID ".$id." not found";

	if (strlen($er)==0)
	{
		$link="album.php";
		$postdata = http_build_query(
			array("id"         => $id,
			"title"      => $title,
			"created_at" => $created,
			"updated_at" => $updated
			)
		);
		$opts = array('http' =>
				array('method'  => 'DELETE',
				       'header'  => "api-username: guy\r\n".
									"api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n",
						'content' => $postdata)
		);
		$context  = stream_context_create($opts);
		$result = file_get_contents('http://178.62.37.42/albums/'.$id, false, $context);
		$status="Deleted Album";
	}
   	$link="album.php?er=".$er."&status=".$status;
	header('Location: '.$link);
	break;
	
	case "Enquire":
    	$er="";
	if (!testNum($id))	$er="ID must be numeric.";	elseif (!testId($id))	$er="ID ".$id." not found";

	if (strlen($er)==0)
	{
		$opts 	= array(
	     'http'=>array(
		   'method'=>"GET",
		   'header'=>"api-username: guy\r\n" .
				  "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n"
			)
		);
	$context 	= stream_context_create($opts);
	$file 		= file_get_contents('http://178.62.37.42/albums/'.$id, false, $context);
	$aAlbum		=json_decode($file,true);
	$aAlbum0	=$aAlbum["album"];
	$tracks		=$aAlbum0["tracks"];
	$link="album.php";
    $link.="?id=".$aAlbum0["id"];
	$link.="&title=".$aAlbum0["title"];
	$link.="&created=".$aAlbum0["created_at"];
	$link.="&updated=".$aAlbum0["updated_at"];
	$link.="&tracks=".count($tracks);
	}
	else
	{
		$link="album.php";
		$link.="?id=".$id."&er=".$er;
	}
	header('Location: '.$link);
	exit;
	break;
	
	case "List":
	$opts 	= array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"api-username: guy\r\n" .
				  "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n"
	  )
	);
	$context = stream_context_create($opts);
	print "<html>
	<head>
	<link href='main.css' rel='stylesheet'/><body>
	<h1>Album List</h1>";
	$file = file_get_contents('http://178.62.37.42/albums', false, $context);
	$aAlbum=json_decode($file,true);
	print "<table>
	  <tr>
	  <th>ID</th>
	  <th>Title</th>
	  <th>Created</th>
	  <th>Updated</th>
	  <th>Tracks</th>
	  </tr>";
	foreach ($aAlbum as $k=>$v)
	{
		$aAlbums=$v;
		$ctr=count($aAlbums);
	foreach ($aAlbums as $key => $value)
    {
  	 $aAlbum0	=$value;
	 $id		=$aAlbum0["id"];
	 $title		=$aAlbum0["title"];
	 $created	=$aAlbum0["created_at"];
	 $updated	=$aAlbum0["updated_at"];
	 $tracks	=count($aAlbum0["tracks"]);
	 $link		="album.php";
	 $link		.="?id=".$id;
	 $link		.="&title=".$title;
	 $link		.="&created=".$created;
	 $link		.="&updated=".$updated;
	 $link		.="&tracks=".$tracks;
	 print "<tr>
	 <td><a href='".$link."'>".$aAlbum0["id"]."</a></td>
	 <td>".$title."</td>
	 <td>".$created."</td>
	 <td>".$updated."</td>
	 <td>".count($aAlbum0["tracks"])."</td>
	 <tr>";
		}
	}
	print "</table>";
    print "<form action='album.php'>
	<input type='submit' value ='Exit'>
	</form>
    </body>
	</html>";
	break;
	default: print "Error - unrecognised Function [".$funq."]"; 
}
?>