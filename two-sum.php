<?php
	var_dump(towSum(array(4, 7, 3, 2), 9));
	
	/**
	* 循环数组,用$target去减当前的$val,判断结果在给定的$nums里,则匹配出需要的key
	* 1. 如果$val比给定的$target还要大,直接跳过本次循环
	* 2. 判断是否相等的函数里,利用array_search函数,直接获取对应key,减少一次函数调用
	*/
	function towSum($nums, $target) {
		foreach ($nums as $key=>$val) {
			if ($val > $target) continue;
			
			$findVal = $target - $val;
			if ($findVal != $val && $match = array_search($findVal, $nums)) {
				return array($key, $match);
			}
		}
		
		return false;
	}
?>