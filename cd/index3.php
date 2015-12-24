<h1>Version 1</h1>
<?php 
function permute($items, $perms = array( )) 
{
    if (empty($items))
	{ 
		var_dump($perms);
		print "<br/>";
    } 
	else 
	{
        for ($i = count($items)-1; $i>=0; --$i) 
		{
             $newitems = $items;
             $newperms = $perms;
             list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             pc_permute($newitems, $newperms);
        }
    }
}
data=array("A","F","H","J","K");
permute($data);