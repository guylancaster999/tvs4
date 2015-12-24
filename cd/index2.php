<?php
// load numbers from data.csv ----------------------------------------------------
$target = 532; 

if (($handle = fopen("data.csv", "r")) !== FALSE) 
{
    $data	= fgetcsv($handle, 1000, ",");
    $num 	= count($data);
	fclose($handle);
	if ($num<1)
	{
		print "Error - No good data in csv file - data.csv";
	}
}
else
{
	print "Error - No good csv file - data.csv";
}              
//-------initialise signs------------------------------------------------
$signs = array();
for ($i=0;$i<$num;$i++)$signs[]="+"; 
$done 			= false;
$closest		=-1;
$closestString	="";

while (!$done)
{
	$ptr		= $num - 1;
	$newSigns	= ($closest == -1); // dont do this first time

	// calculate new signs------------------------------------------------
	while (!$newSigns)
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
			}
		} 
	}
	if (!$done)
	{	
	//-----------work out total for sign set-------------------------------------
		$ttl	= 0;
		$ret	= "";
		
		for ($i=0; $i<$num; $i++)
		{
			$c	 = $signs[$i];
			$v   = $data[$i];
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
		}  
		$distance = abs($ttl-$target);

		if (($closest<0)||($distance<$closest))
		{
			$closest		= $distance;
			$closestString	= $ret."=".$ttl;
		}
 	}  //if not done
}	//while not done
print "Target = ".$target."<br/>";
print "Best Guess = ".$closestString."<br/>";
?>