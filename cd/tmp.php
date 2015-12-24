<?php
function testNum($id0)
{	
   $id0=trim($id0);
   $ctr=0;
   for ($i=0;$i<strlen($id0);$i++)
   {
	   $c=substr($id0,$i,1);
       $ctr+=($c>="0" &&$c<="9")
	 }	   
    return ($ctr==strlen($id0);
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