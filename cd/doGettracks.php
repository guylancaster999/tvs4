<?php
function testDescr($d)
{
	return (strlen(trim($d))>2);
}
function testNum($id0)
{	
   $id0=trim($id0);
   $ctr=0;
   for ($i=0;$i<strlen($id0);$i++)
   {
	   $c=substr($id0,$i,1);
       $ctr+=($c>="0" && $c<="9");
	 }	   
    return ($ctr==strlen($id0));
}
function testTrackId($id,$trackid0)
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
	$resturl='http://178.62.37.42/albums/'.$id.'/tracks';
	$file = file_get_contents($resturl, false, $context);
 	$aAlbum=json_decode($file,true);
 	foreach ($aAlbum as $k=>$v)
	{
		foreach ($v as $key => $value)
		{
			$trackid = $value["id"];
			$ok = $ok || ($trackid==$trackid0);
		}
	}
return $ok;
}
$funq  		 	=$_POST["submit"];
$id				=$_POST["id"];
$title			=$_POST["title"];
$created    	=$_POST["created"];
$updated    	=$_POST["updated"];
$trackid		=$_POST["trackid"];
$tracklength	=$_POST["tracklength"];
$tracktitle		=$_POST["tracktitle"];
$trackcreated   =$_POST["trackcreated"];
$trackupdated   =$_POST["trackupdated"];
$er				= "";
$status 		= "";

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
	 if (!testDescr($tracktitle))$er="Full Track title Needed.";
	 
	 if (strlen($er)==0)
	 {
     $trackcreated	=date("Y-m-d G:i:s");
     $trackupdated	="";
	 $postdata 	= http_build_query(
		array("album_id" 	=> $id,
		    "id"         	=> $trackid,
			"title"      	=> $tracktitle,
			"length" 		=> $tracklength,
			"created_at" 	=> $trackcreated,
			"updated_at"	=> $trackupdated
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
		$resturl='http://178.62.37.42/albums/'.$id.'/tracks';
		$result = file_get_contents($resturl, false, $context);	
		$status="Added Track";
		}
	 $link			="tracks.php";
	 $link			.="?trackid=".$trackid;
	 $link			.="&tracktitle=".$tracktitle;
	 $link			.="&tracklength=".$tracklength;
	 $link			.="&trackcreated=".$trackcreated;
	 $link			.="&trackupdated=".$trackupdated;
	 $link			.="&id=".$id;
	 $link			.="&title=".$title;
	 $link			.="&created=".$created;
	 $link			.="&updated=".$updated;
	 $link			.="&er=".$er;
	 $link			.="&status=".$status;
     header("location: ".$link);
     exit;	  
	break;
	
	CASE "Change":
	if (!testDescr($tracktitle)) $er="Full Track Title Required - ".$title;
	
	if (!testnum($trackid))
	{
		$er.="Track ID must be numeric.";
	}
	elseif (!testTrackId($id,$trackid))
	{
		$er.="Album ".$id." Track ID ".$trackid." not found";
	}
	if (strlen($er)==0)
	{
	$trackupdated	=date("Y-m-d G:i:s");
     $postdata 		= http_build_query(
		array("album_id" 	=> $id,
		   "id"         	=> $trackid,
		"title"      	=> $tracktitle,
		"length" 		=> $tracklength,
		"created_at" 	=> $trackcreated,
		"updated_at"	=> $trackupdated
		)
		);
		$opts = array('http' =>
					array('method'  => 'PUT',
				       'header'  => "api-username: guy\r\n".
					   "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n",
					'content' => $postdata)
		);
		$context  = stream_context_create($opts);
		$resturl='http://178.62.37.42/albums/'.$id.'/tracks/'.$trackid;
		$result = file_get_contents($resturl,false,$context);	
		$status="Changed Track";
	}
	  $link			="tracks.php";
	  $link			.="?trackid=".$trackid;
	  $link			.="&tracktitle=".$tracktitle;
	  $link			.="&tracklength=".$tracklength;
	  $link			.="&trackcreated=".$trackcreated;
	  $link			.="&trackupdated=".$trackupdated;
	  $link			.="&id=".$id;
	  $link			.="&title=".$title;
	  $link			.="&created=".$created;
	  $link			.="&updated=".$updated;
      $link.="&er=".$er;
  	$link.="&status=".$status;
	 header('Location: '.$link);
	exit;
	break;

	CASE "Delete":
	
	if (!testnum($trackid))
	{
		$er.="Track ID must be numeric.";
	}
	elseif (!testTrackId($id,$trackid))
	{
		$er.="Album ".$id." Track ID ".$trackid." not found";
	}
    if (strlen($er)==0)
	{		
		$postdata = http_build_query(
			array("album_id" 	=> $id,
		    "id"         	=> $trackid,
			"title"      	=> $tracktitle,
			"length" 		=> $tracklength,
			"created_at" 	=> $trackcreated,
			"updated_at"	=> $trackupdated			)
			);
		$opts = array('http' =>
				array('method'  => 'DELETE',
				       'header'  => "api-username: guy\r\n".
									"api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n",
						'content' => $postdata)
		);
		$context  = stream_context_create($opts);
		$resturl='http://178.62.37.42/albums/'.$id.'/tracks/'.$trackid;
	   	$result = file_get_contents($resturl,false, $context);	
		$status="Deleted ";
		}
	$link			="tracks.php";
	  $link			.="?id=".$id;
	  $link			.="&title=".$title;
	  $link			.="&created=".$created;
	  $link			.="&updated=".$updated;
	 $link			.="&er=".$er;
	 $link			.="&status=".$status;
    header('Location: '.$link);
	break;

	CASE "Enquire":
	
	if (!testnum($trackid))
	{
		$er.="Track ID must be numeric.";
	}
	elseif (!testTrackId($id,$trackid))
	{
		$er.="Album ".$id." Track ID ".$trackid." not found";
	}
    if (strlen($er)==0)
	{		
	$opts 	= array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"api-username: guy\r\n" .
				  "api-token: d55eb61bda4b6a45d2e7252f25c8949f\r\n"
	  )
	);
	$context = stream_context_create($opts);
	$resturl='http://178.62.37.42/albums/'.$id.'/tracks/'.$trackid;
	$file 	= file_get_contents($resturl,false,$context);
	$aAlbum0	=json_decode($file,true);
	foreach($aAlbum0 as $v=>$k){
		$tracks=$k[0];
	}
	$status="Enquiry Succeeded";
	}
	$link	="tracks.php";
    $link	.="?id=".$id;
	$link	.="&title=".$title;
	$link	.="&created=".$created;
	$link	.="&updated=".$updated;
	$link	.="&trackid=".$tracks["id"];
	$link	.="&tracktitle=".$tracks["title"];
	$link	.="&trackcreated=".$tracks["created_at"];
	$link	.="&trackupdated=".$tracks["updated_at"];
	$link	.="&tracklength=".$tracks["length"];
	 $link			.="&er=".$er;
	 $link			.="&status=".$status;
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
	$resturl='http://178.62.37.42/albums/'.$id.'/tracks';
	$file = file_get_contents($resturl, false, $context);

	print "<html>
	<head>
		<style>
		body
		{font-family:Arial;}
		th
		{align:left;}
		td
		{padding-right:10px;}
		</style>
	</head>
	<body>
	<h1>Album Track List</h1>";
	$aAlbum=json_decode($file,true);
	print "<b>".$id." ".$title."</b>";
	print "<br/><br/>";
	print "<table>
	  <tr>
	  <th>ID</th>
	  <th>Title</th>
	  <th>Length</th>
	  <th>Created</th>
	  <th>Updated</th>
	  </tr>";
	
	foreach ($aAlbum as $k=>$v)
	{
		$aAlbums=$v;
		$ctr=count($aAlbums);
	
    foreach ($aAlbums as $key => $value)
    {
  	 $aAlbum0	=$value;
	 $trackid		=$aAlbum0["id"];
	 $tracktitle	=$aAlbum0["title"];
	 $tracklength	=$aAlbum0["length"];
	 $trackcreated	=$aAlbum0["created_at"];
	 $trackupdated	=$aAlbum0["updated_at"];
	 $link			="tracks.php";
	 $link			.="?trackid=".$trackid;
	 $link			.="&tracktitle=".$tracktitle;
	 $link			.="&tracklength=".$tracklength;
	 $link			.="&trackcreated=".$trackcreated;
	 $link			.="&trackupdated=".$trackupdated;
	 $link			.="&id=".$id;
	 $link			.="&title=".$title;
	 $link			.="&created=".$created;
	 $link			.="&updated=".$updated;
	print "<tr>
	 <td><a href='".$link."'>".$trackid."</a></td>
	 <td>".$tracktitle."</td>
	 <td>".$tracklength."</td>
	 <td>".$trackcreated."</td>
	 <td>".$trackupdated."</td>
	 <tr>";
		}
	}
	print "</table>";
	 $link			="tracks.php";
	 $link			.="?id=".		$id;
	 $link			.="&title=".	$title;
	 $link			.="&created=".	$created;
	 $link			.="&updated=".	$updated;
	 print "<form action='".$link."'>
	<input type='submit' value ='Exit'>
	</form>
    </body>
	</html>";
	break;

case "Exit":
	 $link			="location: album.php";
	 $link			.="?id=".$id;
	 $link			.="&title=".$title;
	 $link			.="&created=".$created;
	 $link			.="&updated=".$updated;
	 header($link);
	 
	default: print "Error - unrecognised Function [".$funq."]"; 
}
?>