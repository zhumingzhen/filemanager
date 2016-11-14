<?php
//打开指定目录
/**
 * [ 遍历目录，只读取最外层的内容 ]
 * @author zhumingzhen<itdream53@gmail.com> 
 * @link   http://51growup.com
 * @date   2016-11-14T02:19:58+0800
 * @param  [sting $path]
 * @return [array]
 */
function readDirectory($path)
{
	$handle = opendir($path);
	while (($item = readdir($handle)) !== false) {
		//.和..这两个特殊目录
		if ($item != "." && $item != "..") {
			if (is_file($path."/".$item)) {
				$arr['file'][] = $item;
			}
			if (is_dir($path."/".$item)) {
				$arr['dir'][] = $item;
			}
		}
	}
	closedir($handle);
	return $arr;
}
// $path = "file";
// print_r(readDirectory($path));