<?php
	$arr = [1,5,4,7,9,0,-10,13,93,14,15];
	$tg =0;
	$tg_1=0;
	$max_first =0;
	$arr_new = array();
	// sap xep mang tang dan 

	for($i=0;$i<count($arr)-1;$i++)
	{
		for($j=$i+1;$j<count($arr);$j++)
		{
			if($arr[$i] > $arr[$j]){
				$tg= $arr[$i];
				$arr[$i] = $arr[$j];
	            $arr[$j] = $tg;
        	}
		}

	}

	for($i=0;$i<count($arr);$i++)
	{
		$max_first = $arr[count($arr)-$i] - $arr[$i];
		
		if($max_first>0&&$max_first<=$tg){

		}
	}

	print_r($arr);
?>