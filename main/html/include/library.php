<?php

function menu ($depth='', $on='', $off='')
{
	GLOBAL $file_depth;

	$depth	= explode('-', $depth);

	if (empty($file_depth)===true) { return $off; }

	$_depth	= array();

	for ($i=0; $i<count($depth); $i++)
	{
		if (empty($file_depth[$i]) == false) $_depth[]	= $file_depth[$i];
	}
	
	$file_depth_tmp	= $_depth;


	foreach ($depth as $key => $val)
	{
		if (empty($file_depth[$key])===true || $val!=$file_depth[$key]) { return $off; }

	}

	return $on;

}

?>