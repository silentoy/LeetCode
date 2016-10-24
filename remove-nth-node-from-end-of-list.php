<?php
	/**
	* 判断给定的key在数组范围内
	* 利用array_silce,从倒数n截取一个
	*/
	function fun($head, $n) {
		if ($n > count($head)) return false;
		
		unset($head[key(array_slice($head, -$n, 1, true))]);
		return $head;
	}
	
	//DEMO
	print_r(fun(array(1, 2, 3, 4, 5), 3));
?>
