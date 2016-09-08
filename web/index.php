<?php

header("Content-type:text/html;charset=utf-8");
//制作一个输出调试函数
function show_bug($msg){
	echo "<pre>";
	var_dump($msg);
	echo"</pre>";
}
	
//定义css img js常亮

 define("SITE_URL", "http://localhost:9096");
// define("CSS_URL",SITE_URL."/test/public/Home/css/");
 define("IMG_URL",SITE_URL."/web/public/Home/img/");
// define("JS_URL",SITE_URL."/test/public/Home/js/");

// define("ADMIN_CSS_URL",SITE_URL."/test/public/Admin/css/");
// define("ADMIN_IMG_URL",SITE_URL."/test/public/Admin/img/");
// define("ADMIN_JS_URL",SITE_URL."/test/public/Admin/js/");
//调成开发模式
define("APP_DEBUG", true);


include "../ThinkPHP/ThinkPHP.php";
	


