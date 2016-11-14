<?php

//Byte KB MB GB TB EB
/**
 *  转换字节大小
 * @param  [$size]
 * @return [float]
 */
/**
 * [ 转换字节大小 ]
 * @author zhumingzhen<itdream53@gmail.com> 
 * @link   http://51growup.com
 * @date   2016-11-14T02:18:52+0800
 * @param  [number $size]
 * @return [number]
 */
function transByte($size)
{
	$arr = array("B","KB","MB","GB","TB","EB");
	$i = 0;
	while ($size > 1024) {
		$size/=1024;
		$i++;
	}
	return round($size,2).$arr[$i];
}
