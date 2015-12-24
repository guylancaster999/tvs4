<h1>Version 9</h1>
<?php
session_start();
$_SESSION["closestVal"]= -1;
$_SESSION["closestString"]	="";

function use_numbers($perms)
{
    $target			= 532; 
	//-------initialise signs--------------------------------
    $signs 	= array();
	$num	= count($perms);
	for ($i=0; $i<$num; $i++) $signs[]="+"; 
	$done 		= false;
	$firstTime	= true;

	while (!$done)
	{
		$ptr	   = $num - 1;
		// calculate new signs----------------------------
		$newSigns  = false;

		while ((!$newSigns) && (!$firstTime))
		{			
		$s = $signs[$ptr];

		switch ($s)
		{
			case "+":
			$signs[$ptr]="-";
			$newSigns   =true;
			break;
			case "-":
			$signs[$ptr]="*";
			$newSigns   =true;
			break;
		}
		if (!$newSigns)
		{
			$signs[$ptr] = "+";
			$ptr --;
			if ($ptr<0) 
			{
				$newSigns=true;
				$done 	= true; 
			}//if
		} //if
	}//while
  $firstTime = false;

  if (!$done)
		{	
		//---- work out total for sign set--------------------------
			$ttl	= 0;
			$ret	= "";
		
			for ($i=0; $i<$num; $i++)
			{
				$c	 = $signs[$i];
				$v   = $perms[$i];
				$ret.= $c." ".$v." ";

				switch ($c)
				{
					case"+":
					$ttl += $v;
					break;
					case "-":
					$ttl -= $v;
					break;
					default:
					$ttl *= $v;
				}
			}  //for
			
			$distance = abs($ttl-$target);
			$closestVal=$_SESSION["closestVal"];
		
			if (($closestVal<0)||($distance<$closestVal))
			{
				$_SESSION["closestVal"]   =$distance;
				$_SESSION["closestString"]= $ret."=".$ttl;
			}
		}  //if not done
	} //while
}//function

function permute($items, $perms = array( )) 
{
    if (empty($items)) 
	{ 
		use_numbers($perms);
    }  
	else 
	{
        for ($i = count($items) - 1; $i >= 0; --$i) 
		{
             $newitems = $items;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             permute($newitems, $newperms);
         }
    }
}
$target = 532; 
if (($handle = fopen("data.csv", "r")) !== FALSE) 
{
    $data	= fgetcsv($handle, 1000, ",");
    $num 	= count($data);
	fclose($handle);
	if ($num<1)
	{
		print "Error - No good data in csv file - data.csv";
		exit;
	}
}
else
{
	print "Error - No good csv file - data.csv";
	exit;
}             
permute($data);
print "Target = ".$target."<br/>";
print "Best Guess = ".$_SESSION["closestString"]."<br/>";
?>