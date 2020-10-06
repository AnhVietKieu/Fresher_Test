<?php
	$arr = [0,100,-4,8,143,5,99,100];
	

	function sumMax($arr)
	{
		$max_first = 0;
		$max_second = 0;

		for($i=0;$i<count($arr);$i++)
		{
			if($max_first<$arr[$i])
			{
				$max_second = $max_first;
				$max_first= $arr[$i];
				
			}elseif($max_second<$arr[$i]){
				$max_second = $arr[$i];
			}
		}

		return $max_first+$max_second;

	}

	echo"Input :";
	print_r($arr);
	echo"<br>";
	echo"Ouput :";
	print_r(sumMax($arr));
?>