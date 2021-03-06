<?php
/**
 * @copyright Copyright(c) 2012 Fasim
 * @author Kevin Lai<lhs168@gmail.com>
 */
namespace Fasim\Session;

use Fasim\Core\Application;
use Fasim\Facades\Config;
/**
 * Session工厂类
 */
class SessionFactory {
	protected static $instance = null;
	/**
	 * 得到Session对象
     *
	 * @return ISLSession
	 */
	public static function getSession() {
		// 单例模式
		if (self::$instance != NULL && is_object(self::$instance)) {
			return self::$instance;
		}
		
		// 获取数据库配置信息
		if (!Config::has('session')) {
			throw new \Fasim\Core\Exception('Can not find session info in config.php', 1000);
			exit();
		}
		
		$config = Config::get('session');

		$sessionObj = null;
		switch ($config['type']) {
			case "cache" :
				$sessionObj = new CacheSession($config['prefix']);
				break;
			default:
				$sessionObj = new PHPSession($config['prefix']);
				break;
		}
		
		
		self::$instance = $sessionObj;
		return self::$instance;
	}

}