<?php
return array(
	'logs' => array(
		'path' => 'logs/log',
		'type' => 'file'
	),
	'cache' => array(
		'type' => 'memcached',
		'server' => 'localhost'
	),
	'database' => array(
		'table_prefix' => '',
		/*读取分离，第一个为master*/
		'default' => array(
			env('MONGODB', 'mongodb://127.0.0.1/ymm')
		),
		/*分库分表*/ //"?"代表一个字符，"*"多个字符（*暂时没有实现）
		'table_map' => array(
			'__default__' => 'default'
		),
	),
	'session' => array(
		'type' => 'cache',
		'prefix' => 'mm_'
	),
	/* cookie 配置 */
	'cookie' => array(
		'prefix' => 'fs_',
		'domain' => '',
		'path' => '/',
		'secure' => false
	),
	'charset' => 'utf-8',
	'timezone' => 'Etc/GMT-8',
	'debug' => true,
	'encrypt_key' => '597b53ae698616635c7c2d2ff48dc547'
);

