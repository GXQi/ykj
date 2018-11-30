<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'ykj', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '123456', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'ykj_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	/* 错误页面模板 */
	'TMPL_ACTION_ERROR'     =>  'Public/dispatch_jump.html', // 默认错误跳转对应的模板文件'
	'TMPL_ACTION_SUCCESS'   =>  'Public/dispatch_jump.html', // 默认成功跳转对应的模板文件'
	//'TMPL_EXCEPTION_FILE'   =>  'Public/exception.html',// 异常页面的模板文件 
);