<?php

	$arr = [11,2,8,10,5,99,1,8,9];
	$arr_new = array();
	$n =3;

	// chia array thanh 3 phan 
	for($i=0;$i<count($arr);$i++)
	{	
		$arr_new[] = $arr[$i];
	}

	print_r($arr_new);
?>