
<?php 

$dir='main';//默认文件夹名称
$filename='index';//默认文件名称
//判断路径是否存在
if(array_key_exists('PATH_INFO',$_SERVER)){
	$path=$_SERVER['PATH_INFO'];
	//此时输入的路径样式应该是  /main/index
	//使用substr方法去掉该路径中的第一个斜杠
	$str=substr($path,1) ;//截取字符串
	//按照explode方法以及斜杠分割目录名称和文件夹名称 结果为数组
	$arr=explode('/', $str);
	if(count($arr)==2){
		//覆盖默认的目录名称
		$dir=$arr[0];
		//覆盖默认的文件名称
		$filename=$arr[1];
	}else{
		//搜索失败时跳转到登录页面
		$filename='login';
	}
	
}
//嵌入一个子页面
	include('./views/'.$dir.'/'.$filename.'.html');


?>