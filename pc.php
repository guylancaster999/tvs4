<?php
$mysqli = new mysqli('atlas.elite.net.uk', 'chorlt02_db1_ms', 'mW7ptYRKk','chorlt02_db1');
if ($mysqli->connect_error)   die("Connection failed: " . $conn->connect_error);

if (!$result = $mysqli->query($sql)) {
     echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
$mysqli->query("delete from pc;");
$hdl=fopen("postcodes.csv","r");
$ctrmax	=1000;
$ctr	=0;
$a=array();
$wd="";
while ($ctr<$ctrmax)
{
	$c   =fread($hdl,1);
	$ctr++;
	
	if ($c==',')
	{	
		$a[]=$wd;
		$wd="";
	}
	elseif (ord($c)<32)
	{
		$a[] = $wd;
		$wd="";
		if ($mysqli->connect_error) die("Connection failed: " . $conn->connect_error);
		$sql='insert into pcd
         		("pc","n","e") 
		         values 
				 ("'.$a[0].'",'.$a[3].','.$a[4].');';
	print $sql."<br/>";
 	$a=array();
	}
	else $wd.=$c;
}